function persFunct() {
    // document.getElementById("pers1").classList.replace("btn btn-success");
    document.getElementById("btn-pers1").className = "btn btn-success";
    document.getElementById("btn-pers2").className = "btn btn-danger";
    document.getElementById("btn-pers3").className = "btn btn-danger";
    document.getElementById("penjelasan_1").style.visibility = "visible";
    document.getElementById("penjelasan_1_card").style.visibility = "visible";
    document.getElementById("btn_2").disabled = false;
}

function persFunct_2() {
    document.getElementById("btn-pers4").className = "btn btn-danger";
    document.getElementById("btn-pers5").className = "btn btn-success";
    document.getElementById("penjelasan_persamaan4dan5").style.visibility = "visible";
    document.getElementById("Cat_3_step2").style.visibility = "visible";

}
function jawaban_x_1_tahap_2(value) {
    var x = value.replace(/\s/g, '');
    const arr = [];
    console.log(x);
    // var resurlt = x.match(/eek/g);
    if (x.match(/\+9/) || x.match(/9/)) {
        arr[0] = true;
    } else {
        arr[0] = false;
    }
    if (x.match('-9')) {
        arr[0] = false;
    }
    if (x.match('3y') || x.match(/\+3y/)) {
        arr[1] = true;
    } else {
        arr[1] = false;
    }
    if (x.match('-3y')) {
        arr[1] = false;
    }
    if (x.match('-2z')) {
        arr[2] = true;
    } else {
        arr[2] = false;
    }
    if (arr.includes(false)) {
        console.log('salah ada');
        input = document.getElementById('jawaban_x_1');
        input.style.border = '1px solid red';


    } else {
        console.log('benar');
        input = document.getElementById('jawaban_x_1');
        input.style.border = '1px solid green';
        document.getElementById("step_3").style.visibility = "visible";
    }
}

