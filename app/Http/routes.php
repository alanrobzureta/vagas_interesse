<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::group(['middleware'=>['auth']],function() {
    Route::resource('users','UserController');
    Route::resource('perfis','PerfilController');
    Route::resource('permissoes','PermissaoController');
    Route::resource('planos','PlanoController');
    Route::resource('empresas','EmpresaController');
});

Route::get('debug',function(){
    $user = auth()->user();
        $debug = "<h1>".$user->name."</h1>";
        foreach ($user->perfil as $perfil) {
            $debug .= "<h2>".$perfil->nome."</h2>";
            foreach ($perfil->permissao as $permissao) {
                $debug .= $permissao->nome."<hr>";                
            }
        }
    return $debug;    
});