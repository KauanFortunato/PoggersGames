<?php
    $N_Produto = isset($_POST['N_Produto']) ? intval($_POST['N_Produto']) : 0;
    $tipo_lista = isset($_POST['tipo_lista']) ? intval($_POST['tipo_lista']) : 0;
    $tipo_lista_mudar = 0;

    if($tipo_lista == 0){
        $tipo_lista_mudar = 1;
    }else{
        $tipo_lista_mudar = 0;
    }

    session_start();
    include_once('config.php');

    $id_user = $_SESSION['id_user'];

    $sql_verificar = "SELECT COUNT(*) FROM lista_e_compra WHERE id_user = ? AND N_Produto = ? AND tipo_lista = '$tipo_lista_mudar'";
    $stmt_verificar = $mysqli->prepare($sql_verificar);
    $stmt_verificar->bind_param("ii", $id_user, $N_Produto);
    $stmt_verificar->execute();
    $stmt_verificar->bind_result($quantidade_registros);
    $stmt_verificar->fetch();
    $stmt_verificar->close();

    if ($quantidade_registros == 0) {
        $sql_atualizar = "UPDATE lista_e_compra SET tipo_lista = '$tipo_lista_mudar' WHERE id_user = ? AND N_Produto = ? AND tipo_lista = '$tipo_lista'";
        $stmt = $mysqli->prepare($sql_atualizar);
        $stmt->bind_param("ii", $id_user, $N_Produto);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $dados = array('produto' => $N_Produto, 'mensagem' => 'Produto atualizado com sucesso!');
        } else {
            $dados = array('produto' => $N_Produto, 'mensagem' => 'Falha ao atualizar o produto.');
        }

        $stmt->close();

    } else {
        $sql_remover = "DELETE FROM lista_e_compra WHERE id_user = ? AND N_Produto = ? AND tipo_lista = ?";
        $stmt = $mysqli->prepare($sql_remover);
        $stmt->bind_param("iii", $id_user, $N_Produto, $tipo_lista);
        $stmt->execute();

        $dados = array('produto' => $N_Produto, 'mensagem' => 'Já existe um registro com tipo_lista = 0 para este produto.');
    }

    $mysqli->close();

    header('Content-Type: application/json');
    echo json_encode($dados);
?>