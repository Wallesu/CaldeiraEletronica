<?php
session_start();
include('function.php');

if((isset($_POST['nemail'])) && (isset($_POST['nsenha']))){
    $email = addslashes( $_POST['nemail']);
    $senha = addslashes( $_POST['nsenha']);
    $senha = md5($senha);
    $nome = '';  

    $_SESSION['idlogado'] = '';

    $id = validaAcesso($email,$senha);

    
    if($id != ''){
        $nome = getNome($id);
        $permissao = define_tipo($id);
        var_dump($permissao);

        if($permissao == 1){
            header('location: ../frontEnd/perfilAdm.php');
        }else if($permissao == 2){
            header('location: ../frontEnd/perfilFuncionario.php');
        }else{
            header('location: ../frontEnd/perfilCliente.php');
        }
    }
    echo('passou aq');
}else{
	$_SESSION['emailErro'] = "Usuário ou senha inválido";
    header("Location: ../frontEnd/logaUsuario.php");
}

   



?>