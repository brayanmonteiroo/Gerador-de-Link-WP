$(document).ready(function () {
    $('#gerar-link').click(function () {
        const numero = $('#numero-whatsapp').val().replace(/\D/g, '').trim();
        const mensagem = encodeURIComponent($('#mensagem').val().trim());
        const link = 'https://api.whatsapp.com/send?phone=${numero}&text=${mensagem}';
        $('#link-gerado')[0].value = link;
    });

    $('form').on('submit', function (e) {
        e.preventDefault(); // previne o envio do formulário

        const numero_whatsapp = $('#numero-whatsapp').val().replace(/\D/g, '').trim();
        const mensagem = encodeURIComponent($('#mensagem').val().trim());

        // Verificar se o número de telefone é válido
        if (numero_whatsapp.length < 10) {
            alert('Número de telefone inválido.');
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'GeradorDeLinkWP.php',
            data: $(this).serialize(),
        }).done(function (data) {
            $('#link-gerado')[0].value = data.trim();
        });
    });

    $('#copiar-link').click(function () {
        // Seleciona o campo de texto com o link gerado
        const linkGerado = $('#link-gerado')[0];

        // Copia o texto do campo de texto
        if (document.queryCommandSupported('copy')) {
            linkGerado.select();
            document.execCommand('copy');

            // Exibe a mensagem de link copiado
            const linkCopiado = $('#link-copiado')[0];
            linkCopiado.textContent = linkGerado.value;
            $('.alert-success').removeClass('d-none');
        }
    });


    document.getElementById("copiar-link").addEventListener("click", function () {
        // Copiar o link para a área de transferência
        var link = document.getElementById("link-gerado");
        link.select();
        document.execCommand("copy");

        // Exibir a mensagem de sucesso
        var mensagem = document.getElementById("copiar-link-mensagem");
        mensagem.style.display = "block";
        setTimeout(function () {
            mensagem.style.display = "none";
        }, 3000);
    });

});
