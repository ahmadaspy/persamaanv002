function step_1() {
    $jawaban_1 = document.getElementById('step_1_1');
    $jawaban_2 = document.getElementById('step_1_2');
    $jawaban_3 = document.getElementById('step_1_3');
    $arr = [false, false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value.toLowerCase() === 'lumpur surga') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value.toLowerCase() === 'lempeng pisang') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
    if ($jawaban_3.value !== '') {
        if ($jawaban_3.value.toLowerCase() === 'bingka kentang') {
            $jawaban_3.style.border = '1px solid green';
            $arr[2] = true;
        } else {
            $jawaban_3.style.border = '1px solid red';
        }
    }
    if ($arr.every(element => element === true)) {
        document.getElementById('btn_2').disabled = false;
    }
}

function step_2() {
    $jawaban_1 = document.getElementById('step_2_1');
    $jawaban_2 = document.getElementById('step_2_2');
    $jawaban_3 = document.getElementById('step_2_3');
    $arr = [false, false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value === 'x+y=13000') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value === '2x+4y+z=61000') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
    if ($jawaban_3.value !== '') {
        if ($jawaban_3.value === 'x+y+z=38000') {
            $jawaban_3.style.border = '1px solid green';
            $arr[2] = true;
        } else {
            $jawaban_3.style.border = '1px solid red';
        }
    }
    if ($arr.every(element => element === true)) {
        document.getElementById('btn_3').disabled = false;
    }
}

function step_3_1() {
    $jawaban_1 = document.getElementById('step_3_1_1');
    $jawaban_2 = document.getElementById('step_3_1_2');
    $jawaban_3 = document.getElementById('step_3_1_3');
    $arr = [false, false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value === '1') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value === '3') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
    if ($jawaban_3.value !== '') {
        if ($jawaban_3.value === '23000') {
            $jawaban_3.style.border = '1px solid green';
            $arr[2] = true;
        } else {
            $jawaban_3.style.border = '1px solid red';
        }
    }
    if ($arr.every(element => element === true)) {
        document.getElementById('step_3_2_card').style.visibility = 'visible';
    }
}

function step_3_2() {
    $jawaban_1 = document.getElementById('step_3_2_1');
    $jawaban_2 = document.getElementById('step_3_2_2');
    $jawaban_3 = document.getElementById('step_3_2_3');
    $arr = [false, false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value === '-2') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value === '-10000') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
    if ($jawaban_3.value !== '') {
        if ($jawaban_3.value === '5000') {
            $jawaban_3.style.border = '1px solid green';
            $arr[2] = true;
        } else {
            $jawaban_3.style.border = '1px solid red';
        }
    }
    if ($arr.every(element => element === true)) {
        document.getElementById('step_3_3_card').style.visibility = 'visible';
    }
}

function step_3_3() {
    $jawaban_1 = document.getElementById('step_3_3_1');
    $jawaban_2 = document.getElementById('step_3_3_2');
    $arr = [false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value === '5000') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
            document.getElementById('step_3_3_hidden_1').style.visibility = 'visible';
            document.getElementById('step_3_3_hidden_2').style.visibility = 'visible';
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value === '8000') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
     if ($arr.every(element => element === true)) {
         document.getElementById('step_3_4_card').style.visibility = 'visible';
     }
}

function step_3_4() {
    $jawaban_1 = document.getElementById('step_3_4_1');
    $jawaban_2 = document.getElementById('step_3_4_2');
    $jawaban_3 = document.getElementById('step_3_4_3');
    $jawaban_4 = document.getElementById('step_3_4_4');
    $arr = [false, false, false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value === '8000') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value === '5000') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
    if ($jawaban_3.value !== '') {
        if ($jawaban_3.value === '13000') {
            $jawaban_3.style.border = '1px solid green';
            $arr[2] = true;
        } else {
            $jawaban_3.style.border = '1px solid red';
        }
    }
    if ($jawaban_4.value !== '') {
        if ($jawaban_4.value === '25000') {
            $jawaban_4.style.border = '1px solid green';
            $arr[3] = true;
        } else {
            $jawaban_4.style.border = '1px solid red';
        }
    }
    if ($arr.every(element => element === true)) {
        document.getElementById('step_3_5_card').style.visibility = 'visible';
    }
}

function step_3_5() {
    $jawaban_1 = document.getElementById('step_3_5_1');
    $jawaban_2 = document.getElementById('step_3_5_2');
    $jawaban_3 = document.getElementById('step_3_5_3');
    $arr = [false, false, false];
    if ($jawaban_1.value !== '') {
        if ($jawaban_1.value === '8000') {
            $jawaban_1.style.border = '1px solid green';
            $arr[0] = true;
        } else {
            $jawaban_1.style.border = '1px solid red';
        }
    }
    if ($jawaban_2.value !== '') {
        if ($jawaban_2.value === '5000') {
            $jawaban_2.style.border = '1px solid green';
            $arr[1] = true;
        } else {
            $jawaban_2.style.border = '1px solid red';
        }
    }
    if ($jawaban_3.value !== '') {
        if ($jawaban_3.value === '25000') {
            $jawaban_3.style.border = '1px solid green';
            $arr[2] = true;
        } else {
            $jawaban_3.style.border = '1px solid red';
        }
    }
}
