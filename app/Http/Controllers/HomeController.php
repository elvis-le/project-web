<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function home()
    {
        $product = Product::where('isDelete', '0')->get();
            return view('home', ['product' => $product]);
    }

    public function customerHome()
    {
        $product = Product::where('isDelete', '0')->get();
        $chat = Chat::get();
        return view('customer.home', ['chat' => $chat], ['product' => $product]);
    }
}
