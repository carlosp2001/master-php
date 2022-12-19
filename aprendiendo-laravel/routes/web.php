<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrutaController;

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

Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index']);
// Colocar nombre a ruta
//Route::get('/detalle/{id?}', [PeliculaController::class, 'detalle'])->name('detalle.pelicula');


// Middleware TestYear.php
// Hay que dar de alta el middleware en kernel
Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])->name('detalle.pelicula')->middleware('testyear');


Route::resource('usuario', UsuarioController::class);

//Crear ruta de redireccion
Route::get('/redirigir', [PeliculaController::class, 'redirigir']);

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

Route::get('/pelicula/{titulo}/{year?}', function ($titulo = "No hay pelicula seleccionada", $year = 2019) {
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year));
})->where(array(
    // Expresion regular para saber que caracteres pueden ser ingresados en el parametro de la url
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

// Consola de laravel
// php artisan make:controller <nombre controlador>
// php artisan route:list   Muestra la lista de todas las rutas existentes con sus parametros

Route::get('/listado-peliculas', function () {
    $titulo = "Listado de películas";

//    return view('peliculas.listado', array(
//        'titulo' => $titulo
//    ));

    // Enviar parámetros con metodo with
    $listado = ['Batman', 'Spiderman', 'Gran Torino'];
    return view('peliculas.listado')
        ->with('titulo', $titulo)
        ->with('listado', $listado);
});


Route::get('/pagina-generica', function () {
    return view('pagina');
});

Route::get('/formulario', [PeliculaController::class, 'formulario']);
Route::post('/recibir', [PeliculaController::class, 'recibir']);

//Rutas de frutas
Route::group(['prefix'=>'frutas'], function (){
    Route::get('index', [FrutaController::class, 'index']);
    Route::get('detail/{id}', [FrutaController::class, 'detail']);
    Route::get('crear', [FrutaController::class, 'create']);
    Route::post('save', [FrutaController::class, 'save']);
});


