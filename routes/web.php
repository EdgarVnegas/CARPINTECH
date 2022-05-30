<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*

Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create', [EmpleadoController::class, 'create']);

*/

Route::resource('empleado', EmpleadoController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=> false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});


Route::resource('cliente', ClienteController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);
Route::get('/home', [ClienteController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [ClienteController::class, 'index'])->name('home');
});




Route::resource('producto', ProductoController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);
Route::get('/home', [ProductoController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [ProductoController::class, 'index'])->name('home');
});

Route::resource('cita', CitaController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);
Route::get('/home', [CitaController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [CitaController::class, 'index'])->name('home');
});

Route::resource('venta', VentaController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);
Route::get('/home', [VentaController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [VentaController::class, 'index'])->name('home');
});



/**  TODO ESTO ES PARA MOSTRAR LAS DEMAS COSAS
 
* Mostrar cliente 

* Route::resource('cliente', ClienteController::class)->middleware('auth');
* Auth::routes(['register'=>false, 'reset'=> false]);

* Route::get('/home', [ClienteController::class, 'index'])->name('home');

* Route::group(['middleware' => 'auth'], function () {

*   Route::get('/', [ClienteController::class, 'index'])->name('home');
* });

* Mostrar cita 
* Route::resource('cita', CitaController::class)->middleware('auth');
* Auth::routes(['register'=>false, 'reset'=> false]);

* Route::get('/home', [CitaController::class, 'index'])->name('home');

* Route::group(['middleware' => 'auth'], function () {

  *   Route::get('/', [CitaController::class, 'index'])->name('home');
* });

* Mostrar producto
* Route::resource('producto', ProductoController::class)->middleware('auth');
* Auth::routes(['register'=>false, 'reset'=> false]);

* Route::get('/home', [ProductoController::class, 'index'])->name('home');

* Route::group(['middleware' => 'auth'], function () {

  *   Route::get('/', [productoController::class, 'index'])->name('home');
* });

*/

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
