<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GigController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\GigCommentController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\SupplierCommentController;
use App\Http\Controllers\Admin\OccupationController;
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

Route::get('/', [DashboardController::class, 'welcome']);
Route::get('/category/{category}', [DashboardController::class, 'showCategory'])->name('show.category');
Route::get('/supplier-profile/{user}', [DashboardController::class, 'showProfile'])->name('show.profile');
Route::get('/service-profile/{user}/gig/{gig}', [DashboardController::class, 'showGig'])->name('show.supplier-gig');

Route::get('/featured', function () {
    return view('/featured');
});
Route::get('/blog', function () {
    return view('/blog');
});
Route::get('/categories', function () {
    return view('/categories');
});

Route::get('/blog/create', function () {
    return view('/blog/create');
});
Route::get('/sample', function () {
    return view('/sample');
});
//For Admin User
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/show-more', [BlogController::class, 'showM'])->name('blogs.showM');
Route::get('/blog/categorized', [BlogController::class, 'categorized'])->name('blogs.categorized');


Route::middleware(['auth'])->group(function () {

    Route::resource('blogs', BlogController::class);
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
        Route::resource('categories', CategoryController::class);
    });
});

//Supplier
Route::middleware(['auth'])->group(function () {
    Route::get('/become-a-supplier', [SupplierController::class, 'becomeSupplier']);
    Route::get('/registration', [SupplierController::class, 'create']);
    Route::post('/supplier/register', [SupplierController::class, 'store']);

    Route::get('/my-profile', [SupplierController::class, 'myProfile'])->name('my-profile');
    Route::post('/my-profile/update-avatar', [SupplierController::class, 'updateAvatar']);
    Route::get('/gig/{gig}', [SupplierController::class, 'showGig'])->name('show.gig');
    Route::resource('gigs', GigController::class);

    Route::post('/gig/{gig}/comment', [GigCommentController::class, 'comment'])->name('gig.comment');
    Route::post('/supplier/{user}/comment', [SupplierCommentController::class, 'comment'])->name('supplier.comment');
});

//Laravel Socialite
Route::get('/auth/{driver}', [SocialController::class, 'socialiteRedirect']);
Route::get('/auth/{driver}/callback', [SocialController::class, 'loginWithSocialite']);

Route::get('/test', function () {
    return view('test');
});

require __DIR__ . '/auth.php';
