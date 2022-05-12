function nanya(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    // console.log(urlToRedirect); // verify if this is the right URL
    Swal.fire({
            title: "Apakah anda yakin ?",
            text: "Akun akan di hapus dan tidak bisa di pulihkan",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal'
        })
        .then((willDelete) => {
            // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
            if (willDelete.isConfirmed ) {
                window.location.href = urlToRedirect;
            }
        });
}
