<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'poggersgames_data';

    $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    function obterDadosProduto($mysqli, $chavePrimaria) {
        $sql = "SELECT * FROM produto WHERE N_Produto = ?";
        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $chavePrimaria);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                $row = $result->fetch_assoc();

                $_SESSION['produto_dados'] = $row; // Armazena os dados na sessão
                $_SESSION['img-produto'] = $row['imagem'];
                $result->free();
            } else {
                echo 'Erro na Consulta SQL: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            echo 'Erro na Preparação da Declaração: ' . $mysqli->error;
        }

        $mysqli->close();
    }
?>
