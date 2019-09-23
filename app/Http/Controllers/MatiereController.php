<?php

namespace App\Http\Controllers;

use App\Matiere;
use App\User;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$matieres = Matiere::all();
		return view('matieres.index', ['matieres'=>$matieres]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $matiere = Matiere::fake($user->id);
        return view('matieres.create', ['matiere'=>$matiere]);
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
            'icone'=>'required',
            'contenu'=>'required',
        ]);
        $matiere = new Matiere();
		$donnees = $request->all();
		$matiere->fill($donnees);
		$matiere->save();
		return redirect()->action("MatiereController@show", $matiere);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
		return view('matieres.show', ['matiere'=>$matiere]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        return view('matieres.edit', ['matiere'=>$matiere]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        $matiere->fill($request->all());
        $matiere->save();
        return redirect()->action('MatiereController@index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->action('MatiereController@index');    }
}
