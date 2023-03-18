<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;

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
    return view('System.Home');
});

/*enlace simbolico para acceder al storate*/
Route::get('/Fotos/Personal/{foto}', function ($foto) {
    return asset('/storage/Fotos/Personal/' . $foto);
});
/*rutas para el personal*/
Route::get('/usuarios', [UsuariosController::class, 'index'])
->middleware('auth')
->name('usuarios.index');
Route::get('/usuarios-create', [UsuariosController::class, 'create'])
->middleware('auth')
->name('usuarios.create');
Route::post('/usuarios-store', [UsuariosController::class, 'store'])
->middleware('auth')
->name('usuarios.store');
Route::get('/usuarios-edit/{id}', [UsuariosController::class, 'edit'])
->middleware('auth')
->name('usuarios.edit');
Route::put('/usuarios-update/{id}', [UsuariosController::class, 'update'])
->middleware('auth')
->name('usuarios.update');
Route::delete('/usuarios-delete/{id}',[UsuariosController::class,'destroy'])
->middleware('auth')
->name('usuarios.delete');