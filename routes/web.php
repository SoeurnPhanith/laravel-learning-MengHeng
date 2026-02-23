<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function(){
    $family = [
        [
            "id"=> 1, 
            "name"=> "Sem Sino", 
            "gender"=> "male"
        ], 
        [
            "id"=> 2, 
            "name"=> "Siem Sokoun", 
            "gender"=> "female"
        ], 
        [
            "id"=> 3, 
            "name"=> "Soeurn Phanith", 
            "gender"=> "male"
        ], 
        [
            "id"=> 4, 
            "name"=> "Soeurn Channen", 
            "gender"=> "male"
        ],
        [
            "id"=> 5, 
            "name"=> "Soeurn Chananna", 
            "gender"=> "female"
        ]
    ];
    //throw this data into view using compact()
    return view('index', compact('family'));
})->name('home');