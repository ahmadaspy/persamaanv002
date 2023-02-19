function bentuk_1(i) {
    document.getElementById("bentuk_soal_1_termasuk").className = "btn btn-danger";
    document.getElementById("bentuk_soal_1_tidak").className = "btn btn-success";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}

function bentuk_2(i) {
    document.getElementById("bentuk_soal_2_termasuk").className = "btn btn-success";
    document.getElementById("bentuk_soal_2_tidak").className = "btn btn-danger";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}

function bentuk_3(i) {
    document.getElementById("bentuk_soal_3_termasuk").className = "btn btn-success";
    document.getElementById("bentuk_soal_3_tidak").className = "btn btn-danger";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}

function bentuk_4(i) {
    document.getElementById("bentuk_soal_4_termasuk").className = "btn btn-danger";
    document.getElementById("bentuk_soal_4_tidak").className = "btn btn-success";
    if (i > 0) {
        Swal.fire({
            title: 'Jawaban Anda Benar',

            icon: 'info',
        })
    } else {
        Swal.fire({
            title: 'Jawaban Anda Salah',

            icon: 'warning',
        })
    }
}
