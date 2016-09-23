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

Route::get('/', function () {
    $mensaje= "Bienvenido";
    return view('welcome',compact('mensaje'));
});

Route::get('prueba', function () {
    $var= "hola";
    $var2= "soy el if";
    dd($var);
    return view('prueba',compact('var','var2'));
});


Route::get('opciones_no/{id}', function ($id) {
   $catalogo = \App\cat_cat::find($id);
    return view ('pruebas.catalogo',compact('catalogo'));

});

Route::get('opciones/{id}','cat_controller@show' );
Route::resource('producto','productoController@index' );

Route::resource('store','productoController@store' );

Route::resource('catalogo','cat_controller@show');

route::resource ('editor','PruebasController');


Route::resource('jugadores','JugadoresController');


Route::resource('categorias','CategoriasController');

Route::resource('grupo','GrupoController');

Route::resource('arbitro','ArbitroController');

Route::resource('cancha','CanchaController');


Route::resource('cliente','ClienteController');



Route::resource('forma_pago','FormaPagoController');

Route::resource('jornada','JornadaController');
