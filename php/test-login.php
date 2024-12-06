<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
    {
        include_once('config.php');

        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $senha_digitada = mysqli_real_escape_string($mysqli, $_POST['senha']);

        $sql = "SELECT * FROM usuario WHERE email = ?";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) 
        {
            $row = $result->fetch_assoc();
            if (password_verify($senha_digitada, $row['senha']))
            {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                $_SESSION['email'] = $row['email'];
                $_SESSION['senha'] = $row['senha'];
                $_SESSION['id_user'] = $row['id_user'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['nascimento'] = $row['nascimento'];
                $_SESSION['img-user'] = $row['img-user'];
                $_SESSION['tipo-user'] = $row['tipo_user'];

                header("Location: ../main_templates/");
            }
            else 
            {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                $_SESSION['erro'] = 'email ou senha errado';
                header("Location: ../main_templates/login.php");
            }
        } 
        else 
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            $_SESSION['erro'] = 'email ou senha errado';
            header("Location: ../main_templates/login.php");
        }

        $stmt->close();
        $mysqli->close();

    }
    else {
        header("Location: ../main_templates/login.php");
    }
?>
