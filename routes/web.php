<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/', function () {
    return view('home.index');
});
Route::get('/Blog', function () {
    return view('Blog.index');
});

// admin route
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home'); // route mặc định khi vào /admin
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('project', \App\Http\Controllers\Admin\ProjectController::class);
});




