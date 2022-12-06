// persamaan 4
function step_1_input_1() {
    let jawaban_1 = document.getElementById('step_1_input_1').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_1_input_1');
        input.style.border = '1px solid green';
        document.getElementById("step_1_input_2").disabled = false;
    } else {
        input = document.getElementById('step_1_input_1');
        input.style.border = '1px solid red';
    }
}

function step_1_input_2() {
    let jawaban_1 = document.getElementById('step_1_input_2').value;
    if (jawaban_1 === 'x-3y+2z=9') {
        input = document.getElementById('step_1_input_2');
        input.style.border = '1px solid green';

    } else {
        input = document.getElementById('step_1_input_2');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_1_input_4').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_1_input_5_1").disabled = false;
        document.getElementById("step_1_input_5_2").disabled = false;
        document.getElementById("step_1_input_5_3").disabled = false;
    }
}

function step_1_input_3() {
    let jawaban_1 = document.getElementById('step_1_input_3').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_1_input_3');
        input.style.border = '1px solid green';
        document.getElementById("step_1_input_4").disabled = false;
    } else {
        input = document.getElementById('step_1_input_3');
        input.style.border = '1px solid red';
    }
}

function step_1_input_4() {
    let jawaban_1 = document.getElementById('step_1_input_4').value;
    if (jawaban_1 === 'x+4y+z=-6') {
        input = document.getElementById('step_1_input_4');
        input.style.border = '1px solid green';

    } else {
        input = document.getElementById('step_1_input_4');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_1_input_2').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_1_input_5_1").disabled = false;
        document.getElementById("step_1_input_5_2").disabled = false;
        document.getElementById("step_1_input_5_3").disabled = false;
    }
}

function step_1_input_5() {
    let jawaban_1 = document.getElementById('step_1_input_5_1').value;
    let jawaban_2 = document.getElementById('step_1_input_5_2').value;
    let jawaban_3 = document.getElementById('step_1_input_5_3').value;

    let jawaban_4 = document.getElementById('step_1_input_10_1').value;
    let jawaban_5 = document.getElementById('step_1_input_10_2').value;
    let jawaban_6 = document.getElementById('step_1_input_10_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '7') {
            input = document.getElementById('step_1_input_5_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_1_input_5_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '1') {
            input = document.getElementById('step_1_input_5_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_1_input_5_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        if (jawaban_3 === '15') {
            input = document.getElementById('step_1_input_5_3');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_1_input_5_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '7') && (jawaban_2 === '1') && (jawaban_3 === '15') && (jawaban_4 === '14') && (jawaban_5 === '1') && (jawaban_6 === '29')) {
        document.getElementById("btn_2").disabled = false;
    }
}

// persamaan 5
function step_1_input_6() {
    let jawaban_1 = document.getElementById('step_1_input_6').value;
    if (jawaban_1 === '3') {
        input = document.getElementById('step_1_input_6');
        input.style.border = '1px solid green';
        document.getElementById("step_1_input_7").disabled = false;
    } else {
        input = document.getElementById('step_1_input_6');
        input.style.border = '1px solid red';
    }
}

function step_1_input_7() {
    let jawaban_1 = document.getElementById('step_1_input_7').value;
    if (jawaban_1 === '3x+12y+3z=-18') {
        input = document.getElementById('step_1_input_7');
        input.style.border = '1px solid green';

    } else {
        input = document.getElementById('step_1_input_7');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_1_input_9').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_1_input_10_1").disabled = false;
        document.getElementById("step_1_input_10_2").disabled = false;
        document.getElementById("step_1_input_10_3").disabled = false;
    }
}

function step_1_input_8() {
    let jawaban_1 = document.getElementById('step_1_input_8').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_1_input_8');
        input.style.border = '1px solid green';
        document.getElementById("step_1_input_9").disabled = false;
    } else {
        input = document.getElementById('step_1_input_8');
        input.style.border = '1px solid red';
    }
}

