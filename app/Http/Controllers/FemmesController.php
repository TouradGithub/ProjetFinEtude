<?php

namespace App\Http\Controllers;
use App\Models\Femme;
use App\Models\langFemme;
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
        // return $request;
        $famme =new Femme();
        $famme->nom=$request->nom;
        $famme->age=$request->age;
        $famme->disponible=$request->disponible;
        $famme->etat=$request->etat;
        $famme->addrsse=$request->addrsse;
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

        $lastFemme = Femme::latest()->first();
        foreach($request->lang as $item){
            $langFemme =new langFemme();
            $langFemme->id_femme=$lastFemme->id;
            $langFemme->id_lang=$item;
               $langFemme->save();
        }

        toastr()->success('donner ajouter ', 'Congrats');


     return   redirect()->route('fammes.index');
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
        $femme =Femme::find($id);
        return view('admin.femmes.edit',compact('femme'));
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
        $femme = Femme::find($id);

        if ($femme != null) {
            $femme->nom = $request->nom;
            $femme->age = $request->age;
            $femme->disponible = $request->disponible;
            $femme->etat = $request->etat;
            $femme->addrsse = $request->addrsse;
            $femme->enfant = $request->enfant;
            $femme->salaire = $request->salaire;

            if ($request->has('image')) {
                $img = $request->file("image");
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $path = public_path('fammes/' . $filename);
                $request->image->move(public_path('fammes/'), $filename);
                $femme->image = $filename;
            }

            $femme->save();
            if($request->has('lang')){
                $femme->languages()->delete();
                    foreach ($request->lang as $item) {
                        $langFemme = new langFemme();
                        $langFemme->id_femme = $femme->id;
                        $langFemme->id_lang = $item;
                        $langFemme->save();
                    }
            }
        }
        toastr()->success('donner modifier ', 'Congrats');

        return redirect()->route('fammes.index');
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
        if ($femme != null) {
            // Delete associated lang_femmes rows first
            $femme->languages()->delete();

                $femme->delete();
                if($femme->image){
                    File::delete(public_path('fammes/'.$femme->image));
                }

        }
        toastr()->error('donner suprimer ', 'Congrats');

        return redirect()->back();
    }
}