function jawaban_1_tahap_3() {
    let jawaban_1 = document.getElementById('jawaban_3_1').value;
    let jawaban_2 = document.getElementById('jawaban_3_2').value;
    let jawaban_3 = document.getElementById('jawaban_3_3').value;
    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '6') {
            arr[0] = true;
            input = document.getElementById('jawaban_3_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('jawaban_3_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        console.log(jawaban_2);
        if (jawaban_2 === '4') {
            arr[1] = true;
            input = document.getElementById('jawaban_3_2');
            input.style.border = '1px solid green';
        } else {
            arr[1] = false;
            input = document.getElementById('jawaban_3_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        console.log(jawaban_3);
        if (jawaban_3 === '18') {
            arr[2] = true;
            input = document.getElementById('jawaban_3_3');
            input.style.border = '1px solid green';
        } else {
            arr[2] = false;
            input = document.getElementById('jawaban_3_3');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '6') && (jawaban_2 === '4') && (jawaban_3 === '18')) {
        document.getElementById('step_4').style.visibility = 'visible';
        document.getElementById('step_5').style.visibility = 'visible';
    }
}
function jawaban_1_tahap_5(value) {
    var x = value.replace(/\s/g, '');
    const arr = [];
    console.log(x);
    // var resurlt = x.match(/eek/g);
    if (x.match(/\+10y/) || x.match(/10y/)) {
        arr[0] = true;
    } else {
        arr[0] = false;
    }
    if (x.match('-10y')) {
        arr[0] = false;
    }
    if (x.match('-7z')) {
        arr[1] = true;
    } else {
        arr[1] = false;
    }
    if (x.match('=-27')) {
        arr[2] = true;
    } else {
        arr[2] = false;
    }
    if (arr.includes(false)) {
        console.log('salah ada');
        input = document.getElementById('jawaban_5');
        input.style.border = '1px solid red';


    } else {
        console.log('benar');
        input = document.getElementById('jawaban_5');
        input.style.border = '1px solid green';

    }
}
function jawaban_2_1(value){
    var x = value.replace(/\s/g, '');
    const arr = [];
    console.log(x);
    // var resurlt = x.match(/eek/g);
    if (x.match(/\+9/) || x.match(/9/)) {
        arr[0] = true;
    } else {
        arr[0] = false;
    }
    if (x.match('-9')) {
        arr[0] = false;
    }
    if (x.match('3y') || x.match(/\+3y/)) {
        arr[1] = true;
    } else {
        arr[1] = false;
    }
    if (x.match('-3y')) {
        arr[1] = false;
    }
    if (x.match('-2z')) {
        arr[2] = true;
    } else {
        arr[2] = false;
    }
    if (arr.includes(false)) {
        console.log('salah ada');
        input = document.getElementById('jawaban_2_1');
        input.style.border = '1px solid red';


    } else {
        console.log('benar');
        input = document.getElementById('jawaban_2_1');
        input.style.border = '1px solid green';
        document.getElementById("jawaban_2_step_3").style.visibility = "visible";
    }
}
function jawaban_2_2(){
    let jawaban_1 = document.getElementById('jawaban_2_2').value;
    let jawaban_2 = document.getElementById('jawaban_2_3').value;
    let jawaban_3 = document.getElementById('jawaban_2_4').value;
    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '9') {
            arr[0] = true;
            input = document.getElementById('jawaban_2_2');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('jawaban_2_2');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        console.log(jawaban_2);
        if (jawaban_2 === '6') {
            arr[1] = true;
            input = document.getElementById('jawaban_2_3');
            input.style.border = '1px solid green';
        } else {
            arr[1] = false;
            input = document.getElementById('jawaban_2_3');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_3 !== '') {
        console.log(jawaban_3);
        if (jawaban_3 === '27') {
            arr[2] = true;
            input = document.getElementById('jawaban_2_4');
            input.style.border = '1px solid green';
        } else {
            arr[2] = false;
            input = document.getElementById('jawaban_2_4');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '9') && (jawaban_2 === '6') && (jawaban_3 === '27')) {
        document.getElementById('jawaban_2_step_4').style.visibility = 'visible';
        document.getElementById('jawaban_2_step_5').style.visibility = 'visible';
    }
}
function jawaban_2_5(value){
    var x = value.replace(/\s/g, '');
    const arr = [];
    console.log(x);
    // var resurlt = x.match(/eek/g);
    if (x.match(/\+7y/) || x.match(/7y/)) {
        arr[0] = true;
    } else {
        arr[0] = false;
    }
    if (x.match('-7y')) {
        arr[0] = false;
    }
    if (x.match('-z')) {
        arr[1] = true;
    } else {
        arr[1] = false;
    }
    if (x.match('=-15')) {
        arr[2] = true;
    } else {
        arr[2] = false;
    }
    if (arr.includes(false)) {
        console.log('salah ada');
        input = document.getElementById('jawaban_2_5');
        input.style.border = '1px solid red';
    } else {
        console.log('benar');
        input = document.getElementById('jawaban_2_5');
        input.style.border = '1px solid green';
        document.getElementById("btn_3").disabled = false;
    }
}
function step_2_persamaan_4(value) {
    let x = value.replace(/\s/g, '');
    const arr = [];
    console.log(x);
    if (x === "15+7y" || x === "7y+15") {
        arr[0] = true;
    } else {
        arr[0] = false;
    }
    if (arr.includes(false)) {
        input = document.getElementById('step_2_persamaan(4)_input');
        input.style.border = '1px solid red';
    } else {
        input = document.getElementById('step_2_persamaan(4)_input');
        input.style.border = '1px solid green';
        document.getElementById("step_3_persamaan(4)").style.visibility = "visible";

    }
}
function step_3_persamaan_4() {
    let jawaban_1 = document.getElementById('step_3_persamaan(4)_1').value;
    let jawaban_2 = document.getElementById('step_3_persamaan(4)_2').value;
    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '49') {
            arr[0] = true;
            input = document.getElementById('step_3_persamaan(4)_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('step_3_persamaan(4)_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        console.log(jawaban_2);
        if (jawaban_2 === '105') {
            arr[1] = true;
            input = document.getElementById('step_3_persamaan(4)_2');
            input.style.border = '1px solid green';
        } else {
            arr[1] = false;
            input = document.getElementById('step_3_persamaan(4)_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '49') && (jawaban_2 === '105')) {
        document.getElementById('step_4_persamaan(4)').style.visibility = 'visible';
        document.getElementById('step_5_persamaan(4)').style.visibility = 'visible';
    }
}
function step_5_persamaan_4() {
    let jawaban_1 = document.getElementById('step_5_persamaan(4)_1').value;
    let jawaban_2 = document.getElementById('step_5_persamaan(4)_2').value;
    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '39') {
            arr[0] = true;
            input = document.getElementById('step_5_persamaan(4)_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('step_5_persamaan(4)_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        console.log(jawaban_2);
        if (jawaban_2 === '78') {
            arr[1] = true;
            input = document.getElementById('step_5_persamaan(4)_2');
            input.style.border = '1px solid green';
        } else {
            arr[1] = false;
            input = document.getElementById('step_5_persamaan(4)_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '39') && (jawaban_2 === '78')) {
        document.getElementById('step_6_persamaan(4)').style.visibility = 'visible';
        document.getElementById('step_7_persamaan(4)').style.visibility = 'visible';
    }
}
function step_7_persamaan_4() {
    let jawaban_1 = document.getElementById('step_7_persamaan(4)_1').value;
    const arr = [];
    if (jawaban_1 !== '') {
        if (jawaban_1 === '2') {
            arr[0] = true;
            input = document.getElementById('step_7_persamaan(4)_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('step_7_persamaan(4)_1');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '2')) {
        document.getElementById('Cat_3_step3').style.visibility = 'visible';

    }
}
function step_2_persamaan_5_1() {
    let jawaban_1 = document.getElementById('step_2_persamaan_5_1').value;
    const arr = [];
    if (jawaban_1 === '-2') {
        arr[0] = true;
        input = document.getElementById('step_2_persamaan_5_1');
        input.style.border = '1px solid green';
        document.getElementById('step_3_persamaan_5').style.visibility = 'visible';

    } else {
        arr[0] = false;
        input = document.getElementById('step_2_persamaan_5_1');
        input.style.border = '1px solid red';
    }
}
function step_3_persamaan_5_1() {
    let jawaban_1 = document.getElementById('step_3_persamaan_5_1').value;
    const arr = [];
    if (jawaban_1 === '14') {
        arr[0] = true;
        input = document.getElementById('step_3_persamaan_5_1');
        input.style.border = '1px solid green';
        document.getElementById('step_4_persamaan_5').style.visibility = 'visible';
    } else {
        arr[0] = false;
        input = document.getElementById('step_3_persamaan_5_1');
        input.style.border = '1px solid red';
    }
}
function step_4_persamaan_5_1() {
    let jawaban_1 = document.getElementById('step_4_persamaan_5_1').value;
    const arr = [];
    if (jawaban_1 === '1') {
        arr[0] = true;
        input = document.getElementById('step_4_persamaan_5_1');
        input.style.border = '1px solid green';
        document.getElementById("btn_4").disabled = false;
    } else {
        arr[0] = false;
        input = document.getElementById('step_4_persamaan_5_1');
        input.style.border = '1px solid red';
    }
}
function cat_4_step_2_input_1() {
    let jawaban_1 = document.getElementById('cat_4_step_2_input_1').value;
    let jawaban_2 = document.getElementById('cat_4_step_2_input_2').value;
    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '-2') {
            arr[0] = true;
            input = document.getElementById('cat_4_step_2_input_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('cat_4_step_2_input_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        console.log(jawaban_2);
        if (jawaban_2 === '1') {
            arr[1] = true;
            input = document.getElementById('cat_4_step_2_input_2');
            input.style.border = '1px solid green';
        } else {
            arr[1] = false;
            input = document.getElementById('cat_4_step_2_input_2');
            input.style.border = '1px solid red';
        }
    }
    if ((jawaban_1 === '-2') && (jawaban_2 === '1')) {
        document.getElementById('cat_4_step_3').style.visibility = 'visible';
    }
}
function cat_4_step_3_input_1() {
    let jawaban_1 = document.getElementById('cat_4_step_3_input_1').value;
    let jawaban_2 = document.getElementById('cat_4_step_3_input_2').value;
    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '6') {
            arr[0] = true;
            input = document.getElementById('cat_4_step_3_input_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('cat_4_step_3_input_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_2 !== '') {
        console.log(jawaban_2);
        if (jawaban_2 === '2') {
            arr[1] = true;
            input = document.getElementById('cat_4_step_3_input_2');
            input.style.border = '1px solid green';
        } else {
            arr[1] = false;
            input = document.getElementById('cat_4_step_3_input_2');
            input.style.border = '1px solid red';
        }
    }
     if ((jawaban_1 === '6') && (jawaban_2 === '2')) {
         document.getElementById('cat_4_step_4').style.visibility = 'visible';
     }
}
function cat_4_step_4_input_1() {
     let jawaban_1 = document.getElementById('cat_4_step_4_input_1').value;

     const arr = [];
     if (jawaban_1 !== '') {
         console.log(jawaban_1);
         if (jawaban_1 === '8') {
             arr[0] = true;
             input = document.getElementById('cat_4_step_4_input_1');
             input.style.border = '1px solid green';
         } else {
             arr[0] = false;
             input = document.getElementById('cat_4_step_4_input_1');
             input.style.border = '1px solid red';
         }
     }
     if (jawaban_1 === '8') {
         document.getElementById('cat_4_step_5').style.visibility = 'visible';
         document.getElementById('cat_4_step_6').style.visibility = 'visible';
     }
}
function cat_4_step_6_input_1() {
    let jawaban_1 = document.getElementById('cat_4_step_6_input_1').value;

    const arr = [];
    if (jawaban_1 !== '') {
        console.log(jawaban_1);
        if (jawaban_1 === '1') {
            arr[0] = true;
            input = document.getElementById('cat_4_step_6_input_1');
            input.style.border = '1px solid green';
        } else {
            arr[0] = false;
            input = document.getElementById('cat_4_step_6_input_1');
            input.style.border = '1px solid red';
        }
    }
    if (jawaban_1 === '1') {
        document.getElementById('cat_4_card_2').style.visibility = 'visible';
        document.getElementById('cat_4_card_2_2').style.visibility = 'visible';
    }
}
