<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomsController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

    $rooms = \App\Models\Room::all();

    return view('pages/index', compact('rooms'));
})->name('index');

Route::get('/login', [AuthManager::class, 'login'])->name('login');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login-post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');

Route::post('/register', [AuthManager::class, 'registerPost'])->name('register-post');

Route::post('/rooms/store', [RoomsController::class, 'store'])->name('rooms.store');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/profile', [AuthManager::class, 'profile'])->name('profile')->middleware('auth');

Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile-post');

Route::middleware([Authenticate::class, AdminMiddleware::class])->group(function () {
   Route::get('/admin', [AuthManager::class, 'admin'])->name('admin');
});
