<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\http\Controllers\PostController;
use App\http\Controllers\Post2Controller;
use App\http\Controllers\Post3Controller;

use App\http\Controllers\Post4Controller;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/experience', function() {
    return view('experience', [
        'title' => 'Experience'
    ]);
});



// project
Route::get('/posts', [PostController::class,'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);




Route::get('/contact', function() {
    return view('contact', [
        'title' => 'Contact'
    ]);
});



Route::get('/post2', [Post2Controller::class,'project2'])->name('post2');
Route::get('/post3', [Post3Controller::class,'project3'])->name('post3');
Route::get('/post4', [Post4Controller::class,'project4'])->name('post4');





