$(document).ready(function(){
    $("#login_usuario").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            senha: {
                required: true,
                rangelength: [8, 15]
            }
        },
        messages: {
            email: {
                required: "Campo email obrigatório",
                email: "Informe um endereço de email valido"
            },
            senha: {
                required: "Campo senha obrigatório",
                rangelength: "Informe uma senha entre 8 e 15 caracteres"
            }
        }
    });
})