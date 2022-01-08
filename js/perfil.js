$(function () {

    function validateCPF(strCPF) {
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return false;

        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10))) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11))) return false;
        return true;
    }

    jQuery.validator.addMethod("validarCPF", (value, element) => {
        if (validateCPF(value)) {
            return true
        } else {
            return false
        }
    }, "CPF Invalido")

    $("#form-perfil").submit(function (e) {
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
            cpf: {
                required: true,
                validarCPF: true
            },
            idade: {
                required: true,
                number: true
            },
            genero: {
                required: true,
            },
            endereco: {
                required: true,
            },
        },
        submitHandler: function (form) {
            // $(form).ajaxSubmit();
            Swal.fire({
                title: 'Você quer mesmo salvar essas mudanças?',
                showCancelButton: true,
                confirmButtonText: 'Salvar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire('Salvo com sucesso!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('As mudanças não foram salvas', '', 'info')
                }
            })
        }
    });
})