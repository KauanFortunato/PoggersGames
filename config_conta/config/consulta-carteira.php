<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'poggersgames_data';

    $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($mysqli->connect_error) {
        die("Falha na conexão: " . $mysqli->connect_error);
    }
    
    $sql_carteira = "SELECT * FROM carteira WHERE id_user = ?";
    $stmt = $mysqli->prepare($sql_carteira);
    $stmt->bind_param("i", $_SESSION['id_user']);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if($resultado->num_rows > 0){
        $carteira = $resultado->fetch_assoc();
        $_SESSION['dinheiro'] = $carteira['dinheiro'];
        $_SESSION['id_carteira'] = $carteira['id_carteira'];
    }

    $stmt->close();
    $mysqli->close();
    
