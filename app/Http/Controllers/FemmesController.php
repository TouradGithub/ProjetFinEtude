<?php

namespace App\Http\Controllers;
use App\Models\Femme;
use Illuminate\Http\Request;
use Image;
use File;
class FemmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fammes=Femme::all();
        return view('admin.femmes.index',compact('fammes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.femmes.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $famme =new Femme();
        $famme->nom=$request->nom;
        $famme->age=$request->age;
        $famme->disponible=$request->disponible;
        $famme->etat=$request->etat;
        $famme->addrsse=$request->addrsse;
        $famme->lang=$request->lang;
        $famme->enfant=$request->enfant;
        $famme->salaire=$request->salaire;
        if($request->has('image'))
        {
            $img = $request->file("image");
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $path = public_path('fammes/' . $filename);
            $request->image->move(public_path('fammes/' ), $filename);
            $famme->image = $filename;
        }
        $famme->save();
        redirect()->route('fammes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request ,$id)
    {
        $femme =Femme::find($id);

        if($femme != null){
            $femme->delete();
            if($femme->image){
                File::delete(public_path('fammes/'.$femme->image));
            }
        }
        return redirect()->back();
    }
}
