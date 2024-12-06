<?php
    $valor = isset($_POST['valor']) ? intval($_POST['valor']) : 0;
    session_start();
    add_dinheiro($valor);

    function add_dinheiro($dinheiro_add){
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'poggersgames_data';

        $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($mysqli->connect_error) {
            die("Falha na conexão: " . $mysqli->connect_error);
        }

        $novo_saldo = $_SESSION['dinheiro'] + $dinheiro_add;
        $novo_saldo = round($novo_saldo, 2);
        $id_user = $_SESSION['id_user'];

        $sql_att_saldo = "UPDATE carteira SET dinheiro = ? WHERE id_user = ?";
        $stmt = $mysqli->prepare($sql_att_saldo);
        $stmt->bind_param("di", $novo_saldo, $id_user);
        $stmt->execute();

        $_SESSION['dinheiro'] = $novo_saldo;

        $stmt->close();
        $mysqli->close();
        
        $dados = array('saldo' => $_SESSION['dinheiro']);

        header('Content-Type: application/json');
        echo json_encode($dados);
    }