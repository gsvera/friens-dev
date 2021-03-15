<?php

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

Route::middleware('locale')->group(function(){
    //Local es
    Route::get('/', function () {
        return view('index');
    })->name('es_home');

    //locale en
    Route::prefix('en')->group(function(){
        Route::get('/',function(){
            return view('index');
        })->name('en_home');
    });
});


