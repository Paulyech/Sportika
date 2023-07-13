<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


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





// show single post
Route::get('/posts/{id}',[PostsController::class,'show']);