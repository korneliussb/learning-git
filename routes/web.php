<?php

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

get('about', function () {
    return 'About Page';
});

get('reporting', function () {
    return 'Reporting feature';
});

Route::resource('reports', 'ReportsController');
// whatever logic to add reporting to you, and
