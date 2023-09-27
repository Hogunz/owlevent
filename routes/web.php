<?php

use App\Models\Gig;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GigController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FinderController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\GigCommentController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ApprovalController;
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
//Search and Filter
Route::get('/filtered', [FinderController::class, 'search'])->name('show.filtered');
Route::get('/category/{category}', [DashboardController::class, 'showCategory'])->name('show.category');
Route::get('/supplier-profile/{user}', [DashboardController::class, 'showProfile'])->name('show.profile');
Route::get('/service-profile/{user}/gig/{gig}', [DashboardController::class, 'showGig'])->name('show.supplier-gig');

Route::get('/featured', function () {
    $gigs = Gig::where('status', 'approved')->get();

    return view('/featured', compact('gigs'));
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
Route::get('/sample2', function () {
    return view('/sample2');
});

Route::get('/blog/create', function () {
    return view('/blog/create');
});


//Approvals
Route::get('/admin/blog/user/index', [ApprovalController::class, 'index'])->name('blogs.approval.index');
Route::put('/admin/blog/user/index/{blog}/change-status', [ApprovalController::class, 'changeStatus'])->name('blogs.approval.change');
Route::get('/admin/supplier/user/index', [ApprovalController::class, 'supplierindex'])->name('suppliers.approval.index');
Route::put('/admin/supplier/user/index/{supplier}/change-status', [ApprovalController::class, 'supplierchangeStatus'])->name('suppliers.approval.change');
Route::get('/admin/service/user/index', [ApprovalController::class, 'serviceindex'])->name('services.approval.index');
Route::put('/admin/service/user/index/{service}/change-status', [ApprovalController::class, 'servicechangeStatus'])->name('services.approval.change');


//For Admin User
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/show-more', [BlogController::class, 'showM'])->name('blogs.showM');
Route::get('/blog/categorized', [BlogController::class, 'categorized'])->name('blogs.categorized');
Route::post('/gig-comments/{comment}/reply', [GigCommentController::class, 'reply'])->name('gig.comment.reply');
Route::post('/supplier-comments/{comment}/reply', [SupplierCommentController::class, 'reply'])->name('supplier.comment.reply');
Route::resource('blogs', BlogController::class);
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
        Route::resource('categories', CategoryController::class);
    });
});

//Supplier
Route::middleware(['auth'])->group(function () {
    Route::get('/become-a-supplier', [SupplierController::class, 'becomeSupplier']);
    Route::get('/registration', [SupplierController::class, 'create']);
    Route::post('/supplier/register', [SupplierController::class, 'store']);
    Route::get('/suppliers/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::put('/suppliers/{user}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::get('/my-profile', [SupplierController::class, 'myProfile'])->name('my-profile');
    Route::post('/my-profile/update-avatar', [SupplierController::class, 'updateAvatar']);
    Route::get('/gig/{gig}', [SupplierController::class, 'showGig'])->name('show.gig');
    Route::resource('gigs', GigController::class)->except(['update']);
    Route::post('/gigs/{gig}/update', [GigController::class, 'update'])->name('gigs.update');
    //delete Reply
    Route::delete('/gig/{comment}/comment', [GigCommentController::class, 'destroy'])->name('gig.comment.destroy');
    Route::delete('/supplier/{comment}/comment', [SupplierCommentController::class, 'destroy'])->name('supplier.comment.destroy');
    Route::delete('/gig-comments/reply/{reply}', [GigCommentController::class, 'destroyReply'])->name('gig.comment.reply.destroy');
    Route::delete('/supplier-comments/reply/{reply}', [SupplierCommentController::class, 'destroyReply'])->name('supplier.comment.reply.destroy');
    //Edit Reply
    Route::put('/gig/{comment}/comment', [GigcommentController::class, 'updateComment'])->name('gig.comment.update');
    Route::put('/gig-comments/reply/{reply}', [GigCommentController::class, 'updateReply'])->name('gig.comment.reply.update');
    Route::put('/supplier/{comment}/comment', [SupplierCommentController::class, 'updateComment'])->name('supplier.comment.update');
    Route::put('/supplier-comments/reply/{reply}', [SupplierCommentController::class, 'updateReply'])->name('supplier.comment.reply.update');


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
