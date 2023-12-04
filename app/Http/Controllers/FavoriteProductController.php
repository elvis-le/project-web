<?php

namespace App\Http\Controllers;

use App\Models\Favorite_product;
use Illuminate\Http\Request;

class FavoriteProductController extends Controller
{
    public function favorite_product(Request $request)
    {
        $favorite_products = Favorite_product::where('user_id', $request->user()->id)->where('status', 0)->join('products', 'products.id', '=', 'favorite_products.product_id')->get();
        return view('customer.favorite_product', ['favoriteProducts' => $favorite_products]);
    }
}
