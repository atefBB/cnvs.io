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

Route::get('docs', function () {
    return view('docs.index');
})->name('docs');

Route::get('blog', function () {
    return view('blog.index');
})->name('blog');

Route::get('sponsors', function () {
    return view('sponsors.index');
})->name('sponsors');
