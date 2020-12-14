<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\TransactionController;
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
})->name('home');

Route::post('/application/validate', [TransactionController::class,'validator'])->name('application.validate');
Route::get('/application/validate', [ApplicationController::class,'appvalidate'])->name('validate');
Route::get('invoice/{application}', [ApplicationController::class,'show'])->name('invoice');
Route::resource('/application', ApplicationController::class);

