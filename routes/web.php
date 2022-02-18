<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashController;
use App\Http\Controllers\KikdController;
use App\Http\Controllers\ProfileSiswaController;
use App\Http\Controllers\SpldvMetodeEliminasiController;
use App\Http\Controllers\SpldvMetodeGabunganController;
use App\Http\Controllers\SpldvMetodegrafikController;
use App\Http\Controllers\SpldvMetodesubtitusiController;
use App\Http\Controllers\spltv;
use App\Http\Controllers\SpltvSubtitusi;
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
            Route::get('/metodegrafik/grafik', [SpldvMetodegrafikController::class, 'grafik_view'])->name('grafik_view');
            Route::get('/metodesubtitusi/1', [SpldvMetodesubtitusiController::class, 'halaman_1'])->name('spldv_subtitusi_1');
            Route::get('/metodesubtitusi/2/{id}/{nomor}', [SpldvMetodesubtitusiController::class, 'halaman_2'])->name('spldv_subtitusi_2');
            Route::post('/metodesubtitusi/2/pembahasan', [SpldvMetodesubtitusiController::class, 'pembahasan'])->name('pembahasan_spldv_subtitusi');
            Route::post('/metodesubtitusi/2/{nomor}', [SpldvMetodesubtitusiController::class, 'halaman_2_post'])->name('spldv_subtitusi_2_post');
            Route::prefix('metodeeliminasi')->group(function () {
                Route::get('/1', [SpldvMetodeEliminasiController::class, 'halaman_1'])->name('spldv_eliminasi_1');
                Route::get('/2/{id}/{nomor}', [SpldvMetodeEliminasiController::class, 'halaman_2'])->name('spldv_eliminasi_2');
                Route::post('/2/pembahasan', [SpldvMetodeEliminasiController::class, 'halaman_eliminasi_2_pembahasan'])->name('spldv_eliminasi_2_pembahasan');
                Route::post('/2/{nomor}', [SpldvMetodeEliminasiController::class, 'halaman_eliminasi_2_post'])->name('spldv_eliminasi_2_post');
            });
            Route::prefix('metodegabungan')->group(function () {
                Route::get('/1', [SpldvMetodeGabunganController::class, 'halaman_1_gabungan'])->name('spldv_gabungan_1');
                Route::get('/2/{id}/{nomor}', [SpldvMetodeGabunganController::class, 'halaman_2_gabungan'])->name('spldv_gabungan_2');
                Route::post('/2/pembahasan', [SpldvMetodeGabunganController::class, 'halaman_gabungan_2_pembahasan'])->name('spldv_gabungan_2_pembahasan');
                Route::post('/2/{nomor}', [SpldvMetodeGabunganController::class, 'halaman_gabungan_2_post'])->name('spldv_gabungan_2_post');
            });
        });
        // route mater spltv
        Route::prefix('spltv')->group(function () {
            Route::get('/menyelesaikanspltv', [spltv::class, 'index'])->name('spltv_index');
            Route::prefix('/metodesubtitusi')->group(function () {
                Route::get('/1', [SpltvSubtitusi::class, 'spltv_subtitusi_1'])->name('spltv_subtitusi_1');
            });
        });
    });
});

Route::get('/testinput', [DashController::class, 'testinput']);
Route::post('/testinput_post', [DashController::class, 'testinput_post'])->name('testinput_post');

require __DIR__ . '/auth.php';
