<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TabungController;

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
    return view('welcome');
});

Route::resource('/supplier', SupplierController::class);
Route::controller(TabungController::class)->group(function () {
    Route::get('/tabung', 'form')->name('tabung.form');
    Route::post('/tabung', 'process')->name('tabung.process');
});
