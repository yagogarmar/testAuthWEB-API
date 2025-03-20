<?php

use App\Http\Controllers\AuthWebController;
use Illuminate\Support\Facades\Route;


// VISTAS
Route::get('/', function () {
    dd('En desarrollo');
    return view('home');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');




// LOGICA
Route::post('/login', [AuthWebController::class , 'login']);