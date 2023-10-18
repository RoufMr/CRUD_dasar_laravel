<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[BarangController::class, 'index'])->name('barang.index');
route::get('/create',[BarangController::class, 'create'])->name('barang.create');
route::post('/create',[BarangController::class, 'store'])->name('barang.store');
route::get('{id}/edit',[BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');



