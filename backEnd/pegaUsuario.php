<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$usuario = pesquisar($_SESSION['idlogado']);
function pesquisar($id){
    include 'conection.php';
    $query = "SELECT * FROM usuarios WHERE id = ".$id;

    $resultado = mysqli_query($conn, $query);

    if(mysqli_num_rows($resultado) > 0){

        $usuario = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
    }
    return $usuario;
}


?>