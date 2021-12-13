<?php

function tabelaRequisicoes(){
    include 'conection.php';
    $query = "SELECT
    s.id as idR,
    u.id as idU,
    descricao_cliente,
    foto_produto,
    status,
    nome_produto,
    marca_produto,
    data,
    u.nome,
    u.email,
    u.telefone
    FROM solicitacoes s
    INNER JOIN usuarios u
    ON s.usuario_id = u.id;";

    $resultado = mysqli_query($conn, $query);

    if(mysqli_num_rows($resultado) > 0){
        $array = [];

        while($req = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            array_push($array,$req);
        }
        $dado = '';
        $modal = '';
        foreach($array as $req){
            $dado =  $dado . "
            <tr>
                <td>
                    <a href='../backEnd/transfereRequisicao.php/?idReq=".$req['idR']."&status=".$req['status']."&funcao=1'>
                    <i
                        class='fas fa-briefcase fa-2x text-success botaoDetalhes'
                        value='".$req['idR']."'
                    ></i>
                    </a>
                </td>
                <td>". $req['descricao_cliente'] ."</td>
                <td>". $req['nome_produto'] ."</td>
                <td>". $req['marca_produto'] ."</td>
                <td>". $req['data'] ."</td>
                <td>". $req['status'] ."</td>
                <td>
                    <i
                        class='fas fa-info-circle fa-2x text-warning botaoDetalhes'
                        value='".$req['idR']."'
                        data-bs-toggle='modal'
                        data-bs-target='#modalInfo".$req['idR']."'
                    ></i>
                </td>
            </tr>";

            $modal = $modal . '
                <div class="modal fade" id="modalInfo'.$req['idR'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <h4>Sobre o produto</h4>
                                    <div>
                                        <img src="'.$req['foto_produto'] .'" alt="produto">
                                    </div>
                                    <div>
                                        <textarea name="" id="" cols="30" rows="10">'.$req['descricao_cliente'] .'</textarea>
                                    </div>
                                    <div class="row">
                                        <label for="modelo" class="col-4 col-form-label">modelo: </label>
                                        <input type="text" name="modelo" id="modelo" value="'.$req['nome_produto'] .'" class="col-3 form-control">
                                    </div>
                                    <div>
                                        <label for="marca">marca: </label>
                                        <input type="text" name="marca" id="marca" value="'.$req['marca_produto'].'">
                                    </div>
                                    <div>
                                        <label for="status">status: </label>
                                        <input type="text" name="status" id="status" value="'.$req['status'].'">
                                    </div>
                                </div>
                                <div>
                                    <h4>Dados do cliente</h4>
                                    <div>
                                        <label for="nome_cliente">Nome: </label>
                                        <input type="text" id="nome_cliente" value="'.$req['nome'].'">
                                    </div>
                                    <div>
                                        <label for="marca">Email: </label>
                                        <input type="email" id="email_cliente" value="'.$req['email'].'">
                                    </div>
                                    <div>
                                        <label for="telefone_cliente">Telefone: </label>
                                        <input type="text" id="telefone_cliente" value="'.$req['telefone'].'">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <a href="../backEnd/transfereRequisicao.php/?idReq='.$req["idR"].'&status='.$req["status"].'&funcao=1">
                                    <button type="button" class="btn btn-success">Aceitar serviço</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            ';
        }
    }
    return [$modal, $dado];

}

function tabelaRequisicoesFuncionario(){
    include 'conection.php';
    $id = $_SESSION['idlogado'];
    $query = "SELECT
    s.id as idR,
    u.id as idU,
    descricao_cliente,
    foto_produto,
    status,
    nome_produto,
    marca_produto,
    data,
    u.nome,
    u.email,
    u.telefone
    FROM solicitacoes s
    INNER JOIN usuarios u
    ON s.usuario_id = u.id
    WHERE funcionario_id =".$id;

    $resultado = mysqli_query($conn, $query);

    if(mysqli_num_rows($resultado) > 0){
        $array = [];

        while($req = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            array_push($array,$req);
        }
        $dado = '';
        $modal = '';
        foreach($array as $req){
            $dado =  $dado . "
            <tr>
                <td>". $req['descricao_cliente'] ."</td>
                <td>". $req['nome_produto'] ."</td>
                <td>". $req['marca_produto'] ."</td>
                <td>". $req['data'] ."</td>
                <td>". $req['status'] ."</td>
                <td>
                    <i
                        class='fas fa-info-circle fa-2x text-warning botaoDetalhes'
                        value='".$req['idR']."'
                        data-bs-toggle='modal'
                        data-bs-target='#modalInfo".$req['idR']."'
                    ></i>
                </td>
            </tr>";

            $modal = $modal . '
                <div class="modal fade" id="modalInfo'.$req['idR'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <h4>Sobre o produto</h4>
                                    <div>
                                        <img src="'.$req['foto_produto'] .'" alt="produto">
                                    </div>
                                    <div>
                                        <textarea name="" id="" cols="30" rows="10">'.$req['descricao_cliente'] .'</textarea>
                                    </div>
                                    <div class="row">
                                        <label for="modelo" class="col-4 col-form-label">modelo: </label>
                                        <input type="text" name="modelo" id="modelo" value="'.$req['nome_produto'] .'" class="col-3 form-control">
                                    </div>
                                    <div>
                                        <label for="marca">marca: </label>
                                        <input type="text" name="marca" id="marca" value="'.$req['marca_produto'].'">
                                    </div>
                                    <div>
                                        <label for="status">status: </label>
                                        <input type="text" name="status" id="status" value="'.$req['status'].'">
                                    </div>
                                </div>
                                <div>
                                    <h4>Dados do cliente</h4>
                                    <div>
                                        <label for="nome_cliente">Nome: </label>
                                        <input type="text" id="nome_cliente" value="'.$req['nome'].'">
                                    </div>
                                    <div>
                                        <label for="marca">Email: </label>
                                        <input type="email" id="email_cliente" value="'.$req['email'].'">
                                    </div>
                                    <div>
                                        <label for="telefone_cliente">Telefone: </label>
                                        <input type="text" id="telefone_cliente" value="'.$req['telefone'].'">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="../backEnd/transfereRequisicao.php/?idReq='.$req["idR"].'&funcao=2">
                                    <button type="button" class="btn btn-danger">Desistir</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            ';
        }
    }
    return [$modal, $dado];
}


?>