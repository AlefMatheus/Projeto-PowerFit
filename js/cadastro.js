$(function() {

    $("#form").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
            nome: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            usuario: {
                required: true,
            },
            senha: {
                required: true,
            },
            confirmarSenha: {
                required: true,
                equalTo: "#inputSenha"
            },
        },
        submitHandler: function(form) {
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
})