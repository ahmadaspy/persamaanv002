function pengertian_1(i) {
    document.getElementById("pengertian_soal_1_benar").className = "btn btn-success mt-2";
    document.getElementById("pengertian_soal_1_salah").className = "btn btn-danger mt-2";
    if (i > 0) {

        Swal.fire({
            title: 'Jawaban Anda Benar',
            text: 'karena setiap sistem persamaan linear tiga variabel selalu mempunyai tiga variabel',
            icon: 'info',
        })
    } else {

        Swal.fire({
            title: 'Jawaban Anda Salah',
            text: 'karena setiap sistem persamaan linear tiga variabel selalu mempunyai tiga variabel',
            icon: 'warning',
        })
    }

}

function pengertian_2(i) {
    document.getElementById("pengertian_soal_2_benar").className = "btn btn-danger mt-2";
    document.getElementById("pengertian_soal_2_salah").className = "btn btn-success mt-2";
    if (i > 0) {

        Swal.fire({
            title: 'Jawaban Anda Benar',
            text: 'karena setiap variabel permisalan bisa saja berbeda dari yang umum seperti x, y, dan z. Bisa saja kita misalkan seperti a, b, dan c.',
            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',
            text: 'karena setiap variabel permisalan bisa saja berbeda dari yang umum seperti x, y, dan z. Bisa saja kita misalkan seperti a, b, dan c.',
            icon: 'warning',
        })
    }

}

function pengertian_3(i) {
    document.getElementById("pengertian_soal_3_benar").className = "btn btn-success mt-2";
    document.getElementById("pengertian_soal_3_salah").className = "btn btn-danger mt-2";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',
            text: 'Karena perluasan dari SPLD adalah SPLTV yaitu pemecahan masalah yang menggunakan tiga variabel.',
            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',
            text: 'Karena perluasan dari SPLD adalah SPLTV yaitu pemecahan masalah yang menggunakan tiga variabel.',
            icon: 'warning',
        })
    }

}
