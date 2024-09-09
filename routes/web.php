<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, "index"]);

Route::get('/login', [UserController::class, "login"]);
Route::post('/login', [UserController::class, "authenticate"]);

Route::get('/register', [UserController::class, "register"]);
Route::post('/register', [UserController::class, "store"]);

Route::get('/post/{id}', [PostController::class, "show"]);

Route::get('/search', SearchController::class);

Route::get('/create', [SessionController::class, "create"])->middleware("auth");
Route::post('/create', [SessionController::class, "store"])->middleware("auth");

Route::delete('/logout', [SessionController::class, "destroy"])->middleware("auth");
