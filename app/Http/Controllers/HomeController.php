<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

        auth()->user()->unreadNotifications->markAsRead();
        return view('home',compact(['data','months','billsValue','dueValue']));
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
