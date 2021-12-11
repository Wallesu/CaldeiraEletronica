<?php
session_start();
function pesquisar($id){
    include 'conection.php';
    if(!$id) return '';
    $query = "SELECT * FROM usuarios WHERE id = ".$id;

    $resultado = mysqli_query($conn, $query);

    if(mysqli_num_rows($resultado) > 0){

        $usuario = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
    }
    return $usuario;
}


?>