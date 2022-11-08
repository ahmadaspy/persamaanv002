function lanjut_1() {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('list-2').style.visibility = "visible";
            document.getElementById('btn-lanjut-1').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')

        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}
function lanjut_2() {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('list-3').style.visibility = "visible";
            document.getElementById('btn-lanjut-2').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')

        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}
function lanjut_3() {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('list-4').style.visibility = "visible";
            document.getElementById('btn-lanjut-3').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')

        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}
function lanjut_4() {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('list-4').style.visibility = "visible";
            document.getElementById('btn-lanjut-3').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')

        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}
function lanjut_5() {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('list-5').style.visibility = "visible";
            document.getElementById('btn-lanjut-4').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')

        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}

