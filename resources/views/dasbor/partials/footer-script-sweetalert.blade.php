<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        event.preventDefault();
        swal.fire({
            title: 'Anda Yakin?',
            text: "Data akan terhapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus Permanen!'
        })
        .then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });

</script>