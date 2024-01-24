<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
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

Route::get('/page-one', [PagesController::class, 'viewPageOne'])->name('page1');
Route::get('/page-two',[PagesController::class, 'viewPageTwo'])->name('page2');

Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form', [FormController::class, 'submitForm'])->name('submitForm');