<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Item;
use App\Order;
use http\Exception;
use Illuminate\Http\Request;



class ItemController extends Controller
{
    public function remove_item_from_order($id)
    {
        $item = Item::find($id);
        $item->delete();
        return response()->json(1, 200);
    }

    public function add_new_item(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'desc' => 'required',
            'amount' => 'required',
            'price'=>'required',
            'discount'=>'required',
            'order_id'=>'required',
        ]);

        try {
            Item::create([
                'product_id' => $request->product_id,
                'desc' =>   'ssssssss',
                'amount' => $request->amount,
                'price'=>   $request->price,
                'discount'=>$request->discount,
                'order_id'=>$request->order_id,
            ]);
            return response()->json(1, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'id' => 'required',
            'desc' => 'required|string',
            'amount'=>'required',
            'price'=>'required',
            'discount'=>'required'
        ]);

        try {

            $item = Item::findOrFail($request->id);

            $item->desc = $request->desc;

            $item->amount = $request->amount;

            $item->price = $request->price;

            $item->discount = $request->discount;

            $item->save();

            return response()->json(1, 200);

        } catch (Exception $e) {

            return response()->json($e->getMessage(), 400);

        }
    }
}
