<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontEnd\ArticleController;
use App\Http\Controllers\FrontEnd\LandingPageController;
use App\Http\Controllers\FrontEnd\PointController;
use App\Http\Controllers\FrontEnd\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    return to_route('login');
});

Auth::routes();

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('public.login');
Route::get('/register', [LandingPageController::class, 'register'])->name('public.register');

Route::resource('public', LandingPageController::class);

Route::middleware('auth')->group(function() {

    Route::get('/logout', [UserController::class, 'logout'])->name('public.logout');

    Route::get('/profile', [UserController::class, 'profile'])->name('public.profile');

    Route::resource('point', PointController::class);
    Route::get('/point/reedem', [PointController::class, 'reedem'])->name('public.point.reedem');

    Route::get('/artikel/{slug}', [ArticleController::class, 'read'])->name('public.article.read');
    Route::get('/artikel', [ArticleController::class, 'index'])->name('public.article.index');

    Route::any('article/ajax/{param}', [ArticleController::class, 'ajax'])->name('article.ajax');

});

