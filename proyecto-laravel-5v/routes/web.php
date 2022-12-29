<?php

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

use App\Image;

Route::get('/home', function () {
//    $image = Image::all();
//    foreach ($image as $image) {
//        echo $image->image_path . '<br>';
//        echo $image->description . '<br>';
//        echo $image->user->name . ' ' . $image->user->surname . '<br>';
//
//
//        if (count($image->comments) > 0) {
//            echo '<strong>Comentarios</strong><br>';
//            foreach ($image->comments as $comment) {
//                echo $comment->user->name . ' ' .$comment->user->surname . ': ';
//                echo $comment->content . '<br>';
//            }
//        }
//        echo '<strong>LIKES: ' . count($image->likes) . '</strong>';
//        echo '<hr>';
//    }
//
//    die();
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/configuracion', 'UserController@config')->name('config');

Route::post('/user/update', 'UserController@update')->name('user.update');

Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
