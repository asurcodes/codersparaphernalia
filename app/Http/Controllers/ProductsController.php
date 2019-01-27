<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show (Product $product)
    {
        return redirect($product->url);
    }

    public function search (Request $request)
    {
        $products = Product::search($request->get('query'))->paginate(16);

        return view('search')->with([
            'query' => $request->get('query'),
            'products' => $products
        ]);
    }
}
