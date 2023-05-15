<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;

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
Route::get('/categories', function () {
    return view('/categories');
});
Route::get('/sample', function () {
    return view('/sample');
});

Route::get('suppliers/service/create', function () {
    return view('suppliers/service/create');
});


Route::get('/blog/create', function () {
    return view('/blog/create');
});
Route::get('/registration', function () {
    return view('/suppliers/registration');
})->middleware('auth');

Route::get('/become-a-supplier', function () {
    return view('/become-a-supplier');
});


Route::get('/service-profile', function () {
    return view('/suppliers/service-profile');
});
Route::get('/supplier-profile', function () {
    return view('/suppliers/supplier-profile');
});

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/show-more', [BlogController::class, 'showM'])->name('blogs.showM');
Route::resource('blogs', BlogController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin/')->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('users', UserController::class);
    });
});

Route::get('/auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('/auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

require __DIR__ . '/auth.php';
