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
Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/team', function () {
    return view('team.index');
});
Route::get('/projects', function () {
    return view('projects.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/services/{slug}/{id}.html', [\App\Http\Controllers\Services::class, 'index'])->name('service.index');

Route::get('/blog/{slug}/{id}.html', [\App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');

Route::post('/blog/add-comment', [\App\Http\Controllers\BlogController::class, 'addComment'])->name('blog.addComment');

Route::post('/contact/send', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');


// admin route
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('login'); // route mặc dinh khi vào admin
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('login', \App\Http\Controllers\Admin\LoginController::class);
    Route::resource('register', \App\Http\Controllers\Admin\RegisiterController::class);
    Route::resource('home', \App\Http\Controllers\Admin\DashboardController::class);
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('project', \App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('menu', \App\Http\Controllers\Admin\MenuController::class);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);
});




