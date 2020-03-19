<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Product;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return Product::latest()->paginate(10);

        }catch (Exception $e){
            response()->json($e->getMessage(), 400);
        }

    }

    public function search(Request $request)
    {
        try {
            $products = Product::where('title', 'LIKE', '%' . $request->keywords . '%')
                ->paginate(10);

            return $products;
        }catch (Exception $e){
            response()->json($e->getMessage(), $e->getCode());
        }

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'desc' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ]);
        try {
            Product::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'unit' => $request->unit,
                'price' => $request->price,
            ]);
            return response()->json('inserted', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required|string',
            'desc' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ]);
        try {
            $product = Product::findOrFail($id);
            $product->title = $request->title;
            $product->desc = $request->desc;
            $product->unit = $request->unit;
            $product->price = $request->price;
            $product->save();
            return response()->json('updated', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            $product->delete();
            return response()->json('removed', 200);
        }catch (Exception $e){
            return response()->json($e->getMessage(), 400);
        }


    }

    public function get_all_product_for_order()
    {
        return Product::all();
    }
}
