var loadFile = function (event) {
    var image = document.getElementById('gambar_profile');
    image.src = URL.createObjectURL(event.target.files[0]);
};

function submission(form) {
    Swal.fire({
        title: 'Apa anda yakin ?',
        text: "anda akan mengubah data diri anda",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal'
    }).then((isOkay) => {
        if (isOkay.isConfirmed) {
            form.submit();
        }
    });
    return false;
}
