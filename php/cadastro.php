<?php
    session_start();
    if (isset($_POST['submit'])) {
        include_once('../php/config.php');

        $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
        $nascimento = mysqli_real_escape_string($mysqli, $_POST['data-nascimento']);

        $check_nome_stmt = $mysqli->prepare("SELECT 1 FROM usuario WHERE nome = ?");
        $check_nome_stmt->bind_param('s', $nome);
        $check_nome_stmt->execute();
        $check_nome_stmt->store_result();

        $check_email_stmt = $mysqli->prepare("SELECT 1 FROM usuario WHERE email = ?");
        $check_email_stmt->bind_param('s', $email);
        $check_email_stmt->execute();
        $check_email_stmt->store_result();

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        if ($check_nome_stmt->num_rows > 0) {
            $_SESSION['erro-usuario'] = 'usuario';
            $check_nome_stmt->close();
            header('Location: ../main_templates/cadastro.php');
            exit();
        } elseif ($check_email_stmt->num_rows > 0){
            $_SESSION['erro-email'] = 'email';
            $check_email_stmt->close();
            header('Location: ../main_templates/cadastro.php');
            exit();
        } else {
            $check_nome_stmt->close();
            $check_email_stmt->close();

            $insert_stmt = $mysqli->prepare("INSERT INTO usuario(nome, email, senha, nascimento) VALUES (?, ?, ?, ?)");
            $insert_stmt->bind_param("ssss", $nome, $email, $senhaCriptografada, $nascimento);
    
            if ($insert_stmt->execute()) {
                header('Location: ../main_templates/login.php');
            } else {
                echo "Erro na inserção do registro: " . $insert_stmt->error;
            }

            $insert_stmt->close();
        }
    
        $mysqli->close();
    }
?>
