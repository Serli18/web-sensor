<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorLaravel;
use App\Http\Controllers\LoginController;

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
//     return view('monitoring');
// });



Route::get('/bacakelembaban', [SensorLaravel::class, 'bacakelembaban']);

Route::get('/simpan/{nilaikelembaban}', [SensorLaravel::class, 'simpansensor']);

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::get('/',[CaptchaController::class,'login']);

Route::get('refresh_captcha', function () {
    return response()->json(['captcha'=> captcha_img()]);
})->name('refresh_captcha');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/monitoring', function () {
        return view('monitoring');
    })->name('monitoring');
});

