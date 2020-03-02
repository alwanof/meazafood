<?php

namespace App\Http\Controllers\API;

use App\Bill;
use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use App\Product;
use Exception;
use Illuminate\Http\Request;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // will return draft orders
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',0)->with('user')->orderBy('updated_at','desc')->paginate(10);
        }

        return Order::where([
            'status'=>0,
            'user_id'=>auth()->user()->id
        ])->with('user')->orderBy('updated_at','desc')->paginate(10);
    }

    public function search(Request $request)
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',0)
                ->where('title', 'LIKE', '%'. $request->keywords .'%')
                ->with('user')->orderBy('updated_at','desc')->paginate(10);
        }

        return Order::where([
            'status'=>0,
            'user_id'=>auth()->user()->id
        ])->where('title', 'LIKE', '%'. $request->keywords .'%')
            ->with('user')->orderBy('updated_at','desc')->paginate(10);

    }

    public function destroy($id)
    {

        $product = Order::find($id);
        $product->delete();
        Bill::where('order_id',$id)->delete();
        return response()->json(1, 200);
    }

    public function pending_orders()
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',1)->with('user')->orderBy('updated_at','desc')->paginate(10);
        }
        return Order::where([
            'status'=>1,
            'user_id'=>auth()->user()->id
        ])->with('user')->orderBy('updated_at','desc')->paginate(10);

    }

    public function approved_orders()
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',2)->with('user')->orderBy('updated_at','desc')->paginate(10);
        }
        return Order::where([
            'status'=>2,
            'user_id'=>auth()->user()->id
        ])->with('user')->orderBy('updated_at','desc')->paginate(10);

    }

    public function completed_orders()
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',3)->with('user')->orderBy('updated_at','desc')->paginate(10);
        }
        return Order::where([
            'status'=>3,
            'user_id'=>auth()->user()->id
        ])->with('user')->orderBy('updated_at','desc')->paginate(10);

    }

    public function search_pending_orders(Request $request)
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',1)
                ->where('title', 'LIKE', '%'. $request->keywords .'%')
                ->with('user')->orderBy('updated_at','desc')->paginate(10);
        }

        return Order::where([
            'status'=>1,
            'user_id'=>auth()->user()->id
        ])->where('title', 'LIKE', '%'. $request->keywords .'%')
            ->with('user')->orderBy('updated_at','desc')->paginate(10);
    }

    public function search_approved_orders(Request $request)
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',2)
                ->where('title', 'LIKE', '%'. $request->keywords .'%')
                ->with('user')->orderBy('updated_at','desc')->paginate(10);
        }

        return Order::where([
            'status'=>2,
            'user_id'=>auth()->user()->id
        ])->where('title', 'LIKE', '%'. $request->keywords .'%')
            ->with('user')->orderBy('updated_at','desc')->paginate(10);
    }

    public function search_completed_orders(Request $request)
    {
        if (auth()->user()->can('isAdmin')){
            return Order::where('status',3)
                ->where('title', 'LIKE', '%'. $request->keywords .'%')
                ->with('user')->orderBy('updated_at','desc')->paginate(10);
        }

        return Order::where([
            'status'=>3,
            'user_id'=>auth()->user()->id
        ])->where('title', 'LIKE', '%'. $request->keywords .'%')
            ->with('user')->orderBy('updated_at','desc')->paginate(10);
    }

    public function get_order_products($id)
    {
        return Item::where('order_id',$id)->with('product')->with('order')->get();
    }

    public function get_order_info($id)
    {
        return Order::find($id);
    }



}
