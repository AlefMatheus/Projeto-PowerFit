$(function () {
    
    $("#form-food").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            nome: {
                required: true,
            },
            quantidade: {
                required: true,
            },
        },
            submitHandler: function (form) {
                // $(form).ajaxSubmit();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Registro realizado com sucesso!',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
    });
})