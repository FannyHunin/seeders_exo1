<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/personnes/{id}/show', [IndexController::class, 'show'])->name('show');
Route::delete('/personnes/{id}/delete', [IndexController::class, 'destroy'])->name('delete');
Route::get('/personnes/{id}/edit', [IndexController::class, 'edit'])->name('edit');
Route::put('/personnes/{id}/update', [IndexController::class, 'update'])->name('update');
Route::delete('/personnes/deleteAll', [IndexController::class, 'destroyAll'])->name('deleteAll');