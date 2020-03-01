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
        return Product::latest()->paginate(10);
    }

    public function search(Request $request)
    {
        $products = Product::where('title', 'LIKE', '%' . $request->keywords . '%')
            ->paginate(10);

        return $products;
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
            return response()->json(1, 200);
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
            return response()->json(1, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function destroy($id)
    {

        $product = Product::find($id);
        $product->delete();
        return response()->json(1, 200);
    }

    public function get_all_product_for_order()
    {
        return Product::all();
    }
}
