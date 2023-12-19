<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('update');

Route::get('/transaction', [HomeController::class, 'today'])->name('transaction');
Route::get('/transaction', [HomeController::class, 'yesterday'])->name('transaction');
Route::get('/transaction', [HomeController::class, 'this_month'])->name('transaction');
Route::get('/transaction', [HomeController::class, 'last_month'])->name('transaction');


