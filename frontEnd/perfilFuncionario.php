<?php 
include '../backEnd/pegaUsuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landing.CSS">
	<link rel="stylesheet" href="css/funcionario.CSS">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Perfil Funcionário</title>
</head>
<body>
    <header class="navbar">
        <div class="container-fluid">
            <div>
                <h2 class="text-white">Eletrônica Caldeira</h2>
            </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="btn btn-carousel text-white">Bem vindo(a) <?php echo $usuario['nome']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-carousel text-white" href="#">Meus trabalhos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-carousel text-white" href="#">Perfil</a>
                    </li>
                </ul>
        </div>
    </header>
 
    <main class="fundo">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img 
                                class="rounded-circle mt-5"
                                width="150px"
                                src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                            >
                            <span class="font-weight-bold"><?php echo $usuario['nome']?></span>
                            <span class="text-black-50"><?php echo $usuario['email']?></span>
                        </div>
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="row">
                            <div class="d-flex justify-content-between align-items-center mb-3 col-12">
                                <h4 class="text-right">Seu contato</h4>
                            </div>
                            <div class="col-6">
                                <div class="col-md-12">
                                    <label class="labels">Nome:</label>
                                    <input type="text" class="form-control" placeholder="Novo nome" name="nome" value="<?php echo $usuario['nome']?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">E-mail</label>
                                    <input type="email" class="form-control" placeholder="Seu email" name="email" value="<?php echo $usuario['email']?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Telefone</label>
                                    <input type="text" class="form-control" placeholder="Seu contato" name="telefone"  value="<?php echo $usuario['telefone']?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">CPF</label>
                                    <input type="text" class="form-control" placeholder="Cpf" name="cpf" value="<?php echo $usuario['cpf']?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-md-12">
                                    <label class="labels">CEP</label>
                                    <input type="text" class="form-control" placeholder="CEP da rua" name="cep" value="<?php echo $usuario['cep']?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Cidade</label>
                                    <input type="text" class="form-control" placeholder="Nome da sua cidade" name="cidade" value="<?php echo $usuario['cidade']?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Rua</label>
                                    <input type="text" class="form-control" placeholder="Nome da sua rua" name="rua" value="<?php echo $usuario['rua']?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Número da casa</label>
                                    <input type="text" class="form-control" placeholder="numero da sua casa" name="numero" value="<?php echo $usuario['numero']?>">
                                </div>
                            </div>
                        </div>    
                    </div>
            </div>
        </div>
    </main>

    
</body>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
</html>
