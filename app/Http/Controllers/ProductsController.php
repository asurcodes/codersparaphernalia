<?php

namespace App\Http\Controllers;

use Cache;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($product)
    {
        $product = Cache::remember("product-$product", 720, function () use ($product) {
            return Product::where('slug', $product)->first();
        });
        if (!$product) {
            abort(404);
        }

        return redirect($product->url);
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $page = $request->get('page') ?: 1;

        $products = Cache::remember("search-$query-$page", 720, function () use ($query) {
            return Product::search($query)->paginate(16);
        });

        return view('search')->with([
            'query' => $query,
            'products' => $products
        ]);
    }
}
