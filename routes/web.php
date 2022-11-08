<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KikdController;
use App\Http\Controllers\KuisKeduaController;
use App\Http\Controllers\KuisPertamaController;
use App\Http\Controllers\mengenal_spltv;
use App\Http\Controllers\ProfileSiswaController;
use App\Http\Controllers\SpldvMetodeEliminasiController;
use App\Http\Controllers\SpldvMetodeGabunganController;
use App\Http\Controllers\SpldvMetodegrafikController;
use App\Http\Controllers\SpldvMetodesubtitusiController;
use App\Http\Controllers\spltv;
use App\Http\Controllers\SpltvEliminasiController;
use App\Http\Controllers\SpltvGabunganController;
use App\Http\Controllers\SpltvKehidupanSehariController;
use App\Http\Controllers\SpltvSubtitusi;
use App\Models\KuisKedua;
use App\Models\KuisPertama;
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
    return view('home_page.welcome');
})->name('home');
Route::get('/test', function(){
    return view('siswa.spltv.mengenal spltv.test');
});
Route::get('/geogebra', function(){
    return view('siswa.prototype.geogebra');
});

Route::get('/logout', [Controller::class, 'logout'])->name('logout_user');

Route::get('/landingpage', [DashController::class, 'landingpage'])->middleware(['auth'])->name('landing_page');

// route admin

Route::prefix('admin')->group(function(){
    Route::middleware(['auth', 'role:admin'])->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard_admin'])->name('dashboard_admin');
        Route::get('/data/user', [AdminController::class, 'daftar_user'])->name('daftar_user');
        Route::get('/data/tambah', [AdminController::class, 'tambah_user'])->name('tambah_user');
        Route::post('/data/tambah/post', [AdminController::class, 'tambah_user_post'])->name('tambah_user_post');
        Route::get('/data/user/{id}', [AdminController::class, 'edit_user'])->name('edit_user');
        Route::post('/data/user/reset', [AdminController::class, 'reset_account'])->name('reset_account');
        Route::post('/data/user/edit', [AdminController::class, 'edit_account_post'])->name('edit_account_post');
        Route::post('/data/verifikasi',[AdminController::class, 'akun_verifikasi'])->name('akun_verifikasi');
        Route::get('/profile', [AdminController::class, 'admin_profile'])->name('admin_profile');
        Route::post('/profile/post', [AdminController::class, 'admin_profile_post'])->name('admin_profile_post');
        Route::post('/profile/pass/post', [AdminController::class, 'admin_profile_post_pass'])->name('admin_profile_post_pass');
        Route::post('/delete', [AdminController::class, 'delete_acount'])->name('delete_acount');

    });
});

// route guru
Route::prefix('guru')->group(function(){
    Route::middleware(['auth', 'role:guru'])->group(function(){
        Route::get('/dashboard', [GuruController::class, 'dashboard_guru'])->name('dashboard_guru');
        Route::get('/siswa', [GuruController::class, 'halaman_siswa'])->name('halaman_siswa');
        Route::get('/siswa/detail/{id}', [GuruController::class, 'halaman_siswa_detail'])->name('halaman_siswa_detail');
        Route::get('/profile', [GuruController::class, 'profile_guru'])->name('profile_guru');
        Route::post('/profile/post', [GuruController::class, 'profile_guru_post'])->name('profile_guru_post');
        Route::post('/profile/pass/post', [GuruController::class, 'profile_guru_pass'])->name('profile_guru_pass');
        Route::get('/kkm', [GuruController::class, 'pengaturan_KKM'])->name('pengaturan_KKM');
        Route::post('/kkm/kuis', [GuruController::class, 'kuis_post'])->name('kuis_post');
    });
});

