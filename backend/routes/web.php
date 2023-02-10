<?php

use Illuminate\Support\Facades\Log;
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

Route::get('/', function () {
    return view('message', ['message' => 'Welcome to the backend']);
});

Route::get('/log-message', function () {
    Log::info('Hello Shipmate!');
    return view('message', ['message' => 'Message logged']);
});
