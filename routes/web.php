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

// home ruta vraća blade view
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['first', 'second'])->group(function () {
// primjer closure funk
    Route::get('foo', function () {
        return 'Hello World';
    })->name('profoo');

// redirekcija (trenutno vraća 404 not found
    Route::redirect('/here', '/there');
});
// ruta vraća view sa parametrom
Route::view('/studispis', 'studispis', ['name' => 'Marko']);

// ruta sa adresnim get parametrom
Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});

// Prije   http://example.com/prvi.php?post=prvipost&komentar=5589
// Sada može  http://example.com/posts/prvi/comments/5589/?var1=prvipost&var2=5589
// ruta sa više adresnim get parametrom
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Ovo je neki text<br>' . $postId . '<hr>komentar:<br>' . $commentId;
});
