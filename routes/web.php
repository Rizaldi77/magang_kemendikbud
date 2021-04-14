<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
Route::get('/form', [App\Http\Controllers\FormController::class, 'create'])->name('form');
Route::post('/proses', [App\Http\Controllers\FormController::class, 'proses']);




Route::get('/user', [UserController::class, 'index']);

Route::get('/feedback', [App\Http\Controllers\FeedbackController::class, 'create']);
Route::post('/feedbackproses', [App\Http\Controllers\FeedbackController::class, 'proses']);