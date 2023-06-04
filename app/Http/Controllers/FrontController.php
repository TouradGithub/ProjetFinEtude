<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function register()
    {
        return view("front.register");
    }

    public function login()
    {
        return view("front.login");
    }
}
