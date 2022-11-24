@extends('siswa.template.main')
@section('script_atas')
    <script src="{{ asset('js/siswa_2.js') }}"></script>
@endsection
@section('content')
    @include('siswa.spltv.metode eliminasi.contoh_soal')
    @include('siswa.spltv.metode eliminasi.halaman_footer_eliminasi')
@endsection
