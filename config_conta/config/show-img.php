<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'poggersgames_data';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $emailPessoaLogada = $_SESSION['email'];

    $query = "SELECT `img-user` FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $emailPessoaLogada);
    $stmt->execute();
    $stmt->bind_result($imgBinario);

    if ($stmt->fetch()) {
        $dadosBase64 = base64_encode($imgBinario);
    } else {
        echo "Imagem não encontrada para o usuário logado.";
    }

    $stmt->close();
    $conn->close();
?>