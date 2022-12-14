function lanjut(id) {
    Swal.fire({
        title: 'Selesai bacanya ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            let btnid = id - 1;
            switch (id) {
                case 2:
                    document.getElementById('list-' + id).style.visibility = "visible";
                    document.getElementById('btn-lanjut-' + btnid).style.visibility = "hidden";
                    Swal.fire('Ayo Lanjut!', '', 'success')
                    break;
                case 3:
                    document.getElementById('list-' + id).style.visibility = "visible";
                    document.getElementById('btn-lanjut-' + btnid).style.visibility = "hidden";
                    Swal.fire('Ayo Lanjut!', '', 'success')
                    break;
                case 4:
                    document.getElementById('list-' + id).style.visibility = "visible";
                    document.getElementById('btn-lanjut-' + btnid).style.visibility = "hidden";
                    Swal.fire('Ayo Lanjut!', '', 'success')
                    break;
            }
        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })
}