<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;

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


Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');

Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/skilltree', [PagesController::class, 'skilltree'])->name('skilltree');

Route::get('/skills', [PagesController::class, 'skills'])->name('skills');

Route::get('/classes', [PagesController::class, 'classes'])->name('classes');

Route::middleware(['auth', 'can:view-admin-page'])->group(function () {
    Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact.index');
    Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::patch('/admin/users/{user}/make-admin', [App\Http\Controllers\Admin\UserController::class, 'makeAdmin'])->name('admin.users.makeAdmin');
});

