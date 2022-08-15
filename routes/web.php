<?php

use App\Http\Controllers\EscapeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentExitsController;
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

// index Pages
Route::resource('/', StudentController::class);
Route::post('/destroy', [StudentController::class, 'destroy']);
Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/update', [StudentController::class, 'update'])->name('update');
Route::get('/list', [StudentController::class, 'list'])->name('list');
Route::get('/destory', [StudentController::class, 'destroy'])->name('destory');
Route::post('/Search', [StudentController::class, 'Search'])->name('Search');

// index escape Pages
Route::resource('index-escape', EscapeController::class);
Route::get('index-escape/show/{id}', [EscapeController::class, 'show'])->name('index-escape.show');
Route::get('index-escape/edit/{id}', [EscapeController::class, 'edit'])->name('index-escape.edit');
Route::post('index-escape/destroy', [EscapeController::class, 'destroy'])->name('index-escape.destroy');
Route::post('index-escape/update', [EscapeController::class, 'update'])->name('index-escape.update');
Route::post('index-escape/Search', [EscapeController::class, 'Search'])->name('index-escape.Search');

// index exits Pages
Route::get('/index-exit/create', [StudentExitsController::class,'create'])->name('index-exit.create');
Route::post('/index-exit/store', [StudentExitsController::class,'store'])->name('index-exit.store');
Route::get('/index-exit/index', [StudentExitsController::class,'index'])->name('index-exit.index');
Route::get('/index-exit/show/{id}', [StudentExitsController::class,'show'])->name('index-exit.show');
Route::post('/index-exit/destory', [StudentExitsController::class,'destory'])->name('index-exit.destory');
Route::post('index-exit/Search', [StudentExitsController::class, 'Search'])->name('index-exit.Search');

