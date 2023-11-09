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
    // 13. Change the route in inertia('App') to get App.vue
    return inertia('Home');
});


Route::get('/donation', function () {
    
    return inertia('Donation');
});


Route::get('/account', function () {
    
    return inertia('Account');
});


Route::get('/shared', function () {
    
    return inertia('Public');
});