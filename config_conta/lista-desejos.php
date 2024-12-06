<?php
    include('../main_templates/header_footer/header.php');
    include('./master-template-conta.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/lista-desejo-style.css">
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta charset="utf-8">
        <script src="../main_templates/scripts/edit-lista.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <title> Poggers Games</title>
    </head>

    <body>
        <main>
            <div class="grid-container-lista-desejos">
            <?php
                include_once("../php/config.php");

                $id_user = $_SESSION['id_user'];
                $sql = "SELECT * FROM lista_e_compra WHERE id_user = '$id_user' AND tipo_lista = 0";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $produto_id = $row['N_Produto'];
                        $sql_produto = "SELECT * FROM produto WHERE N_Produto = '$produto_id'";
                        $result_produto = $mysqli->query($sql_produto);

                        if ($result_produto->num_rows > 0) {
                            $produto = $result_produto->fetch_assoc();
                            ?>
                            <div class="item-desejo">
                                <div class="thumb-game">
                                    <div class="img-game">
                                        <img src="../produtos/<?php echo $produto['imagem']; ?>" alt="game-img">
                                    </div>
                                    <div class="titulo-game">
                                        <a href="../pagina_produtos/<?php echo $produto['pagina']; ?>"><?php echo $produto['nome']; ?></a>
                                    </div>
                                </div>
                                
                                <div class="comprar-game">
                                    <div class="preco-game">
                                        <p><?php echo $produto['valor'];?>€</p>
                                    </div>
                                    <button class="compra-btn" onclick="change_list(<?php echo$produto['N_Produto']?>, 0)">
                                        <span>adicionar ao carrinho</span>
                                    </button>
                                    
                                    <form action="../php/add-lista.php" method="post" class="desejo-btn form-jogo" data-produto="<?php echo $produto['N_Produto']; ?>">
                                        <input type="hidden" name="N_Produto" value="<?php echo $produto['N_Produto']; ?>">
                                        <div class="desejo-icon" onclick="submitForm(this)">
                                            <?php

                                            $id_user = $_SESSION['id_user'];
                                            $N_Produto = $produto['N_Produto'];

                                            $sql_verificar = "SELECT * FROM lista_e_compra WHERE id_user = '$id_user' AND N_Produto = '$N_Produto'";
                                            $resultado = $mysqli->query($sql_verificar);
                                            ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="transparent" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path stroke="grey" stroke-width="1" d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                            </svg>
                                        </div>
                                    </form>
                                </div>

                                <div class="btn-mobile">
                                    <button class="compra-btn-mobile">
                                        <span>adicionar ao carrinho</span>
                                    </button>
                                </div>
                            </div>
                            <?php
                        }
                    }
                } else {
                    echo "<div class='nenhum-item'><p>Nenhum item na lista de desejos</p></div>";
                }
            ?>

            </div>
        </main>
    </body>
</html>

<?php
    include('../main_templates/header_footer/footer.php');
?>