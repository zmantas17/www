<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SkateController;
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
// Product
Route::get('/', [SkateController::class, 'index']);
Route::get('/new-skate', [SkateController::class, 'newSkateForm']);
Route::post('/store-skate', [SkateController::class, 'storeSkates']);
Route::get('/skate/{skate}', [SkateController::class, 'showSkates']);
// TODO: susitvarkyt linkus i routus
Route::get('/skate/{skate}/edit', [SkateController::class, 'viewEditSkateForm']);
Route::patch('/skate/{skate}/edit', [SkateController::class, 'updateSkate']);
Route::get('/skate/{skate}/delete/ask', [SkateController::class, 'viewRemoveSkateForm']);
Route::get('/skate/{skate}/delete/confirm', [SkateController::class, 'deleteSkate']);

// Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/add-category', [CategoryController::class, 'viewForm']);
Route::post('/store-category', [CategoryController::class, 'storeCategory']);
Route::get('/category/{category}/delete/ask', [CategoryController::class, 'viewRemoveCategoryForm']);
Route::get('/category/{category}/delete/confirm', [CategoryController::class, 'deleteCategory']);
Route::patch('/category/{category}/edit', [CategoryController::class, 'updateCategory']);
Route::get('/category/{category}/edit', [CategoryController::class, 'viewCategory']);

// Dashboard
Route::get('/dashboard', [SkateController::class, 'dashboard'])->name('dashboard');


require __DIR__.'/auth.php';
