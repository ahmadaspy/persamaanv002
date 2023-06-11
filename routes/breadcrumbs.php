<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use App\Models\MariMencobaSpltvKehidupan;
use Illuminate\Contracts\Session\Session;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('home'));
});
// home / pengertian
Breadcrumbs::for('pengertian', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pengertian SPLTV', route('pengertian_spltv'));
});
// bentuk spltv 1
Breadcrumbs::for('Bentuk SPLTV', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Bentuk SPLTV', route('bentuk_spltv'));
});
// bentuk spltv 2
Breadcrumbs::for('Bentuk SPLTV 2', function (BreadcrumbTrail $trail) {
    $trail->parent('Bentuk SPLTV');
    $trail->push('2', route('bentuk_spltv_2'));
});
// bentuk spltv 3
Breadcrumbs::for('Bentuk SPLTV 3', function (BreadcrumbTrail $trail) {
    $trail->parent('Bentuk SPLTV');
    $trail->push('3', route('bentuk_spltv_3'));
});
// bentuk spltv 4
Breadcrumbs::for('Bentuk SPLTV 4', function (BreadcrumbTrail $trail) {
    $trail->parent('Bentuk SPLTV');
    $trail->push('4', route('bentuk_spltv_4'));
});
// bentuk spltv 5
Breadcrumbs::for('Bentuk SPLTV 5', function (BreadcrumbTrail $trail) {
    $trail->parent('Bentuk SPLTV');
    $trail->push('5', route('bentuk_spltv_5'));
});

//Bentuk kontekstual
Breadcrumbs::for('Bentuk kontekstual', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Bentuk kontekstual', route('bentuk_spltv_kontekstual'));
});


//metode substitusi
Breadcrumbs::for('metode substitusi', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('metode substitusi', route('spltv_subtitusi_1'));
});
Breadcrumbs::for('metode substitusi halaman 2', function (BreadcrumbTrail $trail) {
    $trail->parent('metode substitusi');
    $trail->push('2', route('spltv_subtitusi_2'));
});

//metode eliminasi
Breadcrumbs::for('metode_eliminasi', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Metode eliminasi', route('spltv_eliminasi_1'));
});
Breadcrumbs::for('metode_eliminasi_2', function (BreadcrumbTrail $trail) {
    $trail->parent('metode_eliminasi');
    $trail->push('2', route('spltv_eliminasi_2'));
});

//metode gabungan
Breadcrumbs::for('metode_gabungan', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Metode Gabungan', route('spltv_gabungan_1'));
});
Breadcrumbs::for('metode_gabungan_2', function (BreadcrumbTrail $trail) {
    $trail->parent('metode_gabungan');
    $trail->push('2', route('spltv_gabungan_2'));
});

//dalam kehidupan sehari-hari
Breadcrumbs::for('kehidupan_sehari', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dalam kehidupan sehari - hari', route('spltv_kehidupan_1'));
});
Breadcrumbs::for('kehidupan_sehari_2', function (BreadcrumbTrail $trail) {
    $trail->parent('kehidupan_sehari');
    $trail->push('2', route('spltv_kehidupuan_1_2'));
});
Breadcrumbs::for('kehidupan_sehari_3', function (BreadcrumbTrail $trail) {
    $trail->parent('kehidupan_sehari');
    $mari_mencoba = MariMencobaSpltvKehidupan::first();
    $trail->push('3', route('spltv_kehidupan_2', [$mari_mencoba->id, 1]));
});

// profile
// home / halaman sebelumnya
Breadcrumbs::for('previous', function (BreadcrumbTrail $trail) {
    $route_sebelumnya = url()->previous();
    $trail->parent('home');
    $trail->push('Halaman sebelumnya' , $route_sebelumnya);
});
// home / halaman seblumnya / profile
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('previous');
    $trail->push('Profile', route('admin_profile'));
});

//rekap siswa
Breadcrumbs::for('rekap_halaman_siswa', function (BreadcrumbTrail $trail) {
    $trail->parent('previous');
    $trail->push('Rekapitulasi Nilai', route('rekap_siswa'));
});
