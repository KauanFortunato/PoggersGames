<?php
    include_once('./header_footer/header.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style_header_footer.css">
        <link rel="stylesheet" type="text/css" href="./css/carrinho_style.css">
        <link rel="icon" href="../img_geral/IconeLogo.ico" type="img/x-icon">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="./scripts/master-template.js"></script>
        <script src="./scripts/edit-lista.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <title> Poggers Games</title>
    </head>
    <body>
        <main>
            <div class="sem-dinheiro">
                <p>Saldo insuficiente para compra</p>
            </div>

            <div class="grid-container">
                <div class="titulo-grid"><p>Faturação e Pagamentos</p></div>

                <div class="carrinho-titulo">
                    <p>Carrinho</p>
                </div>

                <div class="grid-cart-items">
                    <?php
                        include_once("../php/config.php");

                        $preco_official = 0;
                        $preco_final = 0;
                        $qtd_produtos = 0;
                        $produtos_comprados = [];

                        $id_user = $_SESSION['id_user'];
                        $sql = "SELECT * FROM lista_e_compra WHERE id_user = '$id_user' AND tipo_lista = 1";
                        $result = $mysqli->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $produto_id = $row['N_Produto'];
                                $produtos_comprados[] = $row['N_Produto'];

                                $sql_produto = "SELECT * FROM produto WHERE N_Produto = '$produto_id'";
                                $result_produto = $mysqli->query($sql_produto);
                                
                                if($result_produto->num_rows > 0){
                                    $produto = $result_produto->fetch_assoc();
                                    $preco_official += $produto['valor_antigo'];
                                    $preco_final += $produto['valor'];
                                    $qtd_produtos ++;
                                    ?>
                                    <div class="cart-item">
                                        <div class="item">
                                            <div class="thumb-game">
                                                <img src="../produtos/<?php echo $produto['imagem']; ?>">
                                            </div>

                                            <div class="titulo-game">
                                                <a href="../pagina_produtos/<?php echo $produto['pagina'];?>"><p><?php echo $produto['nome'];?></p></a>

                                                <div class="acoes">
                                                    <a onclick="remove_carrinho(<?php echo$produto['N_Produto']?>)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                                        </svg>
                                                    </a>
                                                    <a onclick="change_list(<?php echo $produto['N_Produto']; ?>, 1)">Lista de Desejos</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="preco-game"><p><?php echo $produto['valor']; ?>€</p></div>
                                    </div>
                                    <?php
                                }
                            }
                        }else{?>
                            <div class="cart-item erro-msg">
                                <p>Nenum item no carrinho</p>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                
                <div class="compra-titulo">
                    <p>Sumário</p>
                </div>

                <div class="grid-compra">
                    <div class="linha">
                        <span>Preço Oficial</span>
                        <span><?php echo $preco_official;?>€</span>
                    </div>

                    <div class="linha">
                        <span>Desconto</span>
                        <span>-<?php echo $preco_official - $preco_final;?>€</span>
                    </div>

                    <div class="linha">
                        <span>Subtotal</span>
                        <span><?php echo $preco_final;?>€</span>
                    </div>
                    
                    <form class="form-finalizar <?php if($result->num_rows == 0){ echo "sem-item";}?>" action="../php/compra.php" method="post" <?php if($result->num_rows == 0){ echo "disabled";}?>>
                        <input type="hidden" name="preco_final" value="<?php echo $preco_final; ?>">
                        <input type="hidden" name="qtd_produtos" value="<?php echo $qtd_produtos; ?>">
                        <?php
                            $i = 0;
                            while($i < count($produtos_comprados)){
                                ?><input type="hidden" name="produto<?php echo $i ?>" value="<?php echo $produtos_comprados[$i]; ?>"><?php
                                $i++;
                            }
                        ?>
                        <button class="btn-finalizar" type="submit">Compra agora</button>
                    </form>

                    <form class="codigo-desconto">
                        <span>Código de Desconto</span>
                        <div class="input-desconto">
                            <input type="text" maxlength="10">
                            <button>Aplicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
<?php
    include_once('./header_footer/footer.php');
?>