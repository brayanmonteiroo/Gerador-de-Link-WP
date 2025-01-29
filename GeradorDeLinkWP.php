<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero-whatsapp'];
    $mensagem = $_POST['mensagem'];
    $link = 'https://api.whatsapp.com/send?phone=' . urlencode($numero) . '&text=' . urlencode($mensagem);
    echo $link;
    exit;
}


if (isset($_POST['submit'])) {
    $numero_whatsapp = $_POST['numero-whatsapp'];
    $mensagem = $_POST['mensagem'];

    // Remover caracteres especiais do número de telefone
    $numero_whatsapp = preg_replace('/[^0-9]/', '', $numero_whatsapp);

    // Verificar se o número de telefone é válido
    if (strlen($numero_whatsapp) < 10) {
        echo '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            Número de telefone inválido.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        exit;
    }

    // Criar o link do WhatsApp
    $link_whatsapp = "https://api.whatsapp.com/send?phone=+55$numero_whatsapp";
    if (!empty($mensagem)) {
        $link_whatsapp .= "&text=" . urlencode($mensagem);
    }
}
