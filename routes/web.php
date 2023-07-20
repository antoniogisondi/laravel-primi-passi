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

Route::get('/', function () {
    $title = 'Hello World';
    $text = 'Benvenuto Laravel';
    $text2 = 'Sono contento di conoscere questo nuovo strumento di derivazione PHP';
    return view('home', compact( 'title', 'text', 'text2'));
});

Route::get('/about-us', function () {
    return view('about_us');
});


Route::get('/contacts', function () {
    return view('contacts');
});