<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $month = date('m');
        $year = date('Y');


        $bill=new Bill;
        if(!auth()->user()->can('isAdmin')){
            $billStatistics=[
                'income'=>[
                    'all'=>$bill->where('user_id',auth()->user()->id)->where('amount','>',0)->get()->sum('amount'),
                    'year'=>$bill->where('user_id',auth()->user()->id)->where('amount','>',0)->whereYear('created_at','=',$year)->get()->sum('amount'),
                    't3month'=>$bill->where('user_id',auth()->user()->id)->where('amount','>',0)->whereMonth('created_at','<=',$month)->whereMonth('created_at','>',$month-3)->get()->sum('amount'),
                    'month'=>$bill->where('user_id',auth()->user()->id)->where('amount','>',0)->whereMonth('created_at','<',$month)->get()->sum('amount')
                ],
                'due'=>[
                    'all'=>$bill->where('user_id',auth()->user()->id)->where('amount','<',0)->get()->sum('amount'),
                    'year'=>$bill->where('user_id',auth()->user()->id)->where('amount','<',0)->whereYear('created_at','=',$year)->get()->sum('amount'),
                    't3month'=>$bill->where('user_id',auth()->user()->id)->where('amount','<',0)->whereMonth('created_at','<=',$month)->whereMonth('created_at','>',$month-3)->get()->sum('amount'),
                    'month'=>$bill->where('user_id',auth()->user()->id)->where('amount','<',0)->whereMonth('created_at','<',$month)->get()->sum('amount')
                ],
            ];

        }else{
            $billStatistics=[
                'income'=>[
                    'all'=>$bill->where('amount','>',0)->get()->sum('amount'),
                    'year'=>$bill->where('amount','>',0)->whereYear('created_at','=',$year)->get()->sum('amount'),
                    't3month'=>$bill->where('amount','>',0)->whereMonth('created_at','<=',$month)->whereMonth('created_at','>',$month-3)->get()->sum('amount'),
                    'month'=>$bill->where('amount','>',0)->whereMonth('created_at','<',$month)->get()->sum('amount')
                ],
                'due'=>[
                    'all'=>$bill->where('amount','<',0)->get()->sum('amount'),
                    'year'=>$bill->where('amount','<',0)->whereYear('created_at','=',$year)->get()->sum('amount'),
                    't3month'=>$bill->where('amount','<',0)->whereMonth('created_at','<=',$month)->whereMonth('created_at','>',$month-3)->get()->sum('amount'),
                    'month'=>$bill->where('amount','<',0)->whereMonth('created_at','<',$month)->get()->sum('amount')
                ],
            ];


        }






        $acl = [
            'admin_add_transaction' => (Gate::allows('admin_add_transaction')) ? true : false,
            'admin_delete_transaction' => (Gate::allows('admin_delete_transaction')) ? true : false,
        ];
        $orders=Order::latest()->get();
        $users=User::latest()->get();
        return view('bills.index',compact(['acl','orders','users','billStatistics']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
