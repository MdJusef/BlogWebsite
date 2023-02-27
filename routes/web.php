<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[BlogController::class,'index'])->name('/');
Route::get('/about',[BlogController::class,'about'])->name('about');
Route::get('/contact',[BlogController::class,'contact'])->name('contact');
Route::get('/single-post',[BlogController::class,'singlePost'])->name('single-post');
Route::get('/category',[BlogController::class,'category'])->name('category');
Route::get('/search',[BlogController::class,'search'])->name('search');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-blog',[NewsController::class,'blogManage'])->name('add-blog');
    Route::get('/manage-blog',[NewsController::class,'blogManage'])->name('manage-blog');
    Route::get('/new-blog',[NewsController::class,'saveBlog'])->name('new-blog');
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::get('/manage-category',[CategoryController::class,'addCategory'])->name('manage-category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new-category');
    Route::get('/add-author',[AuthorController::class,'addAuthor'])->name('add-author');
    Route::get('/manage-author',[AuthorController::class,'manageAuthor'])->name('manage-author');
    Route::post('/new-author',[AuthorController::class,'saveAuthor'])->name('new-author');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('edit-author');
    Route::post('/update-author',[AuthorController::class,'updateAuthor'])->name('update-author');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('delete-author');
});
