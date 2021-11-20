<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\CategoriesController;


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

Route::get('/', function () {
     return view('index');
 })->name('home');



Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/project', function () {
     return view('pages.project');
})->name('project');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('categories', [CategoriesController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
   
    Route::resource('posts', [PostsController::class, 'index']);
    Route::resource('projects', [ProjectsController::class,'index']);
});
