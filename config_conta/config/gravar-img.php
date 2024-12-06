<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'poggersgames_data';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    session_start();
    $emailPessoaLogada = $_SESSION['email'];
    $imagem = $_FILES["trocar-img"];

    if ($imagem != NULL) {
        $nomeFinal = time() . '.jpg';

        if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
            $tamanhoImg = filesize($nomeFinal);

            $mysqlImg = fread(fopen($nomeFinal, "r"), $tamanhoImg);

            $query = "UPDATE usuario SET `img-user` = ? WHERE email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $mysqlImg, $emailPessoaLogada);

            if ($stmt->execute()) {
                unlink($nomeFinal);
                header('Location: ../pag-conta.php');
                exit();
            } else {
                echo "O sistema não foi capaz de executar a query: " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        echo "Você não realizou o upload de forma satisfatória.";
    }
    header('Location: ../pag-conta.php');
?>
