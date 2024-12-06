<?php
    include('../main_templates/header_footer/header.php');
    if((!isset($_SESSION['email'])) == true and (!isset($_SESSION['senha'])) == true)
    {
        header('Location: ../main_templates/index.php');
    }
    include('./config/show-img.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <link rel="stylesheet" type="text/css" href="./css/main-style-conta.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="utf-8">

        <title> Poggers Games</title>
        <script src="../main_templates/scripts/master-template.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>
    <body>
        <div class="background">
            <div class="img-usuario-nome">
                <img id="img-user-bin-config" alt=" " width="200px" height="200px" src="../img_geral/logo.png">
                <br>
                <label for="btn-troca-img" id="icon-lapis">
                    <h4>Trocar imagem</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                </label>

                <form action="./config/gravar-img.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="trocar-img" id="btn-troca-img">
                    <span><p><?php echo $_SESSION['nome'] ?></p></span>
                </form>

                <script>
                    var dadosBase64 = "<?php echo isset($dadosBase64) ? $dadosBase64 : ''; ?>";
                    if (dadosBase64 !== "") {
                        document.getElementById("img-user-bin-config").src = "data:image/jpg;base64," + dadosBase64;
                    } else {
                        console.log("Imagem não encontrada para o usuário logado.");
                    }

                    $(document).ready(function(){
                        $("#btn-troca-img").change(function(){
                            $("form").submit();
                        });
                    });
                </script>
            </div>
        </div>
        <div class="logout-user">
            <a href="../php/logout.php">Sair da Conta</a>
        </div>
        <div class="grid-information">
            <div class="item-inf" id="item-1">
                <a href="./compras.php" id="link-item"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--color-text-heighlight)" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                    <path id="item-icon" fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                </svg>
                </a>
                <p>COMPRAS</p>
            </div>

            <div class="item-inf" id="item-2">
                <a href="./lista-desejos.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--color-text-heighlight)" class="bi bi-dpad-fill" viewBox="0 0 16 16">
                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v3a.5.5 0 0 1-.5.5h-3A1.5 1.5 0 0 0 0 6.5v3A1.5 1.5 0 0 0 1.5 11h3a.5.5 0 0 1 .5.5v3A1.5 1.5 0 0 0 6.5 16h3a1.5 1.5 0 0 0 1.5-1.5v-3a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 0 16 9.5v-3A1.5 1.5 0 0 0 14.5 5h-3a.5.5 0 0 1-.5-.5v-3A1.5 1.5 0 0 0 9.5 0zm1.288 2.34a.25.25 0 0 1 .424 0l.799 1.278A.25.25 0 0 1 8.799 4H7.201a.25.25 0 0 1-.212-.382l.799-1.279Zm0 11.32-.799-1.277A.25.25 0 0 1 7.201 12H8.8a.25.25 0 0 1 .212.383l-.799 1.278a.25.25 0 0 1-.424 0Zm-4.17-4.65-1.279-.798a.25.25 0 0 1 0-.424l1.279-.799A.25.25 0 0 1 4 7.201V8.8a.25.25 0 0 1-.382.212Zm10.043-.798-1.278.799A.25.25 0 0 1 12 8.799V7.2a.25.25 0 0 1 .383-.212l1.278.799a.25.25 0 0 1 0 .424Z"/>
                </svg></a>
                <p>LISTA DE DESEJOS</p>
            </div>

            <div class="item-inf" id="item-3">
                <a href="./config-perfil.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--color-text-heighlight)" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                </svg></a>
                <p>CONFIGURAÇÕES</p>
            </div>

            <div class="item-inf" id="item-4">
                <a href="./carteira-pag.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--color-text-heighlight)" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z"/>
                        <path d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z"/>
                    </svg>
                </a>
                <p>CARTEIRA</p>
            </div>
        </div>
    </body>
</html>

<?php
    include('../main_templates/header_footer/footer.php');
?>
