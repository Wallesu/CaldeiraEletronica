<?php
    error_reporting(E_ERROR | E_PARSE);
    include('../backEnd/pegaUsuario.php');
    $usuario = pesquisar($_SESSION['idlogado']);

    $nomeUsuario = '';
    $emailUsuario = '';
    if($usuario){
        $nomeUsuario = $usuario['nome'];
        $emailUsuario = $usuario['email'];
    }

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
    <title>Cadastrar-se</title>
</head>
<body class="d-flex align-items-center">
        <div class="container d-flex justify-content-around mb-5">
            <form class="formulario mt-1 w-100" method="POST" action="../backEnd/cadastra_usuario_banco.php">
                    <div class="tab d-flex ">
                        <div class="pointer botaoAba text-center w-50 ativo" onclick="trocarAba(event, 'pagina1')" id="iniciaAtivo">Dados do usuário</div>
                        <div class="pointer botaoAba text-center w-50" onclick="trocarAba(event, 'pagina2')">Endereço</div>
                    </div>
                    <div class="row g-3 tabcontent mt-1" id="pagina1">
                        <div class="col-12">
                            <label for="nome" class="form-label">Seu nome completo</label>
                            <input type="text" class="form-control campoForm" id="nome" name="nome" value="<?php echo $nomeUsuario ?>">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control campoForm" id="email" name="email" value="<?php echo $emailUsuario ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="number" class="form-control campoForm" max="999999999" id="telefone" name="telefone">
                        </div>
                        <div class="col-md-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="number" class="form-control campoForm" id="cpf" name="cpf">
                        </div>
                        <div class="col-md-6">
                            <label for="senha" class="form-label">Crie uma senha</label>
                            <input type="password" class="form-control campoForm" id="senha" name="senha">
                        </div>
                        <div class="col-md-6">
                            <label for="novSenha" class="form-label">Digite a senha novamente </label>
                            <input type="password" class="form-control campoForm" id="novSenha" name="novSenha">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <i class="fas fa-arrow-circle-right fa-3x text-success pointer" id="botaProximo" onclick="trocarAba(event, 'pagina2')"></i>
                        </div>
                    </div>
                    <!-- <div class="col-12 justify-content-end">
                        <a href="#pagina2" class="link-button tab-item  "><i class="fas fa-chevron-circle-right fa-3x text-success d-block w-25" ></i></a>
                    </div> -->
                    <div class="row g-3 tabcontent mt-1 campoForm" id="pagina2">
                        <div class="col-md-6">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="number" class="form-control campoForm" id="cep" name="cep">
                        </div>
                        <div class="col-md-6">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control campoForm" id="cidade" name="cidade">
                        </div>
                        <div class="col-md-6">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control campoForm" id="bairro" name="bairro">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Rua</label>
                            <input type="text" class="form-control campoForm" id="inputAddress" placeholder="" name="rua">
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Número da casa</label>
                            <input type="number" class="form-control campoForm" id="inputZip" name="numeroRua">
                        </div>
                        <div class="col-md-8">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="number" class="form-control campoForm" id="complemento">
                        </div>
                        <div class="col-12">
                            <button type="submit" id="botaoEnviar" class="btn btn-success" onclick="enviaDados()">Cadastrar-se</button>
                        </div>
                    </div>
                    <div>
                        <ul id="listaErros" class="text-danger mt-3 listaErros"></ul>
                    </div>
            </form>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h2>Eletrônica Caldeira</h2>
                <p>Faça seu cadastro</p>
                <p>
                    Já possuí cadastro?
                    Faça seu login clicando abaixo. 
                </p>
                <a href="logaUsuario.php"><button class="btn btn-success botaoLogin">logar</button></a>
            </div>
        </div>
        <script src="dist/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/sistemaAbas.js"></script>
        <script src="js/validaCampos.js"></script>
</body>
</html>