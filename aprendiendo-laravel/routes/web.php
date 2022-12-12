<?php

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

Route::get('/', function () {
//    return view('welcome');
    echo "Hola mundo";
});


/*
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

Route::get('/mostrar-fecha', function () {
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array('titulo' => $titulo));
});

// Si queremos enviar parametros obligatorios debemos colocar {parametro} pero si queremos que el parametro sea
// opcional colocamos {parametro?}

//Route::get('/pelicula/{titulo?}', function ($titulo = "No hay pelicula seleccionada") {
//    return view('pelicula', array('titulo'=>$titulo));
//});

Route::get('/pelicula/{titulo}/{year?}', function ($titulo = "No hay pelicula seleccionada", $year=2019) {
    return view('pelicula', array(
        'titulo'=>$titulo,
        'year'=>$year));
})->where(array(
    // Expresion regular para saber que caracteres pueden ser ingresados en el parametro de la url
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));


