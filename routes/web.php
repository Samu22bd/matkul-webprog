<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

Route::get('/set-locale/{locale}', function($locale){
    if(in_array($locale, ['en', 'id'])){
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('set-locale');


Route::middleware(['auth', 'CheckRole'])->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class)->middleware('auth');
    Route::get('/', function () {
        return view('layouts.master');
    });
});


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
