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
    return view('welcome');
});
Route::get('/featured', function () {
    return view('/featured');
});
Route::get('/blog', function () {
    return view('/blog');
});
Route::get('/sample', function () {
    return view('/sample');
});
Route::get('/blog/index', function () {
    return view('/blog/index');
});
Route::get('/registration', function () {
    return view('/suppliers/registration');
});
Route::get('/become-a-supplier', function () {
    return view('/become-a-supplier');
});


Route::get('/service-profile', function () {
    return view('/suppliers/service-profile');
});
Route::get('/supplier-profile', function () {
    return view('/suppliers/supplier-profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
