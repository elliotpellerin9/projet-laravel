<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $users = User::all();
		return view("users.index", ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::fake();
		return view('users.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'username'=>'alpha_num',
            'email'=>'required|email',
            'statut'=>'required',
            'codepostal'=>'regex:#[A-Za-z][0-9][A-Za-z][ \-]?[0-9][A-Za-z][0-9]#',
        ]);
        $user = new User();
		$donnees = $request->all();
		$user->fill($donnees);
		$user->save();
		return redirect()->action("UserController@show", $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
                return view('users.show', ['user'=>$user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
                return view('users.edit', ['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //pas utile vu que ya pas de login mais quand meme important
        $donnees = $request->except(['password']);
		if ($request->get('password')) {
			$user->password = $request->get('password');
		}
		$user->fill($donnees);
		$user->save();
		return redirect()->action("UserController@show", $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
		return redirect()->action("UserController@index");
    }
}
