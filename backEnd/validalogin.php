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

    
    if($id != 0){
        $permissao = define_tipo($id);

        if($permissao == 1){
            header('location: ../frontEnd/perfilAdm.php');
        }else if($permissao == 2){
            header('location: ../frontEnd/perfilFuncionario.php');
        }else{
            header('location: ../frontEnd/perfilCliente.php');
        }
    }
    else{
        $erro = 'Email ou senha incorretos!';
        header("Location: ../frontEnd/logaUsuario.php?erro=".$erro);
    }
}else{
	
}

   



?>