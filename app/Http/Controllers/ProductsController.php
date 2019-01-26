<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function search (Request $request)
    {
        $products = Product::search($request->q)->paginate(16);

        return view('search')->with([
            'query' => $request->q,
            'products' => $products
        ]);
    }
}
