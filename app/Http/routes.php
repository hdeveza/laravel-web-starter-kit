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


Route::get('/', 'PagesController@index');

Route::get('sobre-nos/', 'PagesController@about');


/*
|--------------------------------------------------------------------------
|22/04/2015
|--------------------------------------------------------------------------
|
| Configuração route página de serviços
| 
| 
|
*/

Route::get('servicos', 'PagesController@services');



Route::get('servicos/reformas', function(){

   return view('pages/services/page_reformas');

});

// Página de contato
Route::get('contato', function(){

   return view('pages/contact');

});

// Enviar usando method post
Route::post('send', 'PagesController@sendContact');




/*
|--------------------------------------------------------------------------
| 20/04/2015
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/

