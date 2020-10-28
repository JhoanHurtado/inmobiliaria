<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

Route::get( '/login', function () {
    return view( 'auth.login' );
} );

Route::get( '/', 'ClientController@index' );
Route::get( '/portafolio', 'ClientController@portafolio' );
Route::get( '/portafolio/find', 'ClientController@find' );

Route::get( '/home', 'MasterController@index' )->name( 'home' );
Route::get( '/clientes', 'ClienteController@index' );
Route::post( '/clientes/save', 'ClienteController@store' );
Route::get( '/cliente/{id}', 'ClienteController@edit' );
Route::put( '/cliente/update/{id}', 'ClienteController@update' )->name( 'cliente.update' );

Route::get( '/inmobiliaria', 'InmobiliariaController@index' );
Route::post( '/inmobiliaria/save', 'InmobiliariaController@store' );
Route::get( '/inmobiliaria/{id}', 'InmobiliariaController@edit' );
Route::put( '/inmobiliaria/update/{id}', 'InmobiliariaController@update' )->name( 'inmobiliaria.update' );

Route::get( '/inmuebles', 'InmuebleController@index' );
Route::post( '/inmueble/save', 'InmuebleController@store' );
Route::get( '/inmueble/{id}', 'InmuebleController@edit' );
Route::put( '/inmueble/update/{id}', 'InmuebleController@update' )->name( 'inmueble.update' );



