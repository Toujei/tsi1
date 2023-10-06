<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\DietasController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/dietas',[DietasController::class,'index'])->name('dieta.index');
Route::resource('/cuentas',CuentasController::class)->parameters('cuentas','cuenta');
Route::post('/cuentas/login',[CuentasController::class,'acceso'])->name('cuentas.acceso');


// Route::get('/cuenta/create',[CuentasController::class,'create'])->name('cuentas.create');




