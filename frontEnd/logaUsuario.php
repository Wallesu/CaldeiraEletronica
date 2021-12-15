<?php 
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Entrar</title>
</head>
<body class="d-flex align-items-center">
        <div class="container d-flex justify-content-around mb-5">
            <form class="formulario mt-1 w-100" method="POST" action="../backEnd/validalogin.php">
                    <div class="botaoAba text-center">Faça seu login</div>
                        <div class="p-2">
                            <div class="mt-4">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control campoForm" id="email" name="nemail">
                            </div>
                            <div class="">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control campoForm" id="senha" name="nsenha">
                            </div>
                            <div class="mt-4 d-flex align-items-center justify-content-between">
                                <button type="submit" id="botaoEnviar" class="btn btn-success botaoLogin">Logar</button>
                                <div>
                                <ul id="listaErros" class="text-danger mt-3 listaErros">
                                    <li><?php echo($_GET['erro']); ?></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <script src="dist/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/sistemaAbas.js"></script>
        <script src="js/validaCampos.js"></script>
</body>
</html>