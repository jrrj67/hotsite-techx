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
    return view('index');
})->name('home');

Route::get('/email', function () {
    return view('sections.email');
})->name('email_config');

Route::get('/install', function () {
    return view('sections.install');
})->name('install_config');

Route::get('/manual', function () {
    return view('sections.manual');
})->name('manual_config');

Route::get('/shortcut', function () {
    return view('gifo.manual');
})->name('shortcut_config');

Route::post('/search', 'SearchController@search')->name('search');
