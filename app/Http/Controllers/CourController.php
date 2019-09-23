<?php

namespace App\Http\Controllers;

use App\Cour;
use App\Matiere;

use Illuminate\Http\Request;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cour::all();
        return view('cours.index', ['cours'=>$cours]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function create(Matiere $matiere)
    {
        $cour = Cour::fake($matiere->id);
        return view('cours.create', ['cour'=>$cour]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'titre'=>'required',
            'sousTitre'=>'required',
            'contenu'=>'required',
        ]);
        $cour = new Cour();
        $donnees = $request->all();
        $cour->fill($donnees);
        $cour->save();
        return redirect()->action("CourController@show", $cour->matiere_id);
    }
   
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function show(Cour $cour)
    {
        return view('cours.show', ['cour'=>$cour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit(Cour $cour)
    {
        return view('cours.edit', ['cour'=>$cour]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cour $cour)
    {
        $cour->fill($request->all());
        $cour->save();
        return redirect()->action('CourController@show', $cour);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cour $cour)
    {
        $cour->delete();
        return redirect()->back();
    }
}