// route siswa
Route::prefix('siswa')->group(function () {
    Route::middleware(['auth', 'role:siswa'])->group(function () {
        Route::get('/profile', [ProfileSiswaController::class, 'index'])->middleware('verified')->name('profile');
        Route::post('/profile/edit/datadiri', [ProfileSiswaController::class, 'edit_profile'])->middleware('verified')->name('edit_profile');
        Route::post('/profile/edit/katasandi', [ProfileSiswaController::class, 'edit_password'])->middleware('verified')->name('edit_password');
        Route::get('/kikd', [KikdController::class, 'index'])->name('kikd');


        // route materi spldv
        // Route::prefix('spldv')->group(function () {
        //     Route::get('/metodegrafik/1', [SpldvMetodegrafikController::class, 'halaman_1'])->name('spldv_grafik_1');
        //     Route::get('/metodegrafik/2', [SpldvMetodegrafikController::class, 'halaman_2'])->name('spldv_grafik_2');
        //     Route::get('/metodegrafik/3/{soal}/{i}', [SpldvMetodegrafikController::class, 'halaman_3'])->name('spldv_grafik_3');
        //     Route::post('/metodegrafik/3/pembahasan', [SpldvMetodegrafikController::class, 'halaman3_pembahasan'])->name('halaman3_pembahasan');
        //     Route::post('/metodegrafik/3/{id}/{i}', [SpldvMetodegrafikController::class, 'halaman_3_koreksi'])->name('halaman_3_koreksi');
        //     Route::get('/metodegrafik/grafik', [SpldvMetodegrafikController::class, 'grafik_view'])->name('grafik_view');
        //     Route::get('/metodesubtitusi/1', [SpldvMetodesubtitusiController::class, 'halaman_1'])->name('spldv_subtitusi_1');
        //     Route::get('/metodesubtitusi/2/{id}/{nomor}', [SpldvMetodesubtitusiController::class, 'halaman_2'])->name('spldv_subtitusi_2');
        //     Route::post('/metodesubtitusi/2/pembahasan', [SpldvMetodesubtitusiController::class, 'pembahasan'])->name('pembahasan_spldv_subtitusi');
        //     Route::post('/metodesubtitusi/2/{nomor}', [SpldvMetodesubtitusiController::class, 'halaman_2_post'])->name('spldv_subtitusi_2_post');
        //     Route::prefix('metodeeliminasi')->group(function () {
        //         Route::get('/1', [SpldvMetodeEliminasiController::class, 'halaman_1'])->name('spldv_eliminasi_1');
        //         Route::get('/2/{id}/{nomor}', [SpldvMetodeEliminasiController::class, 'halaman_2'])->name('spldv_eliminasi_2');
        //         Route::post('/2/pembahasan', [SpldvMetodeEliminasiController::class, 'halaman_eliminasi_2_pembahasan'])->name('spldv_eliminasi_2_pembahasan');
        //         Route::post('/2/{nomor}', [SpldvMetodeEliminasiController::class, 'halaman_eliminasi_2_post'])->name('spldv_eliminasi_2_post');
        //     });
        //     Route::prefix('metodegabungan')->group(function () {
        //         Route::get('/1', [SpldvMetodeGabunganController::class, 'halaman_1_gabungan'])->name('spldv_gabungan_1');
        //         Route::get('/2/{id}/{nomor}', [SpldvMetodeGabunganController::class, 'halaman_2_gabungan'])->name('spldv_gabungan_2');
        //         Route::post('/2/pembahasan', [SpldvMetodeGabunganController::class, 'halaman_gabungan_2_pembahasan'])->name('spldv_gabungan_2_pembahasan');
        //         Route::post('/2/{nomor}', [SpldvMetodeGabunganController::class, 'halaman_gabungan_2_post'])->name('spldv_gabungan_2_post');
        //     });
        // });
        // route mater spltv
        Route::prefix('spltv')->group(function () {
            Route::get('/menyelesaikanspltv', [spltv::class, 'index'])->name('spltv_index');
            Route::prefix('/mengenal')->group(function () {
                Route::get('/pengertian-spltv', [mengenal_spltv::class, 'pengertian'])->name('pengertian_spltv');
                Route::prefix('/bentukspltv')->group(function(){
                    Route::get('/1', [mengenal_spltv::class, 'bentuk'])->name('bentuk_spltv');
                    Route::get('/2', [mengenal_spltv::class, 'bentuk_2'])->name('bentuk_spltv_2');
                    Route::get('/3', [mengenal_spltv::class, 'bentuk_3'])->name('bentuk_spltv_3');
                    Route::get('/4', [mengenal_spltv::class, 'bentuk_4'])->name('bentuk_spltv_4');
                });
                Route::get('/bentuk-spltv/kontekstual', [mengenal_spltv::class, 'keontekstual'])->name('bentuk_spltv_kontekstual');
                Route::get('/kuis', [mengenal_spltv::class, 'kuis'])->name('kuis_mengenal');
                Route::post('/kuis-post', [mengenal_spltv::class, 'kuis_mengenal_post'])->name('kuis_mengenal_post');
                Route::get('/hasil-kuis', [mengenal_spltv::class, 'kuis_mengenal_hasil'])->name('kuis_mengenal_hasil');
            });
            Route::prefix('/metodesubtitusi')->group(function () {
                Route::get('/1', [SpltvSubtitusi::class, 'spltv_subtitusi_1'])->name('spltv_subtitusi_1');
                Route::get('/2', [SpltvSubtitusi::class, 'spltv_subtitusi_2'])->name('spltv_subtitusi_2');
                Route::get('/3/{id}/{nomor}', [SpltvSubtitusi::class, 'spltv_subtitusi_3'])->name('spltv_subtitusi_3');
                Route::post('/3/pembahasan', [SpltvSubtitusi::class, 'spltv_subtitusi_3_pembahasan'])->name('spltv_subtitusi_3_pembahasan');
                Route::post('/3/{nomor}', [SpltvSubtitusi::class, 'spltv_subtitusi_3_post'])->name('spltv_subtitusi_3_post');
            });
            Route::prefix('/metodeeliminasi')->group(function () {
                Route::get('/1', [SpltvEliminasiController::class, 'spltv_eliminasi_1'])->name('spltv_eliminasi_1');
                Route::get('/2/{id}/{nomor}', [SpltvEliminasiController::class, 'spltv_eliminasi_2'])->name('spltv_eliminasi_2');
                Route::post('/2/pembahasan', [SpltvEliminasiController::class, 'spltv_eliminasi_2_pembahasan'])->name('spltv_eliminasi_2_pembahasan');
                Route::post('/2/{nomor}', [SpltvEliminasiController::class, 'spltv_eliminasi_2_post'])->name('spltv_eliminasi_2_post');
            });
            Route::prefix('/metodegabungan')->group(function () {
                Route::get('/1', [SpltvGabunganController::class, 'spltv_gabungan_1'])->name('spltv_gabungan_1');
                Route::get('/2/{id}/{nomor}', [SpltvGabunganController::class, 'spltv_gabungan_2'])->name('spltv_gabungan_2');
                Route::post('/2/pembahasan', [SpltvGabunganController::class, 'spltv_gabungan_2_pembahasan'])->name('spltv_gabungan_2_pembahasan');
                Route::post('/2/{nomor}', [SpltvGabunganController::class, 'spltv_gabungan_2_post'])->name('spltv_gabungan_2_post');
            });
            Route::prefix('/kuis')->group(function () {
                Route::get('/pertama', [KuisPertamaController::class, 'kuis_index_page'])->name('kuis_index_page');
                Route::post('/pertama/post', [KuisPertamaController::class, 'kuis_1_post'])->name('kuis_1_post');
                Route::get('/pertama/hasil', [KuisPertamaController::class, 'kuis_1_hasil'])->name('kuis_1_hasil');
            });
            Route::prefix('/kehidupansehari-hari')->group(function () {
                Route::get('/1', [SpltvKehidupanSehariController::class, 'spltv_kehidupan_1'])->name('spltv_kehidupan_1');
                Route::get('/2', [SpltvKehidupanSehariController::class, 'spltv_kehidupan_1_2'])->name('spltv_kehidupuan_1_2');
                Route::get('/3/{id}/{nomor}', [SpltvKehidupanSehariController::class, 'spltv_kehidupan_2'])->name('spltv_kehidupan_2');
                Route::post('/3/pembahasan', [SpltvKehidupanSehariController::class, 'spltv_kehidupan_2_pembahasan'])->name('spltv_kehidupan_2_pembahasan');
                Route::post('/3/{nomor}', [SpltvKehidupanSehariController::class, 'spltv_kehidupan_2_post'])->name('spltv_kehidupan_2_post');
            });
            Route::prefix('/kuis')->group(function () {
                Route::get('/kedua', [KuisKeduaController::class, 'kuis_index2_page'])->name('kuis_index2_page');
                Route::post('/kedua/post', [KuisKeduaController::class, 'kuis_2_post'])->name('kuis_2_post');
                Route::get('/kedua/hasil', [KuisKeduaController::class, 'kuis_2_hasil'])->name('kuis_2_hasil');
            });
            Route::prefix('/evaluasi')->group(function () {
                Route::get('/index', [EvaluasiController::class, 'evaluasi_index'])->name('evaluasi_index');
                Route::post('/post', [EvaluasiController::class, 'evaluasi_post'])->name('evaluasi_post');
                Route::get('/hasil', [EvaluasiController::class, 'evaluasi_hasil'])->name('evaluasi_hasil');
            });
        });
    });
});

Route::get('/testinput', [DashController::class, 'testinput']);
Route::post('/testinput_post', [DashController::class, 'testinput_post'])->name('testinput_post');

require __DIR__ . '/auth.php';