function step_1_input_9() {
    let jawaban_1 = document.getElementById('step_1_input_9').value;
    if (jawaban_1 === '3x-2y+4z=11') {
        input = document.getElementById('step_1_input_9');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_1_input_9');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_1_input_7').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_1_input_10_1").disabled = false;
        document.getElementById("step_1_input_10_2").disabled = false;
        document.getElementById("step_1_input_10_3").disabled = false;
    }
}

function step_1_input_10() {
    let jawaban_1 = document.getElementById('step_1_input_10_1').value;
    let jawaban_2 = document.getElementById('step_1_input_10_2').value;
    let jawaban_3 = document.getElementById('step_1_input_10_3').value;

    let jawaban_4 = document.getElementById('step_1_input_5_1').value;
    let jawaban_5 = document.getElementById('step_1_input_5_2').value;
    let jawaban_6 = document.getElementById('step_1_input_5_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '14') {
            input = document.getElementById('step_1_input_10_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_1_input_10_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '1') {
            input = document.getElementById('step_1_input_10_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_1_input_10_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        if (jawaban_3 === '29') {
            input = document.getElementById('step_1_input_10_3');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_1_input_10_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_4 === '7') && (jawaban_5 === '1') && (jawaban_6 === '15') && (jawaban_1 === '14') && (jawaban_2 === '1') && (jawaban_3 === '29')) {
        document.getElementById("btn_2").disabled = false;
    }
}

// step_2 variabel z
function step_2_input_1() {
    let jawaban_1 = document.getElementById('step_2_input_1').value;
    if (jawaban_1 === '2') {
        input = document.getElementById('step_2_input_1');
        input.style.border = '1px solid green';
        document.getElementById("step_2_input_2").disabled = false;
    } else {
        input = document.getElementById('step_2_input_1');
        input.style.border = '1px solid red';
    }
}

function step_2_input_2() {
    let jawaban_1 = document.getElementById('step_2_input_2').value;
    if (jawaban_1 === '-14y+2z=30') {
        input = document.getElementById('step_2_input_2');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_2_input_2');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_2_input_4').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_2_input_5_1").disabled = false;
        document.getElementById("step_2_input_5_2").disabled = false;
    }
}

function step_2_input_3() {
    let jawaban_1 = document.getElementById('step_2_input_3').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_2_input_3');
        input.style.border = '1px solid green';
        document.getElementById("step_2_input_4").disabled = false;
    } else {
        input = document.getElementById('step_2_input_3');
        input.style.border = '1px solid red';
    }
}

function step_2_input_4() {
    let jawaban_1 = document.getElementById('step_2_input_4').value;
    if (jawaban_1 === '14y+10z=-18') {
        input = document.getElementById('step_2_input_4');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_2_input_4');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_2_input_2').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_2_input_5_1").disabled = false;
        document.getElementById("step_2_input_5_2").disabled = false;
    }
}

function step_2_input_5() {
    let jawaban_1 = document.getElementById('step_2_input_5_1').value;
    let jawaban_2 = document.getElementById('step_2_input_5_2').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '12') {
            input = document.getElementById('step_2_input_5_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_5_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '12') {
            input = document.getElementById('step_2_input_5_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_5_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_2_input_6").disabled = false;
    }
}

function step_2_input_6() {
    let jawaban_1 = document.getElementById('step_2_input_6').value;
    let jawaban_2 = document.getElementById('step_2_input_12').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_2_input_6');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_2_input_6');
        input.style.border = '1px solid red';
    }
    if ((jawaban_1 === '1') && (jawaban_2 === '2')) {
        document.getElementById("btn_3").disabled = false;
    }
}

// step_2 variabel y
function step_2_input_7() {
    let jawaban_1 = document.getElementById('step_2_input_7').value;
    if (jawaban_1 === '10') {
        input = document.getElementById('step_2_input_7');
        input.style.border = '1px solid green';
        document.getElementById("step_2_input_8").disabled = false;
    } else {
        input = document.getElementById('step_2_input_7');
        input.style.border = '1px solid red';
    }
}

