<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/greet', [GreetController::class, 'greet'])->name('greet');

Route::get('/page-one', [HomeController::class, 'pageOne'])->name('page1');
Route::get('/page-two',[HomeController::class, 'pageTwo'])->name('page2');

Route::get('/form', [HomeController::class, 'formPage'])->name('form');