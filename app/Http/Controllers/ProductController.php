<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class ProductController extends Controller
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
        //$roles = Role::all();

        $acl = [
            //'edit_product' => (Gate::allows('give-permissions')) ? true : false,
        ];
        return view('products.index',compact(['acl']));
    }


}
