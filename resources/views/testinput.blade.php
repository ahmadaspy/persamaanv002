@extends('siswa.template.main')
@section('content')
    <h1>$$\displaylines{
        {{ $datatest->soal_1_x }}
        }$$
    </h1>


    <form action="{{ route('testinput_post') }}" method="POST" id="theForm">
        @csrf
        <input type="hidden" name="soal_1" value="0">
        <input type="hidden" name="soal_2" value="0">
        <input type="hidden" name="x1_1" value="0">
        <input type="hidden" name="x1_2" value="0">
        <input type="hidden" name="y1_1" value="0">
        <input type="hidden" name="y1_2" value="0">
        <input type="hidden" name="x2_1" value="0">
        <input type="hidden" name="x2_2" value="0">
        <input type="hidden" name="y2_1" value="0" value="0">
        <input type="hidden" name="y2_2" value="0">
        <input type="hidden" name="TP_1" value="0">
        <input type="hidden" name="TP_2" value="0">
        <textarea id="theTextarea" name="soal_1_x"></textarea>
        <input type="hidden" name="soal_1_y" value="0">
        <input type="hidden" name="soal_2_x" value="0">
        <input type="hidden" name="soal_2_y" value="0">
        <button type="submit">submit</button>
    </form>
@endsection
@section('script_bawah')
    <script>
        function replace_newlines() {
            var textField = document.getElementById("theTextarea");
            var textString = textField.value;
            textField.value = textString.replace(/(?:\r|\n|\r\n)/g, ' \\\\ ');
        }

        document.getElementById("theForm").onsubmit = replace_newlines;
    </script>

@endsection
