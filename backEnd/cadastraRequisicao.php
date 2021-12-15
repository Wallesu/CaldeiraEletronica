<?php
    include 'conection.php';
    session_start();

    $problema = $_POST['nProblema'];
    $modelo = $_POST['nModeloproduto'];
    $marca = $_POST['nMarcaproduto'];
    $marca = $_POST['nMarcaproduto'];
    $foto = $_POST['nFoto'];
    $usuario_id = $_SESSION['idlogado'];

    if(is_uploaded_file($imagetemp)) {
        if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {
            echo "Sussecfully uploaded your image.";
        }
        else {
            echo "Failed to move your image.";
        }
    }
    else {
        echo "Failed to upload your image.";
    }

    $query = "INSERT INTO solicitacoes (usuario_id, descricao_cliente, status, nome_produto, marca_produto, data, foto_produto)"
        ."VALUES ('".$usuario_id."','".$problema."','solicitado','".$modelo."','$marca','".date('Y-m-d H:i:s')."','".$foto."');";
    mysqli_query($conn, $query);
    header('location: ../frontEnd/perfilCliente.php');



?>
