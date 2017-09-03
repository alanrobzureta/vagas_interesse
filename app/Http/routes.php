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
Route::group(['middleware' => 'web'], function(){
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Route::group(['middleware'=>['auth']],function() {
        /*
         * Rotas para Users
         */
        Route::group(['prefix' => 'users'], function () {
            Route::get('/','UserController@index');
            Route::get('/create','UserController@create');
            Route::post('/store','UserController@store');
            Route::get('/{id}','UserController@show');
        });
        
        /*
         * Rotas para Perfis
         */
        Route::group(['prefix' => 'perfis'], function () {
            Route::get('/','PerfilController@index');
            Route::get('/create','PerfilController@create');
        });
        
        /*
         * Rotas para Perfis
         */
        Route::group(['prefix' => 'permissoes'], function () {
            Route::get('/','PermissaoController@index');
        });
        
        /*
         * Rotas para Empresas
         */
        Route::group(['prefix' => 'planos'], function () {
            Route::get('/','PlanoController@index');
        });
        
        /*
         * Rotas para Empresas
         */
        Route::group(['prefix' => 'empresas'], function () {
            Route::get('/','EmpresaController@index');
        });
        
    });
});