<?php
    include('./header_footer/header.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style_header_footer.css">
        <link rel="stylesheet" type="text/css" href="./css/ofertas_style.css">
        <link rel="icon" href="../img_geral/IconeLogo.ico" type="img/x-icon">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta charset="utf-8">

        <title> Poggers Games</title>

        <script src="./scripts/pesquisa.js"></script>
        <script src="./scripts/master-template.js"></script>
    </head>
    <body>
        <main>
            <div class="background-pag">
                <div class="background"></div>
                <div class="titulo-pag"><h1>Melhores Ofertas</h1></div>
                <div class="info-todos-jogos">
                    <p>Aqui é onde você pode encontrar nossas melhores ofertas.
                        As melhores ofertas para você ficar feliz com o preço, e o jogo que comprou.</p>
                </div>
            </div>
            
            <div class="grid-items-filtro">
                <div class="grid-container">
                    <?php 
                        include_once("../php/config.php");

                        $sql_ofertas = "SELECT * FROM ofertas";
                        $result_ofertas = $mysqli->query($sql_ofertas);

                        if($result_ofertas->num_rows > 0) {
                            while($produto = $result_ofertas->fetch_assoc()) {
                                ?>
                                <div class="grid-item">
                                    <a href="../pagina-produtos/<?php echo $produto['pagina']?>">
                                        <img src="../produtos/<?php echo $produto['imagem']?>" alt="imagem-item">
                                    </a>

                                    <div class="information">
                                        <div class="title-item"><p><?php echo $produto['nome']; ?></p></div>
                                        <div class="desconto-item">
                                            <div class="porcent-desconto"><p>-50%</p></div>
                                            <div class="desconto"><p>34,72€</p></div>
                                            <div class="price-item"><p>17,36€</p></div>
                                        </div>
                                    </div>

                                    <div class="compra-desejo-btn">
                                        <button class="compra-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-cart" viewBox="0 0 17 15">
                                                <path stroke="white" stroke-width="1" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                            </svg>
                                            <span>Comprar</span>
                                        </button>
                                        <button class="desejo-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart" viewBox="0 0 16 18">
                                                <path stroke="white" stroke-width="1" d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>

                    <div class="erro-pesquisa" id="erro-pesquisa">
                        <div class="logo-chorando">
                            <img src="../img_geral/logo-chorando-true.png" width="90px" height="auto">
                        </div>
                        <div class="text-erro-pesquisa">
                            <p>Desculpe. Não encontramos nenhum resultado.
                                Por favor, verifique sua pesquisa, e tente novamente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

<?php
    include('./header_footer/footer.php');
?>
