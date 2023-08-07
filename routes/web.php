<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// show all posts
Route::get('/', [PostsController::class,'index']);

// show create form
Route::get('/posts/create',[PostsController::class,'create'])->middleware('auth');

// store data
Route::post('/posts',[PostsController::class,'store'])->middleware('auth');

// show edit form
Route::get('/posts/{Post}/edit',[PostsController::class,'edit'])->middleware('auth');

// update form
Route::put('/posts/{Post}',[PostsController::class,'update'])->middleware('auth');

// update form
Route::delete('/posts/{Post}',[PostsController::class,'destroy'])->middleware('auth');

//Manage post
Route::get('posts/manage',[PostsController::class,'manage'])->middleware('auth');

// show single post
Route::get('/posts/{id}',[PostsController::class,'show']);

// show register  form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//create new user
Route::post('/users',[UserController::class,'store'])->middleware('guest');

// logout user 
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

// show user login form
Route::get('/login',[UserController::class,'login'])->name('login');

// login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);
