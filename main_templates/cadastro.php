<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="./css/stylesheet-cadastro-login.css">
    <link rel="icon" href="../img_geral/IconeLogo.ico" type="img/x-icon">

    <title>Poggers Games</title>

    <script src="./scripts/cadastro-script.js"></script>
</head>
    <body>
        <header>
            <a href="./login.php" id="btn-voltar">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
            </a>
        </header>
        <div class="box">
            <form action="../php/cadastro.php" method="POST">
                <fieldset>
                    <legend>
                        <div class="logo">
                            <a href="index.php"><img src="../img_geral/logo-pixel.png"></a>
                            <a href="index.php"><h4>Poggers Games</h4></a>
                        </div>
                    </legend>
                    <br><br>
                    <div class="inputBox">
                        <label for="nome" class="labelError-nome">Este nome de usuário já esta em uso</label>
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput" id="nomeLabel">Nome de Usuário</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="email" class="labelError-email">Este endereço de email já esta em uso</label>
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput" id="emailLabel">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    
                    <div class="inputBox">
                        <label for="data-nascimento"><b>Data de Nascimento</b></label>
                        <input type="date" name="data-nascimento" id="data-nascimento" required>
                    </div>
                    
                    <br><br>
                    <input type="submit" name="submit" id="submit" value="Cadastrar">
                    <a href="login.php" id="login"><p>Já tem conta? Entre aqui.</p></a>
                </fieldset>
            </form>
        </div>
        <?php
            session_start();
            if((isset($_SESSION['erro-usuario']))) {
                echo '
                    <script>
                        usuarioJaCadastrado();
                    </script>';
                unset($_SESSION['erro-usuario']);
            }elseif((isset($_SESSION['erro-email']))){
                echo '
                    <script>
                        emailJaCadastrado();
                    </script>';
                unset($_SESSION['erro-email']);
            }
        ?>
    </body>
</html>