function step_2_input_8() {
    let jawaban_1 = document.getElementById('step_2_input_8').value;
    if (jawaban_1 === '-70y+10z=150') {
        input = document.getElementById('step_2_input_8');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_2_input_8');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_2_input_10').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_2_input_11_1").disabled = false;
        document.getElementById("step_2_input_11_2").disabled = false;
    }
}

function step_2_input_9() {
    let jawaban_1 = document.getElementById('step_2_input_9').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_2_input_9');
        input.style.border = '1px solid green';
        document.getElementById("step_2_input_10").disabled = false;
    } else {
        input = document.getElementById('step_2_input_9');
        input.style.border = '1px solid red';
    }
}

function step_2_input_10() {
    let jawaban_1 = document.getElementById('step_2_input_10').value;
    if (jawaban_1 === '14y+10z=-18') {
        input = document.getElementById('step_2_input_10');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_2_input_10');
        input.style.border = '1px solid red';
    }
    let jawaban_2 = document.getElementById('step_2_input_8').value;
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_2_input_11_1").disabled = false;
        document.getElementById("step_2_input_11_2").disabled = false;
    }
}

function step_2_input_11() {
    let jawaban_1 = document.getElementById('step_2_input_11_1').value;
    let jawaban_2 = document.getElementById('step_2_input_11_2').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '84') {
            input = document.getElementById('step_2_input_11_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_11_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '168') {
            input = document.getElementById('step_2_input_11_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_11_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 !== '') && (jawaban_2 !== '')) {
        document.getElementById("step_2_input_12").disabled = false;
    }
}

function step_2_input_12() {
    let jawaban_1 = document.getElementById('step_2_input_12').value;
    let jawaban_2 = document.getElementById('step_2_input_6').value;
    if (jawaban_1 === '2') {
        input = document.getElementById('step_2_input_12');
        input.style.border = '1px solid green';
    } else {
        input = document.getElementById('step_2_input_12');
        input.style.border = '1px solid red';
    }
    if ((jawaban_1 === '2') && (jawaban_2 === '1')) {
        document.getElementById("btn_3").disabled = false;
    }
}
// step 3
function step_3_input_1() {
    let jawaban_1 = document.getElementById('step_3_input_1_1').value;
    let jawaban_2 = document.getElementById('step_3_input_1_2').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '-2') {
            input = document.getElementById('step_3_input_1_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_3_input_1_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '1') {
            input = document.getElementById('step_3_input_1_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_3_input_1_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '-2') && (jawaban_2 === '1')) {
        document.getElementById("step_3_input_2_1").disabled = false;
        document.getElementById("step_3_input_2_2").disabled = false;
    }
}

function step_3_input_2() {
    let jawaban_1 = document.getElementById('step_3_input_2_1').value;
    let jawaban_2 = document.getElementById('step_3_input_2_2').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '6') {
            input = document.getElementById('step_3_input_2_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_3_input_2_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '2') {
            input = document.getElementById('step_3_input_2_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_3_input_2_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '6') && (jawaban_2 === '2')) {
        document.getElementById("step_3_input_3").disabled = false;
    }
}

function step_3_input_3() {
    let jawaban_1 = document.getElementById('step_3_input_3').value;
    if (jawaban_1 === '8') {
        input = document.getElementById('step_3_input_3');
        input.style.border = '1px solid green';
        document.getElementById("step_3_input_4").disabled = false;
    } else {
        input = document.getElementById('step_3_input_3');
        input.style.border = '1px solid red';
    }

}

function step_3_input_4() {
    let jawaban_1 = document.getElementById('step_3_input_4').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_3_input_4');
        input.style.border = '1px solid green';
        document.getElementById('step_3_hasil').style.visibility = 'visible';
        document.getElementById('step_3_hasil_2').style.visibility = 'visible';
    } else {
        input = document.getElementById('step_3_input_4');
        input.style.border = '1px solid red';
    }
}