<?php

namespace App\Http\Controllers;

use App\Events\AdminApprovedOrder;
use App\Events\AdminCompletedOrder;
use App\Events\AdminUpdateOrder;
use App\Events\AgentSentOrder;
use App\Events\AgentSubmitOrder4Review;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
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
        $acl = [
            'agent_create_draft_order' => (Gate::allows('agent_create_draft_order')) ? true : false,
            'agent_edit_draft_order' => (Gate::allows('agent_edit_draft_order')) ? true : false,
            'agent_delete_draft_order' => (Gate::allows('agent_delete_draft_order')) ? true : false,
        ];

        return view('orders.index',compact(['acl']));
    }

    public function pending_orders()
    {
        $acl = [
            'admin_edit_pending_order' => (Gate::allows('admin_edit_pending_order')) ? true : false,
            'admin_delete_pending_order' => (Gate::allows('admin_delete_pending_order')) ? true : false,
        ];

        return view('orders.pending',compact(['acl']));
    }

    public function approved_orders()
    {
        $acl = [
            'admin_edit_approved_order' => (Gate::allows('admin_edit_approved_order')) ? true : false,
            'admin_delete_approved_order' => (Gate::allows('admin_delete_approved_order')) ? true : false,
        ];

        return view('orders.approved',compact(['acl']));
    }

    public function completed_orders()
    {
        $acl = [
            'admin_edit_completed_order' => (Gate::allows('admin_edit_completed_order')) ? true : false,
            'admin_delete_completed_order' => (Gate::allows('admin_delete_completed_order')) ? true : false,
        ];

        return view('orders.completed',compact(['acl']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session()->exists('order_id')) {

            $acl = [
                //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
            ];

            return view('orders.create_order', compact(['acl',session('order_id')]));

        }else{
            try {
                $order = Order::create([
                    'user_id' => Auth::id(),
                    'title' => 'untitled',
                    'desc' => 'no description',
                    'note' => '',
                    'discount' => 0,
                    'status' => 0,
                    'status_note' => '',
                ]);

                session()->put('order_id', $order->id);

                $acl = [
                    //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
                ];

                return view('orders.create_order', compact(['acl']));

            } catch (Exception $e) {
                abort(403);
            }
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id'=>'required',
            'order_title'=>'required',
            'order_description'=>'required',
        ]);

        if ($request->exists('draft'))
        {
            try {

                $order = Order::findOrFail($request->order_id);

                $order->title = $request->order_title;

                $order->desc = $request->order_description;

                $order->status = 0;

                $order->save();

                session()->forget('order_id');

                return redirect()->route('orders.index');

            } catch (Exception $e) {
                abort(403);
            }
        }else{
            try {

                $order = Order::findOrFail($request->order_id);

                $order->title = $request->order_title;

                $order->desc = $request->order_description;

                $order->status = 1;

                $order->save();
                //Event
                $user=User::find($order->user_id);
                event(new AgentSentOrder($order));
                //

                session()->forget('order_id');

                return redirect()->route('orders.pending');

            } catch (Exception $e) {
                abort(403);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {


            $order = Order::findOrFail($id);
            if(auth()->user()->id==$order->user_id or auth()->user()->can('isAdmin')){
                return view('orders.order_details',compact('order'));
            }

             abort(403);

        } catch (Exception $e) {

            abort(403);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    // edit view for draft orders
    public function edit($id)
    {
        $order = Order::find($id);
        $acl = [
            //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
        ];
        return view('orders.order_edit',compact('order','acl'));
    }

    // edit view for pending orders
    public function edit_pending_order($id)
    {
        $order = Order::find($id);
        $acl = [
            //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
        ];
        return view('orders.order_edit_pending',compact('order','acl'));
    }


    // edit view for approved orders

    public function edit_approved_order($id)
    {
        $order = Order::find($id);
        $acl = [
            //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
        ];
        return view('orders.order_edit_approved',compact('order','acl'));
    }

    // edit view for approved orders
    public function edit_completed_order($id)
    {
        $order = Order::find($id);
        $acl = [
            //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
        ];
        return view('orders.order_edit_completed',compact('order','acl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'order_id'=>'required',
            'order_title'=>'required',
            'order_description'=>'required',
            'status_note'=>'required',
        ]);

        if ($request->exists('pending'))
        {
            try {

                $order = Order::findOrFail($request->order_id);

                $order->title = $request->order_title;

                $order->desc = $request->order_description;

                $order->note = $request->note;

                $order->discount = $request->discount;

                $order->status = 1;

                $order->status_note = $request->status_note;

                $order->save();

                return redirect()->route('orders.pending');

            } catch (Exception $e) {
                abort(403);
            }
        }else{
            try {

                $order = Order::findOrFail($request->order_id);

                $order->title = $request->order_title;

                $order->desc = $request->order_description;

                $order->note = $request->note;

                $order->discount = $request->discount;

                $order->status = 2;

                $order->status_note = $request->status_note;

                $order->save();
                event(new AdminApprovedOrder($order));
                return redirect()->route('orders.approved');

            } catch (Exception $e) {
                abort(403);
            }
        }
    }



    public function updateApprovedOrder(Request $request)
    {
        $request->validate([
            'order_id'=>'required',
            'order_title'=>'required',
            'order_description'=>'required',
            'status_note'=>'required',
        ]);

        if ($request->exists('approved'))
        {
            try {

                $order = Order::findOrFail($request->order_id);

                $order->title = $request->order_title;

                $order->desc = $request->order_description;

                $order->note = $request->note;

                $order->discount = $request->discount;

                $order->status = 2;

                $order->status_note = $request->status_note;

                $order->save();
                event(new AdminUpdateOrder($order));



                return redirect()->route('orders.approved');

            } catch (Exception $e) {
                abort(403);
            }
        }else{
            try {

                $order = Order::findOrFail($request->order_id);

                $order->title = $request->order_title;

                $order->desc = $request->order_description;

                $order->note = $request->note;

                $order->discount = $request->discount;

                $order->status = 3;

                $order->status_note = $request->status_note;

                $order->save();
                event(new AdminCompletedOrder($order));

                return redirect()->route('orders.completed');

            } catch (Exception $e) {
                abort(403);
            }
        }
    }

    public function updateCompletedOrder(Request $request)
    {
        $request->validate([
            'order_id'=>'required',
            'order_title'=>'required',
            'order_description'=>'required',
            'status_note'=>'required',
        ]);

        try {

            $order = Order::findOrFail($request->order_id);

            $order->title = $request->order_title;

            $order->desc = $request->order_description;

            $order->note = $request->note;

            $order->discount = $request->discount;

            $order->status = 3;

            $order->status_note = $request->status_note;

            $order->save();
            event(new AdminUpdateOrder($order));

            return redirect()->route('orders.completed');

        } catch (Exception $e) {
            abort(403);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function show_before_export($id)
    {
       /* try{

            $order = Order::findOrFail($id);
            $OID=substr(md5($id),0,5).'-'.$id;
            $pdf = PDF::loadView('orders.order_invoice',compact(['order','OID']));
            $user=User::find(2);
            $user->notify(new SendPerforma($pdf,$OID));
            return 99;

        }catch (Exception $e){

            abort(403);

        }*/


        $user=User::find(2);
        $order = Order::findOrFail($id);
        /*$OID=substr(md5($id),0,5).'-'.$id;
        $pdf = PDF::loadView('orders.order_invoice',compact(['order','OID']));
        $user->notify(new YourOrderTrackingNo($pdf,$order));*/

        event(new AdminUpdateOrder($order));

        return 99;
    }

}
