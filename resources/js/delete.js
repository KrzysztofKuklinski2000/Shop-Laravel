$(function() {
        $('.delete').click(function() {
            Swal.fire({
                title: "Czy chcesz usunąć użytkownika",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "TAK",
                cancelButtonText: "NIE",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                            method: "DELETE",
                            url: `${deleteUrl}${$(this).data('id')}`,
                        })
                        .done(function(response) {
                            window.location.reload();
                        })
                        .fail(function(data) {
                            Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status)
                        })
                }
            });
        });
    });