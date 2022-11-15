<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

// This will link to Home Page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');



//This will link to About us Page
Route::get('/about', [AboutController::class, 'index'])->name('about');


// This will Link to Services Page
Route::get('/service', [ServicesController::class, 'index'])->name('services');



//This will link to Blog Post
Route::get('/blog', [BlogController::class, 'index'])->name('blog');


//To store blog post to the Database
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');


//This will link to create post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');





//This will link to showing single blog Post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');




//This will edit single blog Post
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');


//This will delete single post
Route::delete('/blog/{post}', [BlogController::class, 'delete'])->name('blog.destroy');



//This will update single blog Post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');



//This will link to contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');




//This will link to Dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
