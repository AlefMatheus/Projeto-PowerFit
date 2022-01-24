$(function () {
    $('#activity-duration').mask("00h:00")
    $('#activity-date').mask("00/00/0000")
});

    /*$("#atividade-form").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            nome: {
                required: true,
            },
            tempo: {
                required: true,
            },
            data: {
                required: true,
                date: true
            },
        },
        submitHandler: function (form) {
            Swal.fire({
                heightAuto: false,
                position: 'center',
                icon: 'success',
                title: 'Registro realizado com sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                $('#name').val('')
                $('#activity-duration').val('')
                $('#activity-date').val('')
            })
        }
    });
})*/