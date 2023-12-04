<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function homeCustomer():View{
        $myProduct = ['images/Acer Chromebook Spin 314 .jpg', 'images/Acer Chromebook 514.jpg', 'images/Acer Swift 3.jpg',
            'images/ASUS Chromebook CX1.jpg', 'images/ASUS ZenBook 14X OLED.jpg', 'images/Lenovo - 2022 - IdeaPad 3i.jpg'];
        $myProduct_b = ['images/Acer Chromebook Spin 314-b.jpg', 'images/Acer Chromebook 514-b.jpg', 'images/Acer Swift 3-b.jpg',
            'images/ASUS Chromebook CX1-b.jpg', 'images/ASUS ZenBook 14X OLED-b.jpg', 'images/Lenovo - 2022 - IdeaPad 3i-b.jpg'];
        $nameProduct = ['Acer Chromebook Spin 314', 'Acer Chromebook 514', 'Acer Swift 3',
            'ASUS Chromebook CX1', 'ASUS ZenBook 14X OLED', 'Lenovo - 2022 - IdeaPad 3i'];
        return view('customer.home') ->with('myProduct', $myProduct) ->with('myProduct_b', $myProduct_b) ->with('nameProduct', $nameProduct);
    }
}
