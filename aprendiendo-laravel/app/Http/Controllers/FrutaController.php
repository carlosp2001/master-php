<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    //
    public function index()
    {
        // Obtener un listado de frutas
        $frutas = DB::table('frutas')->orderBy('id', 'desc')->get();
        return view('fruta.index', ['frutas' => $frutas]);
    }

    public function detail($id) {
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        return view('fruta.detail', [
            'fruta' => $fruta
        ]);
    }

    public function create()
    {
        return view('fruta.create');
    }

    public function save(Request $request)
    {
        // guardar el registro
        $fruta = DB::table('frutas')->insert([
            'nombre'=> $request->input('nombre'),
            'descripcion'=> $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
            ]);

        return redirect()->action([FrutaController::class, 'index']);
    }
}
