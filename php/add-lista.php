<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
        include_once('config.php');

        $id_user = $_SESSION['id_user'];
        $N_Produto = $_POST['N_Produto'];

        $sql_verificar = "SELECT * FROM lista_e_compra WHERE id_user = '$id_user' AND N_Produto = '$N_Produto' AND tipo_lista = 0";
        $resultado = $mysqli->query($sql_verificar);

        if ($resultado->num_rows > 0) {
            $sql_remover = "DELETE FROM lista_e_compra WHERE id_user = '$id_user' AND N_Produto = '$N_Produto' AND tipo_lista = 0";
            $result_remover = $mysqli->query($sql_remover);
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit;
        } else {
            $sql_inserir = "INSERT INTO lista_e_compra (id_user, N_Produto, tipo_lista) VALUES ('$id_user', '$N_Produto', 0)";

            if ($mysqli->query($sql_inserir) === TRUE) {
                header("Location: {$_SERVER['HTTP_REFERER']}");
                exit;
            } else {
                echo "Erro ao adicionar à lista de desejos: " .$mysqli->error;
            }
        }
        $mysqli->close();
    }
    else{
        header("Location: ../main_templates/login.php");
    }
    
?>
