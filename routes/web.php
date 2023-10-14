<?php

use App\Http\Controllers\LoginController;
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
    return view('welcome');
});


Route::middleware('guest')->group(function (){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    // Route::get('/register', [RegisterController::class, 'index'])->name('register');
    // Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

    // forgot password
    // Route::get('/forgot-password', [LoginController::class, 'forgot'])->name('forgot');
    // Route::post('/forgot-password', [LoginController::class, 'sendForgot'])->name('forgot.submit');
    // Route::get('/resend-email', [LoginController::class, 'resendEmail'])->name('forgot.resend');
    // Route::get('/verification-forgot/{user_id}', [LoginController::class, 'verificationForgot'])->name('forgot.verification');
    // Route::post('/verification-forgot/{user_id}', [LoginController::class, 'verificationForgotSubmit'])->name('forgot.verification.submit');
    // Route::get('/reset-password/{user_id}', [LoginController::class, 'resetPassword'])->name('reset.password');
    // Route::post('/reset-password/{user_id}', [LoginController::class, 'resetPasswordSubmit'])->name('reset.password.submit');
});