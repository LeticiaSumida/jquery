$(function(){
    $(document).on('submit', 'form[name="form_cliente"]', function () {
        var forma = $(this);
        var dados = forma.serialize();
        $.ajax({
            url: '../../model/insert.php',
            data: dados,
            dataType: 'json',
            type: 'POST',
            beforeSend: function() {
                $('.msg').text('');
                forma.find('.load').fadeIn("fast");
            },
            success: function (resposta) {
                if (resposta.error === 'success'){
                    $(location).attr('href', 'select.php');
                } else {
                    alert(resposta.msg);
                }

            },
            complete: function (){
                forma.find('.load').fadeOut("fast");
            }
        });
        return false;
    });

    $(document).on('click', '.deleteClientes', function () {
        var forma = $(this);
        var cli_id = forma.attr('cli_id');
        dados = {cli_id: cli_id}

        $.ajax({
            url: '../../model/delete.php',
            data: dados,
            dataType: 'json',
            type: 'POST',
            beforeSend: function() {
                $('.load').fadeIn("fast");
            },
            success: function (resposta) {
                if (resposta.error === 'success'){
                    $(location).attr('href', 'select.php');
                } else {
                    alert(resposta.msg);
                }

            },
            complete: function (){
                $('.load').fadeOut("fast");
            }
        });
        return false;
    });

    $(document).on('submit', 'form[name="form_update_cliente"]', function () {
        var forma = $(this);
        var dados = forma.serialize();
        $.ajax({
            url: '../../model/update.php',
            data: dados,
            dataType: 'json',
            type: 'POST',
            beforeSend: function() {
                forma.find('.load').fadeIn("fast");
            },
            success: function (resposta) {
                if (resposta.error === 'success'){
                    $(location).attr('href', 'select.php');
                } else {
                    alert(resposta.msg);
                }
            },
            complete: function (){
                forma.find('.load').fadeOut("fast");
            }
        });
        return false;
    });
});