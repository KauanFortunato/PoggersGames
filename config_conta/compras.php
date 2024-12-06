<?php
    include('../main_templates/header_footer/header.php');
    include('./master-template-conta.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <link rel="stylesheet" type="text/css" href="./css/compras-style.css">

        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta charset="utf-8">
        <script src="../main_templates/scripts/menu-header.js" defer></script>
        <script src="../main_templates/scripts/menu-header.js" defer></script>

        <title> Poggers Games</title>
    </head>

    <body>
        <main>
            <div class="grid-container-compras">
                <?php
                include_once("../php/config.php");

                $id_user = $_SESSION['id_user'];
                $sql = "SELECT * FROM compra WHERE id_user = '$id_user'";
                $result = $mysqli->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class="item-compra">
                            <div class="thumb-game">
                                <div class="img-game">
                                    <img src="../produtos/<?php echo $row['imagem']?>" alt="game-img">
                                </div>
                                <div class="titulo-game">
                                    <a href="#">Dead Cells</a>
                                </div>
                            </div>

                            <div class="informacoes-compra">
                                <div class="ver-chave-item">
                                    <p>Ver chave</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.79l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="ver-chave-item-mobile">
                                <p>Ver chave</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="var(--color-text)" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.79l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </main>
    </body>
</html>

<?php
    include('../main_templates/header_footer/footer.php');
?>
