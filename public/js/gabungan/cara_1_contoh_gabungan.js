function lanjut_tab_1(id) {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            let btnid = id + 1;
            document.getElementById('list-' + btnid).style.visibility = "visible";
            document.getElementById('lanjut_' + id + '_tab_1').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')

            // switch (id) {
            //     case 2:

            //     case 3:
            //         document.getElementById('list-' + id).style.visibility = "visible";
            //         document.getElementById('btn-lanjut-' + btnid).style.visibility = "hidden";
            //         Swal.fire('Ayo Lanjut!', '', 'success')
            //         break;
            //     case 4:
            //         document.getElementById('list-' + id).style.visibility = "visible";
            //         document.getElementById('btn-lanjut-' + btnid).style.visibility = "hidden";
            //         Swal.fire('Ayo Lanjut!', '', 'success')
            //         break;
            // }
        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}
function lanjut_tab_2(id) {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            let btnid = id + 1;
            document.getElementById('list-' + btnid + '-2').style.visibility = "visible";
            document.getElementById('lanjut_' + id + '_tab_2').style.visibility = "hidden";
            Swal.fire('Ayo Lanjut!', '', 'success')
        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}
