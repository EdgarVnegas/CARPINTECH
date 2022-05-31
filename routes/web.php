<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TransporteController;
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

Route::resource('producto', ProductoController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('bodega', BodegaController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('cita', CitaController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('herramienta', HerramientaController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('material', MaterialController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('proveedor', ProveedorController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('transporte', TransporteController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);

Route::resource('venta', VentaController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=> false]);



/**
 * Route::resource('venta', VentaController::class); Esto es como estaban todos antes
 */

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
