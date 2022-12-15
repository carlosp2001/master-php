<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //
    public function index($pagina = 1)
    {
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null) {
        return view('pelicula.detalle');
    }

    // Crear redireccion en el controlador
    public function redirigir() {
//        return redirect()->route('detalle.pelicula');
//        return redirect('/detalle');
        return redirect()->action([PeliculaController::class, 'detalle']);
    }

    public function formulario()
    {
        return view('pelicula.formulario');
    }

    public function recibir(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        echo "El nombre es $nombre y el email es $email";
        die();
    }
}
