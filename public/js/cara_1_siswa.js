//step 1
function cara_1_step_1_btn() {
    document.getElementById("btn-pers1").className = "btn btn-danger";
    document.getElementById("btn-pers2").className = "btn btn-success";
    document.getElementById("btn-pers3").className = "btn btn-danger";
    document.getElementById("penjelasan_1").style.visibility = "visible";
    document.getElementById("btn_2").disabled = false;
}
//step 2
function cara_1_step_2_input_1() {
    let jawaban_1 = document.getElementById('step_2_input_1').value;
    if (jawaban_1 === 'y-z+2') {
        input = document.getElementById('step_2_input_1');
        input.style.border = '1px solid green';
        document.getElementById('step_2_input_2').style.visibility = 'visible';

    } else {
        input = document.getElementById('step_2_input_1');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_2_input_2() {
    let jawaban_1 = document.getElementById('step_2_input_2_1').value;
    let jawaban_2 = document.getElementById('step_2_input_2_2').value;
    let jawaban_3 = document.getElementById('step_2_input_2_3').value;

    let jawaban_4 = document.getElementById('step_2_input_5_1').value;
    let jawaban_5 = document.getElementById('step_2_input_5_2').value;
    let jawaban_6 = document.getElementById('step_2_input_5_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '1') {
            input = document.getElementById('step_2_input_2_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_2_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '2') {
            input = document.getElementById('step_2_input_2_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_2_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        if (jawaban_3 === '0') {
            input = document.getElementById('step_2_input_2_3');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_2_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '1') && (jawaban_2 === '2') && (jawaban_3 === '0') && (jawaban_4 === '3') && (jawaban_5 === '3') && (jawaban_6 === '3')) {
        document.getElementById("btn_3").disabled = false;
    }
}
function cara_1_step_2_input_3() {
    let jawaban_1 = document.getElementById('step_2_input_3').value;
    if (jawaban_1 === 'y-z+2') {
        input = document.getElementById('step_2_input_3');
        input.style.border = '1px solid green';
        document.getElementById('step_2_input_4').style.visibility = 'visible';

    } else {
        input = document.getElementById('step_2_input_3');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_2_input_4() {
    let jawaban_1 = document.getElementById('step_2_input_4_1').value;
    let jawaban_2 = document.getElementById('step_2_input_4_2').value;
    let jawaban_3 = document.getElementById('step_2_input_4_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '2') {
            input = document.getElementById('step_2_input_4_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_4_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '2') {
            input = document.getElementById('step_2_input_4_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_4_2');
            input.style.border = '1px solid red';
        }
    }
     if (jawaban_3 !== '') {
         if (jawaban_3 === '4') {
             input = document.getElementById('step_2_input_4_3');
             input.style.border = '1px solid green';
         } else {
             input = document.getElementById('step_2_input_4_3');
             input.style.border = '1px solid red';
         }
     }
     if ((jawaban_1 === '2') && (jawaban_2 === '2') && (jawaban_3 === '4')) {
         document.getElementById("step_2_input_5").style.visibility = 'visible';
     }

}
function cara_1_step_2_input_5() {
    let jawaban_1 = document.getElementById('step_2_input_5_1').value;
    let jawaban_2 = document.getElementById('step_2_input_5_2').value;
    let jawaban_3 = document.getElementById('step_2_input_5_3').value;

    let jawaban_4 = document.getElementById('step_2_input_2_1').value;
    let jawaban_5 = document.getElementById('step_2_input_2_2').value;
    let jawaban_6 = document.getElementById('step_2_input_2_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '3') {
            input = document.getElementById('step_2_input_5_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_5_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '3') {
            input = document.getElementById('step_2_input_5_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_5_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        if (jawaban_3 === '3') {
            input = document.getElementById('step_2_input_5_3');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_2_input_5_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_4 === '1') && (jawaban_5 === '2') && (jawaban_6 === '0') && (jawaban_1 === '3') && (jawaban_2 === '3') && (jawaban_3 === '3')) {
        document.getElementById("btn_3").disabled = false;
    }
}
//step 3
function cara_1_step_3_input_1() {
    let jawaban_1 = document.getElementById('step_3_input_1').value;
    if (jawaban_1 === '3') {
        input = document.getElementById('step_3_input_1');
        input.style.border = '1px solid green';
        document.getElementById('step_3_input_2').disabled = false;
    } else {
        input = document.getElementById('step_3_input_1');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_3_input_2() {
    let jawaban_1 = document.getElementById('step_3_input_2').value;
    let jawaban_2 = document.getElementById('step_3_input_4').value;
    if (jawaban_1 === '-3y+6z=0') {
        input = document.getElementById('step_3_input_2');
        input.style.border = '1px solid green';

    } else {
        input = document.getElementById('step_3_input_2');
        input.style.border = '1px solid red';
    }
    if ((jawaban_1 === '-3y+6z=0') && (jawaban_2 === '3y-3z=-3')) {
        document.getElementById("step_3_input_5").style.visibility = 'visible';
    }
}
function cara_1_step_3_input_3() {
    let jawaban_1 = document.getElementById('step_3_input_3').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_3_input_3');
        input.style.border = '1px solid green';
        document.getElementById('step_3_input_4').disabled = false;
    } else {
        input = document.getElementById('step_3_input_3');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_3_input_4() {
    let jawaban_1 = document.getElementById('step_3_input_4').value;
    let jawaban_2 = document.getElementById('step_3_input_2').value;
    if (jawaban_1 === '3y-3z=-3') {
        input = document.getElementById('step_3_input_4');
        input.style.border = '1px solid green';

    } else {
        input = document.getElementById('step_3_input_4');
        input.style.border = '1px solid red';
    }
    if ((jawaban_2 === '-3y+6z=0') && (jawaban_1 === '3y-3z=-3')) {
        document.getElementById("step_3_input_5").style.visibility = 'visible';
    }
}
function cara_1_step_3_input_5() {
    let jawaban_1 = document.getElementById('step_3_input_5_1').value;
    let jawaban_2 = document.getElementById('step_3_input_5_2').value;

    if (jawaban_1 !== '') {
        if (jawaban_1 === '3') {
            input = document.getElementById('step_3_input_5_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_3_input_5_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '3') {
            input = document.getElementById('step_3_input_5_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_3_input_5_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '3') && (jawaban_2 === '3')) {
        document.getElementById("step_3_input_6").style.visibility = 'visible';
    }
}
function cara_1_step_3_input_6() {
    let jawaban_1 = document.getElementById('step_3_input_6_1').value;
    if (jawaban_1 === '-1') {
        input = document.getElementById('step_3_input_6_1');
        input.style.border = '1px solid green';
        document.getElementById('btn_4').disabled = false;
    } else {
        input = document.getElementById('step_3_input_6_1');
        input.style.border = '1px solid red';
    }
}
// step 4
function cara_1_step_4_input_1() {
    let jawaban_1 = document.getElementById('step_4_input_1').value;
    if (jawaban_1 === '-1') {
        input = document.getElementById('step_4_input_1');
        input.style.border = '1px solid green';
        document.getElementById('cara_1_step_4_input_2').style.visibility = 'visible';
    } else {
        input = document.getElementById('step_4_input_1');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_4_input_2() {
    let jawaban_1 = document.getElementById('step_4_input_2').value;
    if (jawaban_1 === '2') {
        input = document.getElementById('step_4_input_2');
        input.style.border = '1px solid green';
         document.getElementById('cara_1_step_4_input_3').style.visibility = 'visible';
    } else {
        input = document.getElementById('step_4_input_2');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_4_input_3() {
    let jawaban_1 = document.getElementById('step_4_input_3').value;
    if (jawaban_1 === '2') {
        input = document.getElementById('step_4_input_3');
        input.style.border = '1px solid green';
        document.getElementById('cara_1_step_4_input_4').style.visibility = 'visible';
    } else {
        input = document.getElementById('step_4_input_3');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_4_input_4() {
    let jawaban_1 = document.getElementById('step_4_input_4').value;
    if (jawaban_1 === '-2') {
        input = document.getElementById('step_4_input_4');
        input.style.border = '1px solid green';
        document.getElementById('btn_5').disabled = false;
    } else {
        input = document.getElementById('step_4_input_4');
        input.style.border = '1px solid red';
    }
}
// step 5
function cara_1_step_5_input_1() {
    let jawaban_1 = document.getElementById('step_5_input_1_1').value;
    let jawaban_2 = document.getElementById('step_5_input_1_2').value;

    if (jawaban_1 !== '') {
        if (jawaban_1 === '-2') {
            input = document.getElementById('step_5_input_1_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_5_input_1_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '-1') {
            input = document.getElementById('step_5_input_1_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_5_input_1_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '-2') && (jawaban_2 === '-1')) {
        document.getElementById("cara_1_step_5_input_2").style.visibility = 'visible';
    }

}
function cara_1_step_5_input_2() {
    let jawaban_1 = document.getElementById('step_5_input_2_1').value;
    let jawaban_2 = document.getElementById('step_5_input_2_2').value;

    if (jawaban_1 !== '') {
        if (jawaban_1 === '4') {
            input = document.getElementById('step_5_input_2_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_5_input_2_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '3') {
            input = document.getElementById('step_5_input_2_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('step_5_input_2_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '4') && (jawaban_2 === '3')) {
        document.getElementById("cara_1_step_5_input_3").style.visibility = 'visible';
    }
}
function cara_1_step_5_input_3() {
    let jawaban_1 = document.getElementById('step_5_input_3').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_5_input_3');
        input.style.border = '1px solid green';
        document.getElementById("cara_1_step_5_input_4").style.visibility = 'visible';
    } else {
        input = document.getElementById('step_5_input_3');
        input.style.border = '1px solid red';
    }
}
function cara_1_step_5_input_4() {
    let jawaban_1 = document.getElementById('step_5_input_4').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('step_5_input_4');
        input.style.border = '1px solid green';
        document.getElementById("step_5_hasil").style.visibility = 'visible';
        document.getElementById("step_5_hasil_2").style.visibility = 'visible';
    } else {
        input = document.getElementById('step_5_input_4');
        input.style.border = '1px solid red';
    }
}
