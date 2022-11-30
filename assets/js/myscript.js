$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');
	// var action = document.getElementById("myForm").action;


    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda tidak akan bisa mengembalikannya!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
      }).then((result) => {
        if (result.value) {
			document.location.href = href;
		}
      })
});