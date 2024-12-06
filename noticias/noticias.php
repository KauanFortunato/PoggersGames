<?php
    include('../main_templates/header_footer/header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <link rel="stylesheet" href="./css/style-noticias.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <script src="../main_templates/scripts/master-template.js"></script>
        <script src="../scripts/menu-header.js" defer></script>
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">

        <title>Poggers Games</title>
    </head>
    <body>
        <div class="container-noticias">
            <div class="titulo-noticias"><h1>CONFIRA TODAS AS NOTÍCIAS DE GAMES</h1></div>
            <ul class="lista-noticia">
                <li class="noticia">
                    <div class="grid">
                        <div class="thumb">
                            <img src="./img_noticias/the-game-awards.jpg">
                        </div>

                        <div class="info-noticia">
                            <h3><a href="./noticia-tga.php">Confira a lista com TODOS os indicados ao The Game Awards 2023</a></h3>
                        </div>
                        <div class="meta">
                            <span class="autor">Por
                                <a href="#">Kauan Fortunato</a></span>
                            <span class="data">17.12.2023 às 23:09</span>
                        </div>
                    </div>
                </li>
                
                <li class="noticia">
                    <div class="grid">
                        <div class="thumb">
                            <img src="./img_noticias/Jason-Lucia-GTA-6.webp">
                        </div>

                        <div class="info-noticia">
                            <h3><a href="#">Insano: em 2 dias, GTA VI bate o que GTA V levou em 12 anos</a></h3>
                        </div>
                        <div class="meta">
                            <span class="autor">Por
                                <a href="#">Kauan Fortunato</a></span>
                            <span class="data">17.12.2023 às 22:01</span>
                        </div>
                    </div>
                </li>

                <li class="noticia">
                    <div class="grid">
                        <div class="thumb">
                            <img src="./img_noticias/Hogwarts-Legacy.webp">
                        </div>

                        <div class="info-noticia">
                            <h3><a href="#">Hogwarts Legacy é o jogo mais pesquisado no Goggle em 2023</a></h3>
                        </div>
                        <div class="meta">
                            <span class="autor">Por
                                <a href="#">Kauan Fortunato</a></span>
                            <span class="data">16.12.2023 às 18:56</span>
                        </div>
                    </div>
                </li>

                <li class="noticia">
                    <div class="grid">
                        <div class="thumb">
                            <img src="./img_noticias/twitch.png">
                        </div>

                        <div class="info-noticia">
                            <h3><a href="#">Liberou tudo? Twitch atualiza diretrizes sobre conteúdo sexual</a></h3>
                        </div>
                        <div class="meta">
                            <span class="autor">Por
                                <a href="#">Kauan Fortunato</a></span>
                            <span class="data">15.12.2023 às 15:42</span>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="branco"></div>
        </div>
        
    </body>
</html>

<?php
    include('../main_templates/header_footer/footer.php');
?>