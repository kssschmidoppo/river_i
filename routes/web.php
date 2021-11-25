<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProjectsController;
// // use App\Http\Controllers\CategoriesController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/project', 'PagesController@projectIndex')->name('project');

Route::get('/', function () {
     return view('index');
 })->name('index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/ckeditor', function () {
    return view('projects.info.ckeditor');
})->name('editor');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/images', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin.image.store');
// Route::group(['middleware' => 'auth'], function() {
    Route::resource('categories', CategoriesController::class);
    Route::resource('projects', ProjectsController::class);
// });

//Route::group(['middleware' => ['auth', 'save_last_action_timestamp']], function () {});