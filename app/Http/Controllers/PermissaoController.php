<?php

namespace App\Http\Controllers;

use App\Permissao;
use Illuminate\Http\Request;

class PermissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissoes = Permissao::all();
        
        return view('permissoes.index', compact('permissoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissao = new Permissao();
        $permissao->nome = $request->nome;
              
        $permissao->save();
        
        return view('permissoes.show', compact('permissao'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permissao = Permissao::find($id);
        
        return view('permissoes.show', compact('permissao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissao = Permissao::find($id);
        
        return view('permissoes.edit', compact('permissao'));
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
        $permissao = Permissao::find($id);
        
        $permissao->nome = $request->nome;
        $permissao->save();
        
        return view('permissoes.show', compact('permissao'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permissao = Permissao::find($id);
        $permissao->delete();
        
        return redirect('/permissoes/');
    }
}
