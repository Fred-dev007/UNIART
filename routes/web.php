<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ArticleController::class, 'index']);
Route::get('/contact',[ArticleController::class, 'contact']);
Route::get('/add',[ArticleController::class, 'create'])->middleware("auth");
Route::post('/add',[ArticleController::class, 'store'])->middleware("auth");
Route::get('/articles',[ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show'])->middleware("auth");
Route::get('/edit/{article}', [ArticleController::class, 'edit'])->middleware("auth");
Route::patch('/edit/{article}', [ArticleController::class, 'update'])->middleware("auth");
Route::delete('article/{article}/delete', [ArticleController::class, 'delete'])->middleware("auth");
//auth
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware("guest");
Route::post('/register', [RegisterController::class, 'create'])->name('register')->middleware("guest");
Route::get('/login', [SessionsController::class, 'index'])->name('login')->middleware("guest");
Route::post('/login', [SessionsController::class, 'authenticate'])->middleware("guest");
//deconnexion
Route::post('/logout', [SessionsController::class, 'logout'])->name('logout')->middleware("auth");