<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BagController extends Controller
{
    public function bag(Request $request): View
    {
        $bags = Bag::where('user_id', $request->user()->id)->get();
        $products = [];
        foreach ($bags as $bag){
            $products = Product::where('id', $bag->product_id)->get();
        }
        return view('customer.bag',[
            'user' => $request->user(),
            'products' => $products,
        ]);
    }
}
