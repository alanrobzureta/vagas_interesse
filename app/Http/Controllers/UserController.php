<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Gate;

class UserController extends Controller
{
    
    private $user;
    
    public function __construct(User $user){
        $this->user = $user;
    }
    
    private function checkPermission($permission) {
        if(Gate::denies($permission, $this->user))
            abort(403,'acesso não autorizado');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->checkPermission('listar_usuarios');
        $users = $this->user->all();
        //$this->authorize('listar_usuarios', $users);
        //auth()->user()->can('listar_usuarios', $users);
//        if(Gate::denies('listar_usuarios', $users))
//            abort(403,'acesso não autorizado');
        
//        if(Gate::denies('listar_usuarios', $users))
//            return redirect()->back();
        
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('cadastrar_usuario');
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $this->checkPermission('cadastrar_usuario');
        $user = new User();
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);        
        $user->save();
        
        return view('user.show', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->checkPermission('ver_usuario');
        $user = $this->user->find($id);
        
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->checkPermission('editar_usuario');
        $user = $this->user->find($id);
        
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $this->checkPermission('editar_usuario');   
        $user = $this->user->find($id);
        
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->email = $request->email;
        //$user->password = bcrypt($request->password);     
        
        $user->save();
        
        return view('user.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->checkPermission('remover_usuario');   

        $user = $this->user->find($id);
        $user->delete();
        
        return redirect('/users/');
    }
}
