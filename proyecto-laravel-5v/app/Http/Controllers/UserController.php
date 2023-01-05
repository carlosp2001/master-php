<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function config()
    {
        return view('user.config');
    }

    public function update(Request $request)
    {
        // Conseguir usuario identificado
        $user = \Auth::user();
        $id = \Auth::user()->id;

        // Validar datos del request
        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:255|unique:users,nick,' . $id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        ]);

        // Recoger datos del formulario
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');

        // Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->nick = $nick;
        $user->surname = $surname;
        $user->email = $email;

        // Subir la imagen
        $image_path = $request->file('image_path');
        if ($image_path) {
            // Colocar un nombre unico
            $image_path_name = time() . $image_path->getClientOriginalName();

            // Guardar en la carpeta storage (storage/app/users)
            Storage::disk('users')->put($image_path_name, File::get($image_path));

            // Seteo el nombre de la imagen en el objeto
            $user->image = $image_path_name;
        }
//        var_dump($image_path);
//        die();


        // Ejecutar consulta y cambios en la base de datos
        $user->update();

        return redirect()->route('config')->with(['message' => 'Usuario actualizado correctamente']);

//        echo $id . "<br>";
//        echo $name . "<br>";
//        echo $surname . "<br>";
//        die();


    }

    public function getImage($filename)
    {
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }

    public function profile($id)
    {
        $user = User::find($id);

        return view('user.profile', [
            'user' => $user
        ]);
    }

}
