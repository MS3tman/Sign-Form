<?php
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialiteController;


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
    return view('welcome');
})->name('to_welcome');

// register page
route::get('/register',[RegisterController::class, 'index']);
route::post('/register',[RegisterController::class, 'store'])->name('to_register');

// login page 
route::get('/login',[LoginController::class, 'index']);
route::post('/login',[LoginController::class, 'store'])->name('to_login');

// for github Auth
Route::get('/auth/github', [SocialiteController::class, 'redirect_to_github']);
Route::get('/auth/github/callback', [SocialiteController::class, 'callback_from_github']);

// for google Auth
Route::get('/auth/google',[SocialiteController::class, 'redirect_to_google']);
Route::get('/auth/google/callback', [SocialiteController::class, 'callback_from_google']);

