const answer = [0, 0, 2, 0, 0, 4, 0, 0];
const answer_user = [];
function step_1_1(id) {
    // console.log('step_1_1_'+id);
    let elemen_id = document.getElementById('step_1_1_' + id);
    let jawaban = elemen_id.value;
    switch (id){
        case 0:
            if (answer[0] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 1:
            if (answer[1] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 2:
            if (answer[2] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 3:
            if (answer[3] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 4:
            if (answer[4] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 5:
            if (answer[5] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 6:
            if (answer[6] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
        case 7:
            if (answer[7] != jawaban) {
                elemen_id.style.border = '1px solid red';
            } else {
                elemen_id.style.border = '1px solid green';
                elemen_id.disabled = true;
                answer_user.push(jawaban)
            }
            break;
    }
    switch (answer_user.length) {
        case 2:
            document.getElementById('vis_' + answer_user.length).style.visibility = 'visible';
            break;
        case 3:
            document.getElementById('vis_' + answer_user.length).style.visibility = 'visible';
            document.getElementById('card_2').style.visibility = 'visible';
            break;
        case 5:
            document.getElementById('vis_' + answer_user.length).style.visibility = 'visible';
            break;
        case 6:
            document.getElementById('vis_' + answer_user.length).style.visibility = 'visible';
            document.getElementById('card_3').style.visibility = 'visible';
            break;
        case 8:
            document.getElementById('vis_' + answer_user.length).style.visibility = 'visible';
            document.getElementById('card_4').style.visibility = 'visible';
            break;
    }
    // if (answer_user.length == 2) {
    //     document.getElementById('tahap1_1').style.visibility = 'visible';
    // }
}
function kesimpulan() {
    Swal.fire({
        title: 'Selesai melakukan kegiatan di atas ?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Ya',
        denyButtonText: 'Belum',
        icon: 'info',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('card_5').style.visibility = 'visible';
            Swal.fire('Ayo Lanjut!', '', 'success')

        } else if (result.isDenied) {
            Swal.fire('Yuk Baca lagi', '', 'warning')
        }
    })

}
