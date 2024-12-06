<?php
    $N_Produto = isset($_POST['N_Produto']) ? intval($_POST['N_Produto']) : 0;
    session_start();
    include_once('config.php');

    $id_user = $_SESSION['id_user'];

    $sql_remover = "DELETE FROM lista_e_compra WHERE id_user = ? AND N_Produto = ? AND tipo_lista = 1";
    $stmt = $mysqli->prepare($sql_remover);
    $stmt->bind_param("ii", $id_user, $N_Produto);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $dados = array('produto' => $N_Produto, 'mensagem' => 'Produto removido com sucesso!');
    } else {
        $dados = array('produto' => $N_Produto, 'mensagem' => 'Falha ao remover o produto.');
    }

    $stmt->close();
    $mysqli->close();

    header('Content-Type: application/json');
    echo json_encode($dados);
?>