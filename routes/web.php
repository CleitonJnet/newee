<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//USER
Route::get('user/index',App\Http\Livewire\Admin\Office\User\Index::class)->middleware(['auth']);

//CHURCH
Route::get('church/index',App\Http\Livewire\Admin\Office\Church\Index::class)->middleware(['auth']);

//MINISTERY
Route::get('ministery/index',App\Http\Livewire\Admin\Office\Ministery\Index::class)->middleware(['auth']);


require __DIR__.'/auth.php';
