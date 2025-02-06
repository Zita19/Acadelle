<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BejelentkezesController;
use App\Http\Controllers\RegisztracioController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/rolunk', function (){
    return view('rolunk');
});

Route::get('/bejelentkezes', function (){
    return view('bejelentkezes');
});

Route::get('/kapcsolat', function (){
    return view('kapcsolat');
});

Route::get('/oktatok', function (){
    return view('oktatok');
});

Route::get('/kurzusok', function (){
    return view('kurzusok');
});

Route::get('/regisztracio', function (){
    return view('regisztracio');
});

Route::get('/tanuloi', function (){
    return view('tanuloi');
});

Route::post('/regisztracio', [RegisztracioController::class, 'register']);

Route::get('/login', function () {
    return view('login'); 
})->name('login');

Route::post('/login', [BejelentkezesController::class, 'login'])->name('login.post');

Route::post('/logout', [BejelentkezesController::class, 'logout'])->name('logout');

Route::middleware(['auth:tanulo'])->group(function () {
    Route::get('/tanuloi.tanuloi', function () {
        return view('tanuloi.tanuloi');
    })->name('tanuloi.tanuloi');
});

Route::middleware(['auth:oktato'])->group(function () {
    Route::get('/oktatoi.oktatoi', function () {
        return view('oktatoi.oktatoi');
    })->name('oktatoi.oktatoi');
});
