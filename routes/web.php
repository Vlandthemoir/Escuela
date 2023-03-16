<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*rutas de prueba*/
Route::get('/layout', function () {
    return view('Layouts.Layout');
});

/*rutas para el login*/
Route::get('/',[LoginController::class,'create'])
->name('login.create');
Route::post('/',[LoginController::class,'store'])
->name('login.store');
Route::get('/logout',[LoginController::class,'destroy'])
->name('login.destroy');
/*ruta de home*/
Route::get('/home', function () {
    return view('Site.Home');
});