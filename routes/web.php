<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
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
                // Laravel CRUD example routes
Route::resource('products', ProductController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

                            // Laravel Relations Example routes

// Route::resource('users', UserController::class);
// // User routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{userId}/posts', [UserController::class, 'showPosts'])->name('users.posts');
Route::get('/users/{userId}/roles', [UserController::class, 'showRoles'])->name('users.roles');

// Post routes
Route::get('/posts/{postId}/comments', [PostController::class, 'showComments'])->name('posts.comments');

// Comment routes
Route::get('/comments/{commentId}/user', [CommentController::class, 'showUser'])->name('comments.user');

// Tag routes
Route::get('/tags/{tagId}/posts', [TagController::class, 'showPosts'])->name('tags.posts');
