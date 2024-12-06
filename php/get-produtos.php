<?php
$ordenarPor = isset($_GET['ordenarPor']) ? $_GET['ordenarPor'] : 'lancamento';

function getProdutosHTML($ordenarPor) {
    include_once("../php/config.php");
    ob_start(); // Inicia o buffer de saída
    ?>
    <div class="grid-container">
        <?php
        if ($ordenarPor == 'mais-barato'){
            $sql_produtos = "SELECT * FROM produto ORDER BY valor";
        }elseif($ordenarPor == 'mais-caro'){
            $sql_produtos = "SELECT * FROM produto ORDER BY valor DESC";
        }else{
            $sql_produtos = "SELECT * FROM produto ORDER BY $ordenarPor";
        }
        
        # Seleciona tudo na tabela de produto
        $result_produtos = $mysqli->query($sql_produtos);

        if ($result_produtos->num_rows > 0) {
            while ($produto = $result_produtos->fetch_assoc()){
                ?>
                <div class="grid-item">
                    <a href="../pagina_produtos/<?php echo $produto['pagina']; ?>">
                        <img src="../produtos/<?php echo $produto['imagem']; ?>" alt="imagem-item">
                    </a>
                    <div class="information">
                        <div class="title-item"><p><?php echo $produto['nome']; ?></p></div>

                        <?php 
                        if($produto['valor_antigo'] != $produto['valor']){
                        ?>
                            <div class="desconto-item">
                                <div class="porcent-desconto"><p>-<?php if (($produto['valor_antigo']-$produto['valor'])/$produto['valor_antigo']*100 != 0){
                                                                    echo number_format((($produto['valor_antigo']-$produto['valor'])/$produto['valor_antigo']*100), 0, ',', '');
                                                                }else{
                                                                    echo '100';
                                                                } ?>%</p>
                                                                </div>
                                <div class="desconto"><p><?php echo number_format(($produto['valor_antigo']), 2, ',', ''); ?>€</p></div>
                                <div class="price-item"><p><?php echo number_format(($produto['valor']), 2, ',', ''); ?>€<p></div>
                            </div>
                        <?php
                        }else{?>
                            <div class="price-item-nodiscount"><p><?php echo number_format(($produto['valor']), 2, ',', ''); ?>€<p></div>
                        <?php
                        } ?>
                        
                    </div>
                    <div class="compra-desejo-btn">
                        <form class="compra-form" action="../php/add-carrinho.php" method="post">
                            <input type="hidden" name="N_Produto" value="<?php echo $produto['N_Produto']; ?>">
                            <button class="compra-btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart" viewBox="0 0 17 15">
                                    <path stroke="white" stroke-width="1" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                </svg>
                                <span>Comprar</span>
                            </button>
                        </form>
                        

                        <form action="../php/add-lista.php" method="post" class="desejo-btn form-jogo" data-produto="<?php echo $produto['N_Produto']; ?>">
                            <input type="hidden" name="N_Produto" value="<?php echo $produto['N_Produto']; ?>">
                            <div class="desejo-icon" onclick="submitForm(this)">
                                <?php
                                if (isset($_SESSION['email']) && isset($_SESSION['senha'])){
                                    $id_user = $_SESSION['id_user'];
                                    $N_Produto = $produto['N_Produto'];
                                    $sql_verificar = "SELECT * FROM lista_e_compra WHERE id_user = '$id_user' AND N_Produto = '$N_Produto' AND tipo_lista = 0";
                                    $resultado = $mysqli->query($sql_verificar);

                                    if ($resultado->num_rows > 0) {
                                        ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                        </svg>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart" viewBox="0 0 16 18">
                                            <path stroke="white" stroke-width="1" d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                        </svg>
                                        <?php
                                    }
                                    
                                }else{
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart" viewBox="0 0 16 18">
                                        <path stroke="white" stroke-width="1" d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                    </svg>
                                <?php
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "Nenhum produto encontrado.";
        }
        ?>
    </div>
    <?php
    // Retorna o conteúdo do buffer de saída
    return ob_get_clean();
}

// Use a função para obter o HTML dos produtos
$htmlProdutos = getProdutosHTML($ordenarPor);

// Retorne o HTML dos produtos
echo $htmlProdutos;
?>
