function pengertian_1() {
    document.getElementById("pengertian_soal_1_benar").className = "btn btn-success";
    document.getElementById("pengertian_soal_1_salah").className = "btn btn-danger";
    Swal.fire({
        title: 'Kenapa ?',
        text: 'Benar, karena setiap sistem persamaan linear tiga variabel selalu mempunyai tiga variabel',
        icon: 'info',
    })
}
function pengertian_2() {
    document.getElementById("pengertian_soal_2_benar").className = "btn btn-danger";
    document.getElementById("pengertian_soal_2_salah").className = "btn btn-success";
    Swal.fire({
        title: 'Kenapa ?',
        text: 'Salah, karena setiap variabel permisalan bisa saja berbeda dari yang umum seperti x, y, dan z. Bisa saja kita misalkan seperti a, b, dan c.',
        icon: 'info',
    })
}

function pengertian_3() {
    document.getElementById("pengertian_soal_3_benar").className = "btn btn-success";
    document.getElementById("pengertian_soal_3_salah").className = "btn btn-danger";
    Swal.fire({
        title: 'Kenapa ?',
        text: 'Benar, Karena perluasan dari SPLD adalah SPLTV yaitu pemecahan masalah yang menggunakan tiga variabel.',
        icon: 'info',
    })
}
