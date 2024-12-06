<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="./css/stylesheet-cadastro-login.css">
    <link rel="icon" href="../img_geral/IconeLogo.ico" type="img/x-icon">

    <script src="./scripts/login-script.js"></script>

    <title>Poggers Games</title>
</head>
    <body>
        <header>
            <a href="./index.php" id="btn-voltar">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
            </a>
        </header>

        <div class="box">
            <form action="../php/test-login.php" method="POST">
                <fieldset>
                    <legend>
                        <div class="logo">
                            <a href="index.php"><img src="../img_geral/logo-pixel.png"></a>
                            <a href="index.php"><h4>Poggers Games</h4></a>
                        </div>
                    </legend>

                    <br><br>
                    <div id="erro-email-senha">
                        <div class="icon-triangle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                            </svg>
                        </div>
                        <div class="message">
                            <p>O email ou a senha inserido está incorreto</p>
                        </div>
                    </div>
                    
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>

                    <input type="submit" name="submit" id="submit" value="Entrar">
                    <a href="cadastro.php" id="cadastro"><p>Não tem conta? Crie aqui.</p></a>
                </fieldset>
            </form>
        </div>

        <?php
            session_start();
            if((isset($_SESSION['erro']))) {
                echo '
                    <script>
                        erroEmailSenha();
                    </script>';
                unset($_SESSION['erro']);
            }
        ?>
    </body>
</html>