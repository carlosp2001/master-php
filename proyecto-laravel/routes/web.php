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
    $image = Image::all();
    foreach ($image as $image) {
        echo $image->image_path . '<br>';
        echo $image->description . '<br>';
        echo $image->user->name . ' ' . $image->user->surname . '<br>';


        if (count($image->comments) > 0) {
            echo '<strong>Comentarios</strong><br>';
            foreach ($image->comments as $comment) {
                echo $comment->user->name . ' ' .$comment->user->surname . ': ';
                echo $comment->content . '<br>';
            }
        }
        echo '<strong>LIKES: ' . count($image->likes) . '</strong>';
        echo '<hr>';
    }

    die();
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
