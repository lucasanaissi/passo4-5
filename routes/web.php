<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');


// RETORNA TELA DE CRIAÇÃO DE USUÁRIO
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// RETORNA TELA DE EDIÇÃO DO USUÁRIO
Route::get('/user/{userId}/edit', [UserController::class, 'edit'])->name('user.edit');

// RETORNA A TELA DE LISTAGEM DE USUÁRIOS
Route::get('/user/index', [UserController::class, 'index'])->name('user.index');

// ACESSA O MÉTODO STORE DO USERCONTROLLER
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');


