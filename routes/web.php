<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, "index"])->name('posts.index');
Route::get("/posts/create", [PostController::class, "create"])->name('posts.create');
Route::post("/posts", [PostController::class, "store"])->name('posts.store');
Route::get("/posts/edit/{post}", [PostController::class, "edit"])->name('posts.edit');
Route::put("/posts/update/{post}", [PostController::class, "update"])->name('posts.update');
Route::delete("/posts/{post}", [PostController::class, "destroy"])->name('posts.destroy');

Route::get('/users', [UserController::class, "index"])->name('users.index');
Route::get('/users/create', [UserController::class, "create"])->name('users.create');
Route::post('/users', [UserController::class, "store"])->name('users.store');
Route::get('/users/edit/{user}', [UserController::class, "edit"])->name('users.edit');
Route::put('/users/update/{user}', [UserController::class, "update"])->name('users.update');
Route::delete('/users/{user}', [UserController::class, "destroy"])->name('users.destroy');
