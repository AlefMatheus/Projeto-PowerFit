$(function () {
    
    $("#peso-form").submit(function (e) {
        e.preventDefault();
    }).validate({
        rules: {
            peso: {
                required: true,
                number: true
            },
            altura: {
                required: true,
                number: true
            }
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