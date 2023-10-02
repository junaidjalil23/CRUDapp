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

Route::get('/', function () {
    return view('welcome');
});

                            // Laravel Relations Example routes

// Route::resource('users', UserController::class);
Route::get('/login', function(){
    session()->put('user_id', 1);               // Route for Middleware Implementing
    return redirect('/');
});
Route::get('/logout', function(){
    session()->forget('user_id');               // Route for Middleware Implementing
    return redirect('/');
});
Route::get('/users', [UserController::class, 'index'])->middleware('access');   // Route Middleware Implementation
Route::get('/usersshow', [UserController::class, 'show'])->middleware('access');
Route::get('/no-access', function(){
    echo "<h1>Access denied.!!!!!!!</h1>";
    die;
});

// // Routes for managing posts
// Route::resource('posts', PostController);

// // Routes for managing tags
// Route::resource('tags', TagController);

// Associate tags with a post (example route)
Route::get('/posts/{post}/tags', [PostController::class, 'attachTags'])->name('posts.attachTags');
// // // User routes
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/{userId}/posts', [UserController::class, 'showPosts'])->name('users.posts');
// Route::get('/users/{userId}/roles', [UserController::class, 'showRoles'])->name('users.roles');

// // Post routes
// Route::get('/posts/{postId}/comments', [PostController::class, 'showComments'])->name('posts.comments');

// // Comment routes
// Route::get('/comments/{commentId}/user', [CommentController::class, 'showUser'])->name('comments.user');

// // Tag routes
// Route::get('/tags/{tagId}/posts', [TagController::class, 'showPosts'])->name('tags.posts');
