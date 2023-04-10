<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/auth-process', [AuthController::class, 'loginAction'])->name('loginAction');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/chat/tokopedia', [ChatsController::class, 'tokopedia'])->name('chatTokopedia');