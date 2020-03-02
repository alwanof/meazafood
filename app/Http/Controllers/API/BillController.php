<?php

namespace App\Http\Controllers\API;

use App\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function index()
    {
        if (auth()->user()->can('isAdmin')){
            return Bill::with(['order','user'])->latest()->paginate(10);
        }
        return Bill::where('user_id',auth()->user()->id)->with(['order','user'])->latest()->paginate(10);
    }

    public function search(Request $request)
    {

        $bills = Bill::with(['order','user'])
            ->where('title', 'LIKE', '%' . $request->keywords . '%')
            ->latest()->paginate(10);
        return $bills;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'order_id' => 'required|numeric',
            'user_id'=>'required|numeric'
        ]);
        try {
            Bill::create([
                'title' => $request->title,
                'amount' => -1*$request->amount,
                'order_id' => $request->order_id,
                'user_id' => $request->user_id,
            ]);
            return response()->json(1, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'order_id' => 'required|numeric',
            'user_id'=>'required|numeric'
        ]);
        try {
            $product = Bill::findOrFail($id);
            $product->title = $request->title;
            $product->amount = $request->amount;
            $product->order_id = $request->order_id;
            $product->user_id = $request->user_id;
            $product->save();
            return response()->json(1, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }


    public function destroy($id)
    {

        $product = Bill::find($id);
        $product->delete();
        return response()->json(1, 200);
    }
}
