<?php
    include('../main_templates/header_footer/header.php');
    include('./master-template-conta.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/config-perfil-style.css">
    </head>
    <body class="body-perf">
        <div class="grid-config">
            <h1>Detalhes Pessoais</h1>
            <div class="det-pessoal">
                <div class="endereco-email">
                    <h2>Id Usuário</h2>
                    <span><?php echo $_SESSION['id_user'] ?></span>
                </div>
                
                <hr>

                <div class="user-name">
                    <h2>Nome de Usuário</h2>
                    <span><?php echo $_SESSION['nome'] ?></span>
                </div>

                <hr>

                <div class="data-nascimento">
                    <h2>Data de Nascimento</h2>
                    <span><?php echo $_SESSION['nascimento'] ?></span>
                </div>
                
                <hr>

                <div class="endereco-email">
                    <h2>Endereço de Email</h2>
                    <span><?php echo $_SESSION['email'] ?></span>
                </div>
            </div>
        </div>
    </body>
</html>


<?php
    include('../main_templates/header_footer/footer.php');
?>
