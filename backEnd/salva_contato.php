<?php
    
    session_start();
    include('function.php');


    $_SESSION['nomeUsuario'] = $_POST['nnome'];
    $_SESSION['emailUsuario'] = $_POST['nemail'];
    $_SESSION['problemaProdUsuario'] = $_POST['nProblema'];
    $_SESSION['modeloProdUsuario'] = $_POST['nModeloproduto'];
    $_SESSION['marcaProdUsuario'] = $_POST['nMarcaproduto'];
    $_SESSION['fotoProdUsuario'] = $_POST['nFoto'];

    echo($_SESSION['problemaProdUsuario']);

    header("Location: ../frontEnd/cadastraUsuario.php");


?>