// step 1
function cara_2_step_1_input_1() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_1');
    if (jawaban_1.value === '1') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('cara_2_step_1_input_2').disabled = false;
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_2() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_2').value;
    let jawaban_2 = document.getElementById('cara_2_step_1_input_4').value;
    if (jawaban_1 === 'x-2y+3z=2') {
        input = document.getElementById('cara_2_step_1_input_2');
        input.style.border = '1px solid green';
        if (jawaban_2 === 'x-y+z=2') {
            document.getElementById('cara_2_step_1_input_5_div').style.visibility = 'visible';
        }
    } else {
        input = document.getElementById('cara_2_step_1_input_2');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_3() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_3').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('cara_2_step_1_input_3');
        input.style.border = '1px solid green';
        document.getElementById('cara_2_step_1_input_4').disabled = false;

    } else {
        input = document.getElementById('cara_2_step_1_input_3');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_4() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_4').value;
    let jawaban_2 = document.getElementById('cara_2_step_1_input_2').value;
    if (jawaban_1 === 'x-y+z=2') {
        input = document.getElementById('cara_2_step_1_input_4');
        input.style.border = '1px solid green';
         if (jawaban_2 === 'x-2y+3z=2') {
             document.getElementById('cara_2_step_1_input_5_div').style.visibility = 'visible';
         }
    } else {
        input = document.getElementById('cara_2_step_1_input_4');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_5() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_5_1').value;
    let jawaban_2 = document.getElementById('cara_2_step_1_input_5_2').value;
    let jawaban_3 = document.getElementById('cara_2_step_1_input_5_3').value;

    let jawaban_4 = document.getElementById('cara_2_step_1_input_10_1').value;
    let jawaban_5 = document.getElementById('cara_2_step_1_input_10_2').value;
    let jawaban_6 = document.getElementById('cara_2_step_1_input_10_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '1') {
            input = document.getElementById('cara_2_step_1_input_5_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('cara_2_step_1_input_5_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '2') {
            input = document.getElementById('cara_2_step_1_input_5_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('cara_2_step_1_input_5_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        if (jawaban_3 === '0') {
            input = document.getElementById('cara_2_step_1_input_5_3');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('cara_2_step_1_input_5_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '1') && (jawaban_2 === '2') && (jawaban_3 === '0') && (jawaban_4 === '3') && (jawaban_5 === '3') && (jawaban_6 === '3')) {
        document.getElementById("btn_2_cara_2").disabled = false;
    }
}

function cara_2_step_1_input_6() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_6').value;
    if (jawaban_1 === '2') {
        input = document.getElementById('cara_2_step_1_input_6');
        input.style.border = '1px solid green';
        document.getElementById('cara_2_step_1_input_7').disabled = false;

    } else {
        input = document.getElementById('cara_2_step_1_input_6');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_7() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_7').value;
    let jawaban_2 = document.getElementById('cara_2_step_1_input_9').value;
    if (jawaban_1 === '2x-2y+2z=4') {
        input = document.getElementById('cara_2_step_1_input_7');
        input.style.border = '1px solid green';
        if (jawaban_2 === '2x+y-z=1') {
            document.getElementById('cara_2_step_1_input_10_div').style.visibility = 'visible';
        }
    } else {
        input = document.getElementById('cara_2_step_1_input_7');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_8() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_8').value;
    if (jawaban_1 === '1') {
        input = document.getElementById('cara_2_step_1_input_8');
        input.style.border = '1px solid green';
        document.getElementById('cara_2_step_1_input_9').disabled = false;
    } else {
        input = document.getElementById('cara_2_step_1_input_8');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_9() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_9').value;
    let jawaban_2 = document.getElementById('cara_2_step_1_input_7').value;
    if (jawaban_1 === '2x+y-z=1') {
        input = document.getElementById('cara_2_step_1_input_9');
        input.style.border = '1px solid green';
        if (jawaban_2 === '2x-2y+2z=4') {
            document.getElementById('cara_2_step_1_input_10_div').style.visibility = 'visible';
        }
    } else {
        input = document.getElementById('cara_2_step_1_input_9');
        input.style.border = '1px solid red';
    }
}
function cara_2_step_1_input_10() {
    let jawaban_1 = document.getElementById('cara_2_step_1_input_10_1').value;
    let jawaban_2 = document.getElementById('cara_2_step_1_input_10_2').value;
    let jawaban_3 = document.getElementById('cara_2_step_1_input_10_3').value;

    let jawaban_4 = document.getElementById('cara_2_step_1_input_5_1').value;
    let jawaban_5 = document.getElementById('cara_2_step_1_input_5_2').value;
    let jawaban_6 = document.getElementById('cara_2_step_1_input_5_3').value;
    if (jawaban_1 !== '') {
        if (jawaban_1 === '3') {
            input = document.getElementById('cara_2_step_1_input_10_1');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('cara_2_step_1_input_10_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        if (jawaban_2 === '3') {
            input = document.getElementById('cara_2_step_1_input_10_2');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('cara_2_step_1_input_10_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        if (jawaban_3 === '3') {
            input = document.getElementById('cara_2_step_1_input_10_3');
            input.style.border = '1px solid green';
        } else {
            input = document.getElementById('cara_2_step_1_input_10_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_4 === '1') && (jawaban_5 === '2') && (jawaban_6 === '0') && (jawaban_1 === '3') && (jawaban_2 === '3') && (jawaban_3 === '3')) {
        document.getElementById("btn_2_cara_2").disabled = false;
    }
}

// step 2

function cara_2_step_2_input_1() {
    let jawaban_1 = document.getElementById('cara_2_step_2_input_1');
    if (jawaban_1.value === '3') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('cara_2_step_2_input_2').disabled = false;
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_2_input_2() {
    let jawaban_1 = document.getElementById('cara_2_step_2_input_2');
    let jawaban_2 = document.getElementById('cara_2_step_2_input_4');
    if (jawaban_1.value === '-3y+6z=0') {
        jawaban_1.style.border = '1px solid green';
        if (jawaban_2.value === '-3y_3z=3') {
            document.getElementById('cara_2_step_2_input_5_div').style.visibility = 'visible';
        }
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_2_input_3() {
    let jawaban_1 = document.getElementById('cara_2_step_2_input_3');
    if (jawaban_1.value === '1') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('cara_2_step_2_input_4').disabled = false;
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_2_input_4() {
    let jawaban_1 = document.getElementById('cara_2_step_2_input_4');
    let jawaban_2 = document.getElementById('cara_2_step_2_input_2');
    if (jawaban_1.value === '-3y+3z=3') {
        jawaban_1.style.border = '1px solid green';
        if (jawaban_2.value === '-3y+6z=0') {
            document.getElementById('cara_2_step_2_input_5_div').style.visibility = 'visible';
        }
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_2_input_5() {
    let jawaban_1 = document.getElementById('cara_2_step_2_input_5_1');
    let jawaban_2 = document.getElementById('cara_2_step_2_input_5_2');

    if (jawaban_1.value !== '') {
        if (jawaban_1.value === '3') {
            jawaban_1.style.border = '1px solid green';
        } else {
            jawaban_1.style.border = '1px solid red';
        }
    }
    if (jawaban_2.value !== '') {
        if (jawaban_2.value === '-3') {
            jawaban_2.style.border = '1px solid green';
        } else {
            jawaban_2.style.border = '1px solid red';
        }
    }
    if ((jawaban_1.value === '3') && (jawaban_2.value === '-3')) {
        document.getElementById("cara_2_step_2_input_6_div").style.visibility = 'visible';
    }
}
function cara_2_step_2_input_6() {
    let jawaban_1 = document.getElementById('cara_2_step_2_input_6');
    if (jawaban_1.value === '-1') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('btn_2_cara_3').disabled = false;
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}

// step 3

function cara_2_step_3_input_1() {
    let jawaban_1 = document.getElementById('cara_2_step_3_input_1');
    if (jawaban_1.value === '-1') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('cara_2_step_3_input_2_div').style.visibility = 'visible';
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_3_input_2() {
    let jawaban_1 = document.getElementById('cara_2_step_3_input_2');
    if (jawaban_1.value === '2') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('cara_2_step_3_input_3_div').style.visibility = 'visible';
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_3_input_3() {
    let jawaban_1 = document.getElementById('cara_2_step_3_input_3');
    if (jawaban_1.value === '-2') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('btn_4_cara_3').disabled = false;
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}

// step 4

function cara_2_step_4_input_1() {
    let jawaban_1 = document.getElementById('cara_2_step_4_input_1_1');
    let jawaban_2 = document.getElementById('cara_2_step_4_input_1_2');

    if (jawaban_1.value !== '') {
        if (jawaban_1.value === '-2') {
            jawaban_1.style.border = '1px solid green';
        } else {
            jawaban_1.style.border = '1px solid red';
        }
    }
    if (jawaban_2.value !== '') {
        if (jawaban_2.value === '-1') {
            jawaban_2.style.border = '1px solid green';
        } else {
            jawaban_2.style.border = '1px solid red';
        }
    }
    if ((jawaban_1.value === '-2') && (jawaban_2.value === '-1')) {
        document.getElementById("cara_2_step_4_input_2_div").style.visibility = 'visible';
    }
}
function cara_2_step_4_input_2() {
   let jawaban_1 = document.getElementById('cara_2_step_4_input_2_1');
   let jawaban_2 = document.getElementById('cara_2_step_4_input_2_2');

   if (jawaban_1.value !== '') {
       if (jawaban_1.value === '4') {
           jawaban_1.style.border = '1px solid green';
       } else {
           jawaban_1.style.border = '1px solid red';
       }
   }
   if (jawaban_2.value !== '') {
       if (jawaban_2.value === '3') {
           jawaban_2.style.border = '1px solid green';
       } else {
           jawaban_2.style.border = '1px solid red';
       }
   }
   if ((jawaban_1.value === '4') && (jawaban_2.value === '3')) {
       document.getElementById("cara_2_step_4_input_3_div").style.visibility = 'visible';
   }
}
function cara_2_step_4_input_3() {
    let jawaban_1 = document.getElementById('cara_2_step_4_input_3');
    if (jawaban_1.value === '1') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('cara_2_step_4_input_4_div').style.visibility = 'visible';
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
function cara_2_step_4_input_4() {
    let jawaban_1 = document.getElementById('cara_2_step_4_input_4');
    if (jawaban_1.value === '1') {
        jawaban_1.style.border = '1px solid green';
        document.getElementById('card_penjelasan').style.visibility = 'visible';
    } else {
        jawaban_1.style.border = '1px solid red';
    }
}
