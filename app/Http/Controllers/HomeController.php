<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Item;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $due=  Bill::selectRaw('MONTHNAME(created_at) month , SUM(amount) total')
            ->groupBy('month')
            ->get();
        $bills=  Bill::selectRaw('MONTHNAME(created_at) month , SUM(amount) total')
            ->where('amount','>',0)
            ->groupBy('month')
            ->get();

        $bestAgentsList=DB::table('bills')
            ->join('users', 'users.id', '=', 'bills.user_id')
            ->select('users.name', DB::raw('SUM(bills.amount) AS total'))
            ->where('bills.amount', '>',0)
            ->groupBy('users.name')
            ->orderBy('total','desc')
            ->take(10)->get();
        $maxBestAgents=DB::table('bills')
            ->join('users', 'users.id', '=', 'bills.user_id')
            ->select('users.name', DB::raw('SUM(bills.amount) AS total'))
            ->where('bills.amount', '>',0)
            ->groupBy('users.name')
            ->orderBy('total','desc')
            ->get()->max('total');

        $months=$bills->pluck('month');
        $billsValue=$bills->pluck('total');
        $dueValue=$due->pluck('total');

        $limit=auth()->user()->getSetting('notifications-show-limit')->value;
        $orders=new Order;


        $data=[
            'allNoti'=>auth()->user()->notifications->take($limit),
            'newNoti'=>auth()->user()->unreadNotifications->take($limit),
            'oldNoti'=>auth()->user()->readNotifications->take($limit),
            'oPending'=>(auth()->user()->can('isAdmin'))?$orders->where('status',1)->count():auth()->user()->orders->where('status',1)->count(),
            'oDraft'=>(auth()->user()->can('isAdmin'))?$orders->where('status',0)->count():auth()->user()->orders->where('status',0)->count(),
            'oApproved'=>(auth()->user()->can('isAdmin'))?$orders->where('status',2)->count():auth()->user()->orders->where('status',2)->count(),
            'oDone'=>(auth()->user()->can('isAdmin'))?$orders->where('status',3)->count():auth()->user()->orders->where('status',3)->count()
        ];



        //return $data;



        if(auth()->user()->can('isAdmin')){
            $ordersFinance['draft']=Order::finance(0);
            $ordersFinance['pending']=Order::finance(1);
            $ordersFinance['approved']=Order::finance(2);
            $ordersFinance['done']=Order::finance(3);
        }else{
            $agent=auth()->user()->id;
            $ordersFinance['draft']=Order::finance(0,$agent);
            $ordersFinance['pending']=Order::finance(1,$agent);
            $ordersFinance['approved']=Order::finance(2,$agent);
            $ordersFinance['done']=Order::finance(3,$agent);
        }




        auth()->user()->unreadNotifications->markAsRead();
        return view('home',compact([
            'data',
            'months',
            'billsValue',
            'dueValue',
            'bestAgentsList',
            'maxBestAgents',
            'ordersFinance'
        ]));
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
