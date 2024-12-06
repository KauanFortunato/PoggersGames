<?php
    session_start();
    include_once('../config_conta/config/consulta-carteira.php');
    include_once('../config_conta/config/consulta-carteira.php');

    if((!isset($_SESSION['email'])) == true and (!isset($_SESSION['senha'])) == true)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']);
    }
?>
<head>
    <link rel="icon" href="../img_geral/IconeLogo.ico" type="img/x-icon">
    <script src="./scripts/menu-header.js" defer></script>
</head>

<header class="cabecalho">
    <div id="cabecalho-background">
        <div class="logo" onclick="inicio_redi()">
            <img src="../img_geral/logo-pixel.png" alt="logo" style="height: 50px; width: 50px">
            <h4 class="titulo">Poggers Games</h4>
        </div>

        <div class="caixa-pesquisa">
            <input class="pesquisa-txt" id="pesquisa-game" type="text" placeholder="Pesquisa..." onkeyup="search_game()">
            <a class="pesquisa-btn" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </a>
        </div>
        
        <?php
            // Verificar se o usuário está autenticado
            if (isset($_SESSION['email']) && isset($_SESSION['senha']))
            {
                include_once('../config_conta/config/show-img.php');
                ?>
                <div class="container-user-options">
                    <div class="user-options">
                        <div id="peronalLink" class="icon-op">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1015" focusable="false" class="chakra-icon icon-css" xmlns="http://www.w3.org/2000/svg">
                                <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                            </svg>
                        </div>

                        <div id="cartLink" class="icon-op">
                            <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-cart icon-css" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            <div class="carrinho_qtd">
                                <p>
                                <?php
                                    include_once("../php/config.php");
                                    $id = $_SESSION['id_user'];
                                    $sql = "SELECT COUNT(*) AS quantidade FROM lista_e_compra WHERE id_user = $id AND tipo_lista = 1";
                                    $result = $mysqli->query($sql);

                                    if($result){
                                        $row = mysqli_fetch_assoc($result);
                                        $quantidade = $row['quantidade'];
                                        echo "$quantidade";
                                    }else{
                                        echo "0";
                                    }
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="content-user-options">
                        <div id="personal-options" class="elemento-escondido">
                            <div class="user-infos" >
                                <a href="../config_conta/pag-conta.php">
                                    <img id="img-user-bin" alt="Imagem User" src="../img_geral/logo.png" width="60px" height="60px">
                                    <h2>Olá, <?php echo $_SESSION['nome']?>!</h2>
                                </a>
                            </div>

                            <div class="content-list" >
                                <a href="../config_conta/lista-desejos.php" class="link-content-list">
                                    <div class="single-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart icon-content-css" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                        </svg>
                                        <p>Lista de Desejos</p>
                                        <div class="wishList_qtd">
                                            <p>
                                            <?php
                                                include_once("../php/config.php");
                                                $id = $_SESSION['id_user'];
                                                $sql = "SELECT COUNT(*) AS quantidade FROM lista_e_compra WHERE id_user = $id AND tipo_lista = 0";
                                                $result = $mysqli->query($sql);

                                                if($result){
                                                    $row = mysqli_fetch_assoc($result);
                                                    $quantidade = $row['quantidade'];
                                                    echo "$quantidade";
                                                }else{
                                                    echo "0";
                                                }
                                            ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="../config_conta/compras.php" class="link-content-list">
                                    <div class="single-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-check icon-content-css" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"></path>
                                        </svg>
                                        <p>Seus pedidos</p>
                                    </div>
                                </a>

                                <a href="../config_conta/carteira-pag.php" class="link-content-list">
                                    <div class="single-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-wallet icon-content-css" viewBox="0 0 16 14">
                                            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a2 2 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1"/>
                                        </svg>
                                        <p style="display:flex; width:100%; justify-content: space-between;">Carteira <label style="color: var(--color-primary);">€ <?php echo number_format(($_SESSION['dinheiro']), 2, ',', '');?></label></p>
                                    </div>
                                </a>

                                <!-- Opçao para os admins -->

                                <?php if($_SESSION['tipo-user'] == 'admin'){ ?>
                                <a href="../admin/admin_area.php" class="link-content-list">
                                    <div class="single-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bar-chart-line icon-content-css" viewBox="0 0 16 16">
                                            <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z"/>
                                        </svg>
                                        <p>Dashboard</p>
                                    </div>
                                </a>
                                <?php }?>

                                <a href="../php/logout.php" class="link-content-list">
                                    <div class="single-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle icon-content-css logout" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                        </svg>
                                        <p>Terminar Sessão</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div id="cart-options" class="elemento-escondido"> 
                            <h2 class="cart-h2">Carrinho</h2>
                            <div class="items-carts">
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
                                            <div class="single-item-cart">
                                                <div class="single-item-grid">
                                                    <div class="img-product">
                                                        <img src="../produtos/<?php echo $produto['imagem']; ?>" class="img-item-cart">
                                                    </div>

                                                    <div class="infos-acoes-item-cart">
                                                        <div class="infos-cart">
                                                            <div class="info-item">
                                                                <h2 class="cart-h2 nome_jogo"><?php echo $produto['nome'];?></h2>
                                                                <p class="subtext-cart tipo-jogo" style=""><?php echo $produto['tipo_prod'];?></p>
                                                            </div>

                                                            <div class="info-item-valor">
                                                                <p class="subtext-cart valor">€ <?php echo number_format(($produto['valor']), 2, ',', '');?></p>
                                                                <p class="subtext-cart valor_antigo" style="">€ <?php echo number_format(($produto['valor_antigo']), 2, ',', '');?></p>
                                                            </div>

                                                        </div>

                                                        <div class="acoes-item-cart">
                                                            <a onclick="change_list(<?php echo $produto['N_Produto']; ?>, 1)" class="subtext-cart">Lista de Desejos</a>

                                                            <a onclick="remove_carrinho(<?php echo$produto['N_Produto']?>)" class="subtext-cart" style="text-decoration: underline;">
                                                                Remove
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                    <hr>
                                    <div class="payment-infos">
                                        <h2 class="cart-h2">Subtotal</h2>
                                        <p class="subtext-cart">€ <?php echo number_format(($preco_final), 2, ',', ''); ?></p>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <p class="cart-empty">Seu carrinho está vazio</p>
                                    <?php
                                }
                                
                                ?>
                                
                                <form class="form-finalizar-cart <?php if($result->num_rows == 0){ echo "sem-item";}?>" action="../php/compra.php" method="post" <?php if($result->num_rows == 0){ echo "disabled";}?>>
                                    <input type="hidden" name="preco_final" value="<?php echo $preco_final; ?>">
                                    <input type="hidden" name="qtd_produtos" value="<?php echo $qtd_produtos; ?>">
                                    <?php
                                        $i = 0;
                                        while($i < count($produtos_comprados)){
                                            ?><input type="hidden" name="produto<?php echo $i ?>" value="<?php echo $produtos_comprados[$i]; ?>"><?php
                                            $i++;
                                        }
                                    ?>
                                    <button class="btn-finalizar <?php if($result->num_rows<=0){ echo 'cart-empty" disabled';}else{echo '"';} ?> type="submit">Compra agora</button>
                                    <a class="view-cart" href="./carrinho_compra.php">Ver carrinho</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            else
            {
                ?>
                <!-- onclick="login_cadastro()" -->
                <div class="user-off">
                    <div id="option-login-cadastro">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1015" focusable="false" class="chakra-icon icon-css" xmlns="http://www.w3.org/2000/svg">
                            <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                        </svg>
                    </div>
                    
                    <div id="box-user-off">
                        <div id="content-user-off-option" class="elemento-escondido">
                            <h2>Bem vindo de volta</h2>
                            <h3>Faça login para começar</h3>
                            <form action="../php/test-login.php" method="POST">
                                <div class="inputBox">
                                    <input type="text" name="email" id="email" class="inputUser" required>
                                    <label for="email" class="labelInput">Email</label>
                                </div>
                                

                                <div class="inputBox">
                                    <input type="password" name="senha" id="senha" class="inputUser" required>
                                    <label for="senha" class="labelInput">Senha</label>
                                </div>
                                
                                <div class="submitBox">
                                    <input type="submit" name="submit" id="submit" value="Entrar">
                                </div>
                                <a href="cadastro.php" id="cadastro"><p>Não tem conta? Crie aqui</p></a>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
        <script>
            var dadosBase64 = "<?php echo isset($dadosBase64) ? $dadosBase64 : ''; ?>";
            if (dadosBase64 !== "") {
                document.getElementById("img-user-bin").src = "data:image/jpg;base64," + dadosBase64;
            } else {
                console.log("Imagem não encontrada para o usuário logado.");
            }
        </script>
    </div>

    <div class="background-menu">
        <nav id="menu-h">
            <ul>
                <li class="item-menu"><a href="./todos-jogos.php" class="txt-menu-h">TODOS OS JOGOS</a></li>
                <li class="item-menu"><a href="./ofertas.php" class="txt-menu-h">OFERTAS</a></li>
                <li class="item-menu comunidade-red">
                    <a class="txt-menu-h">COMUNIDADE</a>
                    <span class="carret"></span>
                </li>
                <li class="item-menu container-comunidade">
                    <div class="txt-comunidade" onclick="pers_redi('https://discord.gg/vntQ3pHtPQ')"><span>Comunidade Discord</span></div>
                    <div class="txt-comunidade" onclick="pers_redi('../noticias/noticias.php')"><span>Blog</span></div>
                    <!-- <div><img class="img-comunidade discord" src="../img/discord-comunidade.png" width="100%"></div> -->
                </li>
            </ul>
        </nav>
    </div>

    <div class="menu-h-mobile">
        <input type="checkbox" id="check-menu-mobile">
        <label for="check-menu-mobile">
            <div class="menu-icon-mobile">
                <div class="seta-para-baixo"></div>
            </div>
        </label>

        <div class="menu-comunidade-mobile">
            <div class="txt-comunidade-mobile" onclick="pers_redi('../main_templates/todos-jogos.php')"><span>Todos os Jogos</span></div>
            <div class="txt-comunidade-mobile" onclick="pers_redi('../main_templates/ofertas.php')"><span>Ofertas</span></div>
            <div class="txt-comunidade-mobile" onclick="pers_redi('https://discord.gg/vntQ3pHtPQ')"><span>Comunidade Discord</span></div>
            <div class="txt-comunidade-mobile" onclick="pers_redi('../noticias/noticias.php')"><span>Blog</span></div>
        </div>

        <div class="caixa-pesquisa-mobile">
            <input class="pesquisa-txt-menu" id="pesquisa-game-mob" type="text" placeholder="Pesquisa..." onkeyup="search_game_mobile()">
            <!-- <input class="pesquisa-txt-menu" id="pesquisa-game" type="text" placeholder="Jogos de PC e Console" onkeyup="search_game()"> -->
            <a class="pesquisa-btn" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </a>
        </div>
    </div>
</header>