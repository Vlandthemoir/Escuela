<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\CicloEscolarController;
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
/*rutas para los ciclos escolares*/
Route::get('/ciclo', [CicloEscolarController::class, 'index'])
->middleware('auth')
->name('ciclo.index');
Route::get('/ciclo-create', [CicloEscolarController::class, 'create'])
->middleware('auth')
->name('ciclo.create');
Route::post('/ciclo-store', [CicloEscolarController::class, 'store'])
->middleware('auth')
->name('ciclo.store');
Route::get('/ciclo-edit/{id}', [CicloEscolarController::class, 'edit'])
->middleware('auth')
->name('ciclo.edit');
Route::put('/ciclo-update/{id}', [CicloEscolarController::class, 'update'])
->middleware('auth')
->name('ciclo.update');
Route::delete('/ciclo-delete/{id}',[CicloEscolarController::class,'destroy'])
->middleware('auth')
->name('ciclo.delete');
/*rutas para los grupos*/
Route::get('/grupos', [GruposController::class, 'index'])
->middleware('auth')
->name('grupos.index');
Route::get('/grupos-create', [GruposController::class, 'create'])
->middleware('auth')
->name('grupos.create');
Route::post('/grupos-store', [GruposController::class, 'store'])
->middleware('auth')
->name('grupos.store');
Route::get('/grupos-edit/{id}', [GruposController::class, 'edit'])
->middleware('auth')
->name('grupos.edit');
Route::put('/grupos-update/{id}', [GruposController::class, 'update'])
->middleware('auth')
->name('grupos.update');
Route::delete('/grupos-delete/{id}',[GruposController::class,'destroy'])
->middleware('auth')
->name('grupos.delete');
