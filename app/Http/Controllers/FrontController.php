<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use App\Models\Demand;
use App\Models\Femme;
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
        $femmes=Femme::all();
        return view("front.index",compact('femmes'));
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

        return redirect()->route('front.getlogin');
    }

    public function register(Request $request){

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required',
            'nni' => 'required',
        ]);
        $user=new User();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->nni=$request->nni;
        $user->password= Hash::make($request->password);
        $user->save();
        $credentials = $request->only('email', 'password');

        return redirect()->route('front.index');

    }

    public function demand($id){

        $demand=new Demand();
        $demand->id_femme=$id;
        $demand->id_user=auth()->user()->id;
        $demand->save();
        return redirect()->route('front.index');

    }


    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('front.getlogin');
    }
    public function filter(Request $request){

        $query = Femme::query();

            if ($request->has('enfant')) {
                $enfant = $request->enfant;
                $query->where('enfant',$enfant);
            }
            if ($request->has('disponible')) {
                $disponible = $request->disponible;
                $query->where('disponible',$disponible);
            }
            // if ($request->has('lang')) {
            //     $lang = $request->lang;
            //     $query->where('lang',$lang);
            // }
            if ($request->has('etat')) {
                $etat = $request->etat;
                $query->where('etat',$etat);
            }
        $femmes= $query->get();
        return view('layouts1.app_front',compact('femmes'));
    }


}
