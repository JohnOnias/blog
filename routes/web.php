<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('/', PostController::class)->names([
'index' => 'posts.index',
'create' => 'posts.create',
'store' => 'posts.store',
'show' => 'posts.show',

]);

Route::get('/sobre', function () {
    return view('/posts/sobre');
})->name('posts.sobre');



Route::get('/editar', function($id){
    return view('/posts/editar', ['id' => $id]);
})->name('posts.editar');

