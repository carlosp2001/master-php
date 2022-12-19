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
        $frutas = DB::table('frutas')->get();
        return view('fruta.index', ['frutas' => $frutas]);
    }

    public function detail($id) {
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        return view('fruta.detail', [
            'fruta' => $fruta
        ]);
    }
}
