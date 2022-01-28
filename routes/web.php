<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashController;
use App\Http\Controllers\KikdController;
use App\Http\Controllers\ProfileSiswaController;
use App\Http\Controllers\SpldvMetodegrafikController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

Route::get('/logout', [Controller::class, 'logout'])->name('logout_user');

Route::get('/landingpage', [DashController::class, 'landingpage'])->middleware(['auth'])->name('landing_page');

// route siswa
Route::prefix('siswa')->group(function () {
    Route::middleware(['auth', 'role:siswa'])->group(function () {
        Route::get('/profile', [ProfileSiswaController::class, 'index'])->middleware('verified')->name('profile');
        Route::post('/profile/edit/datadiri', [ProfileSiswaController::class, 'edit_profile'])->middleware('verified')->name('edit_profile');
        Route::post('/profile/edit/katasandi', [ProfileSiswaController::class, 'edit_password'])->middleware('verified')->name('edit_password');
        Route::get('/kikd', [KikdController::class, 'index'])->name('kikd');
        // route materi spldv
        Route::prefix('spldv')->group(function () {
            Route::get('/metodegrafik/1', [SpldvMetodegrafikController::class, 'halaman_1'])->name('spldv_grafik_1');
            Route::get('/metodegrafik/2', [SpldvMetodegrafikController::class, 'halaman_2'])->name('spldv_grafik_2');
            Route::get('/metodegrafik/3/{soal}/{i}', [SpldvMetodegrafikController::class, 'halaman_3'])->name('spldv_grafik_3');
            Route::post('/metodegrafik/3/pembahasan', [SpldvMetodegrafikController::class, 'halaman3_pembahasan'])->name('halaman3_pembahasan');
            Route::post('/metodegrafik/3/{id}/{i}', [SpldvMetodegrafikController::class, 'halaman_3_koreksi'])->name('halaman_3_koreksi');
        });
    });
});

Route::get('/testinput', [DashController::class, 'testinput']);
Route::post('/testinput_post', [DashController::class, 'testinput_post'])->name('testinput_post');

require __DIR__ . '/auth.php';