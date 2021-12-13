<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];

atualizaUsuario($nome, $cpf, $telefone, $cep, $cidade, $rua, $numero);

function atualizaUsuario($nome, $cpf, $telefone, $cep, $cidade, $rua, $numero){
    include 'conection.php';
    session_start();

    $query = 'UPDATE usuarios SET '. 
        'nome = "'.$nome.'", '. 
        'cpf = "'.$cpf.'", '. 
        'telefone = "'.$telefone.'", '. 
        'cep = "'.$cep.'", cidade = "'.$cidade.'", rua = "'.$rua.'", numero = '.$numero.' WHERE id = '.$_SESSION['idlogado'].';';

    if(mysqli_query($conn, $query)){
        header('location: ../frontEnd/perfilFuncionario.php');
    }
    echo('Ocorreu um erro!');
}

?>