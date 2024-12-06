<?php
    include('../main_templates/header_footer/header.php');
    include('./config/config-produtos.php');
    $chavePrimaria = 4;
    obterDadosProduto($mysqli, $chavePrimaria);

    $dadosProduto = $_SESSION['produto_dados'];
    $nome_prod = $dadosProduto['nome'];
    $valor = $dadosProduto['valor'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <link rel="stylesheet" type="text/css" href="./css/style-pag-produto.css">
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="utf-8">
        <title> Poggers Games</title>

        <script src="../main_templates/scripts/master-template.js"></script>
    </head>
    <body>
        <div class="grid-container">
            <div class="background-game">
                <img src="../produtos/death-stranding/background-death-stranding-directors.jpg" alt="">
            </div>

            <div class="prev-foto">
                <a class="prev" onclick="plusSlides(-1)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
                    </svg>
                </a>
            </div>

            <div class="imagens-produto">
                <div class="slides-produto">
                    <video width="600" height="337" controls>
                        <source src="../produtos/death-stranding/death-stranding-trailer.mp4" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                </div>

                <div class="slides-produto">
                    <img src="../produtos/death-stranding/1.webp" alt="slide 1">
                </div>

                <div class="slides-produto">
                    <img src="../produtos/death-stranding/2.jpg" alt="slide 3">
                </div>

                <div class="slides-produto">
                    <img src="../produtos/death-stranding/3.jpg" alt="slide 2">
                </div>

                <div class="slides-produto">
                    <img src="../produtos/death-stranding/4.jpg" alt="slide 4">
                </div>

                <div class="slides-produto">
                    <img src="../produtos/death-stranding/5.jpg" alt="slide 5">
                </div>
            </div>

            <div class="next-foto">
                <a class="next" onclick="plusSlides(1)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                    </svg>
                </a>
            </div>
                        
            <div class="preview-img">
                <div class="previews">
                    <img src="../produtos/skyrim/video-game.png" alt="slide 1" onclick="slideAtual(1)">
                </div>

                <div class="previews">
                    <img src="../produtos/death-stranding/0.jpg" alt="slide 1" onclick="slideAtual(2)">
                </div>

                <div class="previews">
                    <img src="../produtos/death-stranding/1.webp" alt="slide 2" onclick="slideAtual(3)">
                </div>

                <div class="previews">
                    <img src="../produtos/death-stranding/2.jpg" alt="slide 3" onclick="slideAtual(4)">
                </div>

                <div class="previews">
                    <img src="../produtos/death-stranding/3.jpg" alt="slide 4" onclick="slideAtual(5)">
                </div>

                <div class="previews">
                    <img src="../produtos/death-stranding/4.jpg" alt="slide 5" onclick="slideAtual(6)">
                </div>

                <div class="previews">
                    <img src="../produtos/death-stranding/5.jpg" alt="slide 6" onclick="slideAtual(7)">
                </div>
            </div>

            <div class="preco-compra-produto">
                <?php
                    echo
                    '<h4>'.$nome_prod.'</h4>'
                ?>
                    <!-- <h4>The Elder Scrolls V:<br>Skyrim Special Edition</h4> -->
                <br>
                <?php
                    echo'<h3>'.$valor.'€</h3>'
                ?>
                <div class="comprar-desejos">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 17 15">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                        <span>Comprar</span>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-heart heart-icon" viewBox="0 0 17 13">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                        </svg>
                        <span>Lista de desejos</span>
                    </a>
                </div>
                
            </div>

            <div class="informacao-produto">
                <h4>Requisitos do Sistema</h4>
                <div class="requisitos-game">
                    <ul>
                        <li>
                            <p>Windows 10/11 (versão de 64 bits)</p>
                        </li>
                        <li>
                            <p>Processador: Intel Core i5-3470 ou AMD Ryzen 3 1200</p>
                        </li>
                        <li>
                            <p>Memória: 8GB RAM</p>
                        </li>
                        <li>
                            <p>Gráficos: GeForce GTX 1050 4 GB ou AMD Radeon RX 560 4 GB</p>
                        </li>
                        <li>
                            <p>Armazenamento: 80 GB de espaço disponível</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <script src="../main_templates/scripts/slide-produtos.js"></script>
    </body>
</html>
<?php
    include('../main_templates/header_footer/footer.php');
?>