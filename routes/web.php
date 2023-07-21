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
Route::get('/posts/create',[PostsController::class,'create']);

// store data
Route::post('/posts',[PostsController::class,'store']);

// show edit form
Route::get('/posts/{Post}/edit',[PostsController::class,'edit']);

// update form
Route::put('/posts/{Post}',[PostsController::class,'update']);

// update form
Route::delete('/posts/{Post}',[PostsController::class,'destroy']);

// show single post
Route::get('/posts/{id}',[PostsController::class,'show']);

//register 
Route::get('/register',[UserController::class,'create']);

//create new user
Route::post('/users',[UserController::class,'store']);

// logout user 
Route::post('/logout',[UserController::class,'logout']);
