<?php
    include_once 'conection.php';
        $nome        = addslashes($_POST['nome']);        
        $email       = addslashes($_POST['email']);    
        $telefone    = addslashes($_POST['telefone']);    
        $cpf         = addslashes($_POST['cpf']);
        $senha       = addslashes(md5($_POST['senha']));    
        $novSenha    = addslashes(md5($_POST['novSenha']));    
        $cep         = addslashes($_POST['cep']);
        $cidade      = addslashes($_POST['cidade']);    
        $bairro      = addslashes($_POST['bairro']);    
        $rua         = addslashes($_POST['rua']);
        $numeroRua   = addslashes($_POST['numeroRua']);        
        $complemento = addslashes($_POST['complemento']);
        
        if($senha == $novSenha){
            $confSenha = $senha;
        }

         $sql = "INSERT INTO usuarios (nome,email,senha,cpf,telefone,cidade,rua,bairro,numero,complemento,cep,tipo_usuario_id) "
         ."VALUES ('$nome','$email','$confSenha','$cpf','$telefone','$cidade','$rua','$bairro','$numeroRua','$complemento','$cep','3'); ";
         if (mysqli_query($conn, $sql)) {
            header('location: ../frontEnd/logaUsuario.php');
         } else {
            echo "Error: " . $sql . "
    " . mysqli_error($conn);
         }
         mysqli_close($conn);
    

?>