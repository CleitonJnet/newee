<?php

use App\Http\Controllers\Office\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('user',UserController::class);
Route::delete('/user/destroy_show/{id}',     [UserController::class, 'destroy_show'])->middleware(['auth'])->name('user.destroy_show');

require __DIR__.'/auth.php';
