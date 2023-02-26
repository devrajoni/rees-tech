<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ProjectDetailsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\LandingPage;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\ProjectCategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\ProjectGalleryController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\MissionVissionController;
use App\Http\Controllers\Backend\WorkProcessController;
use App\Http\Controllers\Backend\MailController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\PasswordChangeController;

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

/*--------------Frontend Route---------------------*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductsController::class, 'index'])->name('product');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/search', [ProjectController::class, 'search'])->name('search');
Route::get('/project-details/{id}/{slug}', [ProjectDetailsController::class, 'index'])->name('project-details');
Route::get('/category-project/{id}/{slug}', [ProjectDetailsController::class, 'show'])->name('category-project');
Route::get('/product-category/{id}', [ProductDetailsController::class, 'show'])->name('product-category');
Route::get('/product-details/{id}', [ProductDetailsController::class, 'index'])->name('product-details');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact-store');
Route::get('/privacy-policy', [LandingPage::class, 'index'])->name('privacy-policy');

/*--------------Backend Route---------------------*/

Route::group(['prefix'=>'backend','as'=>'backend.', 'middleware'=>['auth', 'verified']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('subCategories', SubCategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('project-categories', ProjectCategoryController::class);
    Route::resource('project-galleries', ProjectGalleryController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('mission-vision', MissionVissionController::class);
    Route::resource('work-process', WorkProcessController::class);
    Route::delete('/galleries-image/{id}', [ProjectsController::class, 'remove'])->name('galleries-image');
    Route::get('/project-status/{id}', [ProjectsController::class, 'status'])->name('project-status');
    Route::get('/project-category-status/{id}', [ProjectCategoryController::class, 'status'])->name('project-category-status');
    Route::get('/product-category-status/{id}', [CategoryController::class, 'status'])->name('product-category-status');

    Route::get('/work-process-status/{id}', [WorkProcessController::class, 'status'])->name('work-process-status');

    Route::get('/product-sub-category-status/{id}', [SubCategoryController::class, 'status'])->name('product-sub-category-status');

    Route::get('/product-status/{id}', [ProductController::class, 'status'])->name('product-status');

    Route::get('/settings/{tab?}', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
    Route::get('contact', [MailController::class, 'index'])->name('contact');
    Route::get('/profile/{tab?}', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/{user}/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/{id}/password', [PasswordChangeController::class, 'update'])->name('change_password');
});

require __DIR__.'/auth.php';
