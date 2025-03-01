<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BejelentkezesController;
use App\Http\Controllers\OktatokController;
use App\Http\Controllers\Auth\KijelentkezesController;
use App\Http\Controllers\RegisztracioController;
use App\Http\Controllers\KurzusokController;
use App\Http\Controllers\TanuloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
    return view('bejelentkezes');
})->name('login');

Route::post('/login', [BejelentkezesController::class, 'login'])->name('login.post');

Route::post('/logout', [BejelentkezesController::class, 'logout'])->name('logout');

Route::middleware(['auth:tanulo'])->group(function () {
    Route::get('/tanuloi', [TanuloController::class, 'index'])->name('tanuloi.tanuloi');
});

Route::middleware(['auth:oktato'])->group(function () {
    Route::get('/oktatoi', function () {
        return view('oktatoi.oktatoi');
    })->name('oktatoi.oktatoi');
});

Route::post('/kurzus', [KurzusokController::class, 'store'])->name('kurzus.store');

Route::post('/kijelentkezes', [KijelentkezesController::class, 'kijelentkezes'])->name('kijelentkezes');

Route::post('/oktatoi.oktatoi', [KurzusokController::class, 'store'])->name('kurzus.letrehozas');

Route::get('/kurzusok', [KurzusokController::class, 'index'])->name('kurzusok.index');

Route::get('/kurzusok', [KurzusokController::class, 'kurzusoklekerdezes'])->name('kurzusok.kurzuslekerdezes');

Route::post('/jelentkezes/{kurzus}', [TanuloController::class, 'jelentkezes'])->name('kurzus.jelentkezes')->middleware('auth:tanulo');

Route::get('/oktatoi.oktatoi', [OktatokController::class, 'tanulok'])->name('oktatok.tanulok');

Route::get('/oktatoi.oktatoi', [OktatokController::class, 'kurzusok'])->name('oktatok.kurzusok');