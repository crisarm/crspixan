<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductPost;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function create()
    {
        return view('new');
    }
    public function store(StoreProductPost $request)
    {
        $product = new Product($request->all());
        $product->save();
        return redirect()->route("home");
    }

}
