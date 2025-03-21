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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/skilltree', [PagesController::class, 'skilltree'])->name('skilltree');
Route::get('/skills', [PagesController::class, 'skills'])->name('skills');
Route::get('/classes', [PagesController::class, 'classes'])->name('classes');

