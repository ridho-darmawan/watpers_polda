<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    Artisan::call('optimize');
    return 'DsONE'; //Return anything
});

Route::get('/', function () {
   return 'v11';
});

Route::get('/optimize', function () {
    Artisan::call('optimize');
   return 'okes'; 
});

Route::get('/key', function () {
    Artisan::call('key:generate');

    return 'done';
});


