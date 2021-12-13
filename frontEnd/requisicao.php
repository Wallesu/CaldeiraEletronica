<?php 
include '../backEnd/pegaRequisicao.php';
$estrutura = tabelaRequisicoes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/requisicao.css">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="dist/jQuery/datatables.min.css"/>
    <!-- <link rel="stylesheet" href="../../dist/jQuery/dataTables.bootstrap5.min.css"> -->
    <title>Página Inicial</title>
</head>
<body>
<?php 

?>
<!-- Modal -->
    <?php echo $estrutura[0] ?>

    <header class="navbar bg-success">
        <div class="container-fluid">
            <div>
                <h2 class="text-white">Eletrônica Caldeira</h2>
            </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="perfilFuncionario.php" class="btn btn-carousel text-white"><i class="fas fa-user fa-2x"></i></a>
                    </li>
                </ul>
        </div>
    </header>
    <main class="reqContainer">
        <div class="my-5">
            <h3>Requisições</h3>
        </div>
        <table id="tabelaRequisicoes" class="display mt-5" style="width:100%">
            <thead class="bg-success">
                <tr>
                    <th></th>
                    <th>descricao</th>
                    <th>modelo</th>
                    <th>marca</th>
                    <th>data</th>
                    <th>status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="mt-5">
                <?php echo $estrutura[1] ?>
            </tbody>
        </table>
    </main>
    <script src="dist/jQuery/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="dist/jQuery/datatables.min.js"></script>
    <script src="dist/jQuery/dataTables.bootstrap5.min.css"></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/tabelaDados.js"></script>
</body>
</html>