<?php
include 'conection.php';
session_start();

$query = "SELECT * FROM usuarios WHERE id = ".$_SESSION['idlogado'];

$resultado = mysqli_query($conn, $query);
mysqli_close($conn);
    if(mysqli_num_rows($resultado) > 0){

        $arrayemail = array();

        while($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
            //Gravação no array
            array_push($arrayemail,$linha);

            foreach($arrayemail as $campo){  
                $tipo = $campo['tipo_usuario_id'];                 
                
            }
        }
                
    }
    if($tipo == 3) header('location: ../frontEnd/perfilUsuario.php');
    if($tipo == 2) header('location: ../frontEnd/perfilFuncionario.php');
    if($tipo == 1) header('location: ../frontEnd/perfilAdm.php');


?>