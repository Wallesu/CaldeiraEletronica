<?php
    session_start();
    include('../backEnd/function.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfilUsuario.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Perfil Cliente</title>
</head>
<body>
    <header class="navbar">
        <div class="container-fluid">
            <div>
                <h2 class="text-white">Eletrônica Caldeira</h2>
            </div>
                <ul class="nav">
                    <li class="nav-item p-2 mt-1">
                        <a href="#" class="text-white text-decoration-none fs-5">Bem vindo(a): <?php echo getNome($_SESSION['idlogado']);?></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success active text-white m-2" href="#pedido">Minhas solicitações</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success text-white m-2" href="perfilCliente.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger text-white m-2" href="index.php">Sair</a>
                    </li>
                </ul>
        </div>
    </header>
 
    <main class="fundo">
      <div class="container my-4">
        <div class="row profile">
          </div>
          <div class="col-md-9">
            <div class="profile-content">
              <div class="row">
                <div class="col-md-12" id="pedido">
                  <h4>Seu pedido:</h4>
                </div>
              </div>
              <form>
              <div class="col-md-6 col-lg-10">
                <h4 class="col-sm-10 mb-3 p-2 bg-orçamento text-white" id="faça_seu_orçamento">Seu orçamento</h4>
                <form action="../backEnd/salva_contato.php" method="POST" novalidate>
                  <div class="row g-3">
        
                    <div class="col-sm-10">
                        <label for="exampleFormControlTextarea1" class="form-label">Qual o problema com o produto?</label>
                        <textarea class="form-control" id="textArea" name="nProblema" valeu="<?php echo $_SESSION['problemaProdUsuario'];?>" rows="3" required></textarea>
                      <div class="invalid-feedback">
                        Invalido requer nome
                      </div>
                    </div>

                    <div class="col-md-5">
                      <label for="country" class="form-label">Qual o modelo do produto?</label>
                      <select class="form-select" id="country" name="nModeloproduto" valeu="<?php echo $_SESSION['modeloProdUsuario'];?>" required>
                        <option value="">Celular</option>
                        <option>Computador</option>
                        <option>TV</option>
                      </select>
                      <div class="invalid-feedback">
                        Selecione uma opção valida.
                      </div>
                    </div>
        
                    <div class="col-md-5">
                      <label for="state" class="form-label">Qual a marca?</label>
                      <select class="form-select" id="state" name="nMarcaproduto" valeu="<?php echo $_SESSION['marcaProdUsuario'];?>" required>
                        <option value="">Dell</option>
                        <option>Samseung</option>
                        <option>LG</option>
                      </select>
                      <div class="invalid-feedback">
                        Selecione uma opção valida.
                      </div>
                    </div>
                  </div>
        
                  <div class="row gy-3">
                    <div class="col-sm-10">
                        <label for="formFile" class="form-label">Mande uma foto do produto</label>
                        <input class="form-control" type="file" id="formFile" name="nFoto" valeu="<?php echo $_SESSION['fotoProdUsuario'];?>">
                    </div>
        
                  <button class="col-md-5 col-lg-9 btn btn-outline-success btn-lg" type="submit">Fazer pedido</button>
                </form>
              </div>
            </div>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
        
    </main>

   
    
</body>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
</html>
