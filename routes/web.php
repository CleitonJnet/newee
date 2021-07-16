<?php

use App\Http\Controllers\Office\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/users',            [UserController::class, 'index'])->middleware(['auth'])->name('user.index');
//Route::get('/users/{id}/show',  [UserController::class, 'show'])->middleware(['auth'])->name('user.show');
//Route::get('/users/create',     [UserController::class, 'create'])->middleware(['auth'])->name('user.create');
//Route::get('/users/store',     [UserController::class, 'store'])->middleware(['store'])->name('user.create');
Route::resource('user',UserController::class);

require __DIR__.'/auth.php';
