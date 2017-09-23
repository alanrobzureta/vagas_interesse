<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfis = Perfil::all();
        
        return view('perfis.index', compact('perfis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new Perfil();
        $perfil->nome = $request->name;
              
        $perfil->save();
        
        return view('perfis.show', compact('perfil'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = Perfil::find($id);
        
        return view('perfis.show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil = Perfil::find($id);
        
        return view('perfis.edit', compact('perfil'));
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
        $perfil = Perfil::find($id);
        
        $perfil->nome = $request->nome;
        $user->save();
        
        return view('perfis.show', compact('perfil'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();
        
        return redirect('/perfis/');
    }
}
