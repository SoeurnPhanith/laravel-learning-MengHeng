<?php

use App\Http\Controllers\PhoneController;
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

Route::controller()->name('phone.')->group(function(){
    Route::get('/add-phone', [PhoneController::class, 'add'])->name('add');
    Route::post('/insert-phone', [PhoneController::class, 'insert'])->name('insert');
    Route::get('/index', [PhoneController::class, 'index'])->name('index'); 
});
