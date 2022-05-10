$(document).ready(()=> {
    $('#enviar').on('click', ()=> {

        let email = $('#email').val()
        let senha = $('#senha').val()
        $.ajax({
            type: 'GET',
            url: 'verificacao.php',
            data: `email=${email}&senha=${senha}`,
            dataType: 'json',
            success: dados => {
                console.log(dados)
                if (dados.condicao == 1) {
                    window.location.href = 'sucesso.html'
                } else {
                    $('#email').addClass('invalido')
                    $('#senha').addClass('invalido')
                    $('#msg-email').html('- Email ou senha inválidos')
                }
               },
           error: erro => { console.log(erro)}
        })
    })
})