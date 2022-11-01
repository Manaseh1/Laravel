<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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


Route::get('about',[PagesController::class,'about'])->name('about');
Route::get('contact',[PagesController::class,'contact'])->name('contact');
Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('menu',[PagesController::class,'menu'])->name('menu');
Route::get('reservation',[PagesController::class,'reservation'])->name('reservation');
Route::get('testimonial',[PagesController::class,'testimonial'])->name('testimonial');
Route::get('service',[PagesController::class,'service'])->name('service');
// Posts Controller
Route::get('/posts', [PostsController::class,'create'])->name('create');
Route::post('/store', [PostsController::class,'store'])->name('store');
Route::get('view', [PostsController::class,'index'])->name('view');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
