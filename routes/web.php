<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/author', [MainController::class, 'author'])->name('author');
Route::get('/courses', [MainController::class, 'courses'])->name('courses');
Route::get('/releases', [MainController::class, 'releases'])->name('releases');
Route::get('/sites', [MainController::class, 'sites'])->name('sites');
Route::any('/post/{alias}', [MainController::class, 'post'])->name('post');
Route::any('/post/{alias}#comments', [MainController::class, 'post'])->name('post.comments');

Route::any('/sites/add', [MainController::class, 'addSite'])->name('site.add');
Route::get('/comment/{comment}/delete', [MainController::class, 'deleteComment'])
	->middleware('can:delete,comment')->name('comment.delete');
Route::get('/search', [MainController::class, 'search'])->name('search');