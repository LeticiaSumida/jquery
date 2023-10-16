$(function () {
    $(document).on('submit', 'form[name="form_login"]', function (e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        $("#botaoEnviar").prop("disabled", true);

        var forma = $(this);
        var dados = forma.serialize();

        $.ajax({
            url: '../model/validar.php',
            data: dados,
            dataType: 'json',
            type: 'POST',
            beforeSend: function () {
                $('.msg').text('');
                forma.find('.load').fadeIn("fast");
            },
            success: function (resposta) {
                if (resposta.error === 'success') {
                    window.location.href = '../view/cliente/home.php';
                } else {
                    alert(resposta.msg);
                    $("#botaoEnviar").prop("disabled", false);
                }
            },
            error: function (xhr, status, error) {
                console.log('Erro na solicitação AJAX:', error);
                $("#botaoEnviar").prop("disabled", false);
            },
            complete: function () {
                forma.find('.load').fadeOut("fast");
                $("#botaoEnviar").prop("disabled", false);
            }
        });
    });
});
