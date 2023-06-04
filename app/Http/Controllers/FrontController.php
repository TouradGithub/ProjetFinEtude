<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Hash;
class FrontController extends Controller
{


    public function getlogin()
    {
        return view("front.login");
    }
    public function getRegister()
    {
        return view("front.register");
    }


    public function index()
    {
        return view("front.index");
    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('front.index');
        }

        return redirect("front.getlogin")->withSuccess('Login details are not valid');
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);
        $user=new User();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->password= Hash::make($request->password);
        $user->save();
        $credentials = $request->only('email', 'password');
            return redirect()->route('front.index');

    }


    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('front.getlogin');
    }


}
