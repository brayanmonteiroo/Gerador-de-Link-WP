<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Link Whatsapp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="https://brayan.dev/img/brayan-logo.png" type="image/x-icon">

</head>

<body>

    <form method="post" action="GeradorDeLinkWP.php">
        <div class="container mt-5">
            <div class="card p-5 rounded">
                <h1 class="text-center mb-4"><i class="bi bi-whatsapp"></i>
 Gerador de Links WhatsApp</h1>
                <div class="mb-4">
                    <label for="numero-whatsapp" class="form-label">Número WhatsApp:</label>
                    <input type="tel" class="form-control" id="numero-whatsapp" name="numero-whatsapp" placeholder="(11) 9 9999 9999" required aria-describedby="numero-whatsapp-help">
                    <div id="numero-whatsapp-help" class="form-text">Insira o número sem espaços ou caracteres especiais, incluindo o código de área e o DDD.</div>
                </div>
                <div class="mb-4">
                    <label for="mensagem" class="form-label">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui"></textarea>
                </div>
                <div class="text-center mb-4">
                    <button class="btn btn-primary" name="submit" id="gerar-link" type="submit">Gerar Link</button>
                </div>
                <div class="mb-4">
                    <label for="link-gerado" class="form-label" value="">Link gerado:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="link-gerado" name="link-gerado" readonly>
                        <button class="btn btn-outline-secondary" type="button" id="copiar-link">Copiar</button>
                    </div>
                    <div id="copiar-link-mensagem" class="text-success" style="display:none;">Link copiado!</div>
                </div>

            </div>
        </div>
    </form>

    <script src="./scriptsGeradorDeLinkWP.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>