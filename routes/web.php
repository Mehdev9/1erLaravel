<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[App\Http\Controllers\PostController::class, 'index']);
Route::get('create',[App\Http\Controllers\PostController::class, 'create']);
Route::get('sign-up',[App\Http\Controllers\Etudiants::class, 'etudiants']);
Route::post('sign-up/save', function(){
    $user = new User();
    $user->name = request('name');
    $user->email = request('mail');
    $user->password = bcrypt(request('mdp'));
    $user->save();
    return redirect('/');
    
})-> name('saveUser');
Route::get('liste',[App\Http\Controllers\Etudiants::class, 'add']);
Route::get('posts',[App\Http\Controllers\PostController::class, 'index']);
Route::get('{id}',[App\Http\Controllers\PostController::class, 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
