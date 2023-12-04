<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function show():View{
        return view('login');
    }
}
