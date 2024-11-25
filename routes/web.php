<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\joelcontroller;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio',[joelcontroller::class,'inicio'])->name('inicio');
Route::get('exa1joel',[joelcontroller::class,'exa1joel'])->name('exa1joel');
Route::post('guardaprod',[joelcontroller::class,'guardaprod'])->name('guardaprod');
Route::get('reporte',[joelcontroller::class,'reporte'])->name('reporte');