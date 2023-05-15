<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\OccupationController;
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

Route::get('/auth-complete', function () {
    return view('auth.auth-successful');
});

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
Route::get('/blog/show-more', function () {
    return view('/blog/show-more');
});
Route::get('/sample', function () {
    return view('/sample');
});
Route::get('/blog/index', function () {
    return view('/blog/index');
});


Route::get('/service-profile', function () {
    return view('/suppliers/service-profile');
});
Route::get('/supplier-profile', function () {
    return view('/suppliers/supplier-profile');
});

//For Admin User
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/get-user', [UserController::class, 'getUser']);

    Route::prefix('admin/')->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('users', UserController::class);
        Route::resource('occupations', OccupationController::class);
        Route::resource('skills', SkillController::class);
    });
});

//Supplier
Route::middleware(['auth'])->group(function () {
    Route::get('/become-a-supplier', [SupplierController::class, 'becomeSupplier']);
    Route::get('/registration', [SupplierController::class, 'create']);
    Route::post('/supplier/register', [SupplierController::class, 'store']);
});

//Laravel Socialite
Route::get('/auth/{driver}', [SocialController::class, 'socialiteRedirect']);
Route::get('/auth/{driver}/callback', [SocialController::class, 'loginWithSocialite']);

require __DIR__ . '/auth.php';
