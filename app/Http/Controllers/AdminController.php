<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class AdminController extends Controller
{

    public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('fammes.index');
        }

        return redirect()->back()->withSuccess('Login details are not valid');
    }
    public function getLogin(){
        return view("admin.login");
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
        return redirect()->route('getLogin');
    }
 
}
