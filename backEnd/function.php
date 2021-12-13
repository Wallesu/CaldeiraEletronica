<?php
 function validaAcesso($e,$s){
    
    $idUsuario = 0;
    include("conection.php");

    //validar se o usuário existe
    $sql = "SELECT id FROM usuarios "
    ." WHERE email = '".$e."' "
    ." AND senha = '".$s."';";

    // var_dump($sql);
    // die();

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);


    //Valida se retornou linha
    if(mysqli_num_rows($result) > 0){

        $arrayemail = array();

        //Descarregar dados no array
        while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            //Gravação no array
            array_push($arrayemail,$linha);
        }

        //Validar dados 
        foreach($arrayemail as $campo){  
            $idUsuario = $campo['id'];                  
            $_SESSION['idlogado'] = $campo['id'];
        }
                
    }
    return $idUsuario;
}

function define_tipo($ide){
    $sql = "SELECT tipo_usuario_id FROM usuarios "
    ." WHERE id = '".$ide."';";

    include("conection.php");

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);


    //Valida se retornou linha
    if(mysqli_num_rows($result) > 0){

        $arrayemail = array();

        //Descarregar dados no array
        while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            //Gravação no array
            array_push($arrayemail,$linha);
        }

        //Validar dados 
        foreach($arrayemail as $campo){  
            $tipo = $campo['tipo_usuario_id'];                  
            
        }
                
    }
    // var_dump($tipo);
    // die();
    return $tipo;
}
function solicita_orcamento(){


    if($_SESSION['idlogado']){

        $salvDesc_cliente = $_POST['nProblema'];
        $salv_nome_produto = $_POST['nModeloproduto'];
        $salv_marca_produto = $_POST['nMarcaproduto'];
        $salv_foto_produto = $_POST['nFoto'];

        include('conection.php');

    
        $sql = "INSERT INTO solicitacoes "
        ."(usuario_id, descricao_cliente, foto_produto, nome_produto, marca_produto) "
        ."VALUES ('".$usuario_id."','".$salvDesc_cliente."', '".$salv_foto_produto."', '".$salv_nome_produto ."', '".$salv_marca_produto."');";
        

        $reseult = mysqli_query($conn,$sql);
        mysqli_close($conn);
    }

}

function listaMarcas(){

    include("conection.php");
    $sql = "SELECT * FROM solicitacoes order by id" ;
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    $lista = "";

    if(mysqli_num_rows($result)>0){

        $array = array();

        while ($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            array_push($array,$linha);
        }
    }

    foreach($array as $campo){
        $lista .= '<option value="'.$campo['id'].'">'.$campo['id'].' - '.$campo['marca_produto'].'</option>';
    }

    return $lista;
}


?>