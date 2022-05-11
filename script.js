$(document).ready(()=> {
    $('#enviar').on('click', ()=> {

        let email = $('#email').val()
        let senha = $('#senha').val()
        $.ajax({
            type: 'GET',
            url: 'verificacao.php',
            data: `control=0&email=${email}&senha=${senha}`,
            dataType: 'json',
            success: dados => {
                console.log(dados)
                if (dados.condicao == 1) {
                    window.location.href = `sucesso.php?validade=1&login=${email}`
                } else {
                    $('#email').addClass('invalido')
                    $('#senha').addClass('invalido')
                    $('#msg-email').html('- Email ou senha inválidos')
                }
               },
           error: erro => { console.log(erro)}
        })
    })

    $('#bt-cadastro').on('click', ()=> {

        let email = $('#email-cadastro').val()
        let senha1 = $('#senha-cadastro1').val()
        let senha2 = $('#senha-cadastro2').val()

        if (senha1 == senha2) {
            $.ajax({
                type: 'GET',
                url: 'verificacao.php',
                data: `control=1&email_cad=${email}&senha1=${senha1}`,
                dataType: 'json',
                success: dados => {
                    if (dados.email_cadastrado == 1) {
                        $('#notifica_email').html('Email já cadastrado!')
                    } else {
                        window.location.href = 'sucesso_cadastro.html'
                    }
                },
                error: erro => { console.log(erro)}
            })
        } else {
            $('#notificacao').html('Por favor repita a senha corretamente')
        }
    })
})