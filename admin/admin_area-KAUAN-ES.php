<?php
    session_start();
    // include('../main_templates/header_footer/header.php');

    if($_SESSION['tipo-user'] != 'admin'){
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">
        <link rel="stylesheet" type="text/css" href="../main_templates/css/style_header_footer.css">
        <link rel="stylesheet" href="./css/style_admin_area.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title> Poggers Games</title>

        <script src="../main_templates/scripts/master-template.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="./scripts/dashboard.js"></script>
    </head>
    <body>
        <header>
            <div class="info-header">
                <?php
                include('../config_conta/config/show-img.php');
                ?>

                <div class="logo" onclick="inicio_redi()">
                    <img src="../img_geral/logo-pixel.png" alt="logo" style="height: 50px; width: 50px">
                    <h4 class="titulo">Poggers Games</h4>
                </div>
            </div>

            <div class="info-header" style="align-items: center;">
                <svg class="icons-header" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                </svg>

                <svg class="icons-header" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
                </svg>
                <div class="menu-admin">
                    <img id="img-user-bin" alt="Imagem User" src="../img_geral/logo.png">
                    <div class="menu">
                        <div class="menu-item">
                            <div class="info-user">
                                <img id="img-user-bin2" alt="Imagem User" src="../img_geral/logo.png">
                                <span><?php echo $_SESSION['nome'] ?></span>
                            </div>
                            
                            <div class="logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="menu-item">
                           
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script>
            var dadosBase64 = "<?php echo isset($dadosBase64) ? $dadosBase64 : ''; ?>";

            if (dadosBase64 !== ""){
                document.getElementById("img-user-bin").src = "data:image/jpg;base64," + dadosBase64;
                document.getElementById("img-user-bin2").src = "data:image/jpg;base64," + dadosBase64;
            } else {
                console.log("Imagem não encontrada para o usuário logado.");
            }
        </script>

        <section class="main">
            <div class="sidebar">
                <h3>Home</h3>
                <a id="relatorios-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                </svg>Relatorios</a>

                <a href="#" id="estatisticas-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z"/>
                </svg>Estatísticas</a>

                <a href="#" id="add-produto-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>Adicionar Produto</a>
                <br>
                <!-- <div class="separator"></div> -->
                <h3>Gerenciamento</h3>
                <a href="#" id="usuarios-manage"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                </svg>Usuários</a>

                <a href="#" id="produtos-manage"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                </svg>Produtos</a>

                <a href="#" id="carteiras-manage"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a2 2 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1"/>
                </svg>Carteiras</a>
                <br>
            </div><!--sidebar-->

            <div class="content">
                <div id="relatorios-content" class="relatorios">
                    <?php 
                        include_once('../php/config.php');
                        $vendas_total = 0;
                        $qtd_produtos = 0;

                        $sql_relatorio = "SELECT * FROM compra";
                        $stmt = $mysqli->prepare($sql_relatorio);
                        $stmt->execute();

                        $resultado = $stmt->get_result();

                        if($resultado->num_rows > 0){
                            while($row = $resultado->fetch_assoc()){
                                $vendas_total += $row['valor_compra'];
                                $qtd_produtos +=  $row['qtd_produtos'];
                            }
                        }
                    ?>
                    <div class="titulo-secao">
                        <h2>Dashboard Vendas</h2>
                        <br>
                        <div class="separator"></div>
                        <br>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg> / Dashboard Poggers</p>
                    </div>
                    
                    <div class="box-info">
                        <div style="background: linear-gradient(45deg, #b02b63, #e0347c)" class="box-info-single">
                            <div class="info-text">
                                <p>Lucro Total</p>
                                <h3><?php echo number_format((0.15*$vendas_total), 2, ',', ''); ?>€</h3>
                                
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                            </svg>
                        </div>

                        <div style="background: linear-gradient(45deg, #4099ff, #73b4ff)" class="box-info-single">
                            <div class="info-text">
                                <p>Vendas Total</p>
                                <h3><?php echo number_format(($vendas_total), 2, ',', ''); ?>€</h3>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                            </svg>
                        </div>

                        <div style="background: linear-gradient(45deg, #07a024, #2ed04d)" class="box-info-single">
                            <div class="info-text">
                                <p>Produtos Vendidos</p>
                                <h3><?php echo $qtd_produtos ?></h3>
                                <!-- <p style="width: 100%">Esse mês <span class="float-end">10</span></p> -->
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                            </svg>
                        </div>
                    </div>

                    <div class="feed-graphic">
                        <div class="graphic">
                            <?php 
                                include_once('../php/config.php');

                                $sql = "SELECT MONTH(data) as mes, SUM(qtd_produtos) as total_produtos FROM compra GROUP BY mes";
                                $result = $mysqli->query($sql);

                                $labels = [];
                                $data = [];
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $labels[] = date("M", mktime(0, 0, 0, $row["mes"], 1));
                                        $data[] = $row["total_produtos"];
                                    }
                                }
                            ?>
                            <canvas id="grafico1" style="width: 500px; height: 500px"></canvas>
                        </div>

                        <div class="feed">
                            <div class="title-feed">
                                <h3>Feed Compras</h3>
                                <div class="reload-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                                    </svg>
                                </div>
                            </div>
                            <?php
                                include_once('../php/config.php');
                                $sql_feed = "SELECT *, TIMESTAMPDIFF(MINUTE, data, NOW()) AS minutos_passados
                                FROM compra WHERE DATE(data) = CURDATE() ORDER BY minutos_passados ASC LIMIT 8";

                                $stmt = $mysqli->prepare($sql_feed);
                                $stmt->execute();

                                $resultado = $stmt->get_result();

                                if($resultado->num_rows > 0){
                                    while($row = $resultado->fetch_assoc()){
                                        ?>
                                        <div class="feed-single">
                                            <div class="feed-text">
                                                <div class="icon-feed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                                                    </svg>
                                                </div>
                                                <span><?php echo $row['nota'] ?></span>
                                            </div>
                                            <div class="feed-time">
                                                <p>
                                                <?php
                                                    if($row['minutos_passados'] == 0){
                                                        echo "Agora mesmo";
                                                    }else{
                                                        if($row['minutos_passados'] >= 60){
                                                            echo "Há " . number_format(($row['minutos_passados']/60), 0, ',', '') . " horas";
                                                        }else{
                                                            echo "Há " . $row['minutos_passados'] . " minutos";
                                                        }
                                                    }
                                                ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }else{?>
                                    <p class="no-notify">Nenhuma Notificação</p><?php
                                }
                            ?>
                            
                        </div>
                    </div><!--feed-graphic-->

                    <div class="feed-usuarios">
                        <div class="feed">
                            <div class="title-feed">
                                <h3>Feed Usuários</h3>
                                <div class="reload-ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                                    </svg>
                                </div>
                            </div>
                            <?php
                                include_once('../php/config.php');
                                $sql_feed = "SELECT *, TIMESTAMPDIFF(MINUTE, data_criacao, NOW()) AS minutos_passados
                                FROM usuario WHERE DATE(data_criacao) = CURDATE() ORDER BY minutos_passados ASC";

                                $stmt = $mysqli->prepare($sql_feed);
                                $stmt->execute();

                                $resultado = $stmt->get_result();

                                if($resultado->num_rows > 0){
                                    while($row = $resultado->fetch_assoc()){
                                        ?>
                                        <div class="feed-single">
                                            <div class="feed-text">
                                                <div class="icon-feed">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                                    </svg>
                                                </div>
                                                <span>Novo usuário</span>
                                            </div>
                                            <div class="feed-time">
                                                <p>
                                                <?php
                                                    if($row['minutos_passados'] == 0){
                                                        echo "Agora mesmo";
                                                    }else{
                                                        if($row['minutos_passados'] >= 60){
                                                            echo "Há " . number_format(($row['minutos_passados']/60), 0, ',', '') . " horas";
                                                        }else{
                                                            echo "Há " . $row['minutos_passados'] . " minutos";
                                                        }
                                                    }
                                                ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }else{?>
                                    <p class="no-notify">Nenhuma Notificação</p><?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div><!--relatorios-->

                <div id="estatisticas-content" class="estatisticas">
                    <div class="titulo-secao">
                        <h2>Dashboard Estatísticas</h2>
                        <br>
                        <div class="separator"></div>
                        <br>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg> / Dashboard Poggers</p>
                    </div>

                    <div class="graphics">
                        <div class="graphic-single">
                            <?php
                                include_once('../php/config.php');
                                
                                $sql = "SELECT * FROM produto WHERE comprados > 0 ORDER BY comprados DESC LIMIT 5";
                                $result = $mysqli->query($sql);

                                $nomes = [];
                                $vendas = [];
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        $nomes[] = $row['nome'];
                                        $vendas[] = $row['comprados'];
                                    }
                                }
                            ?>
                            <canvas id="bar1"></canvas> 
                        </div>

                        <div class="graphic-single">
                            <?php
                                include_once('../php/config.php');
                                $sql = "SELECT COUNT(*) AS total_users FROM usuario";
                                $stmt = $mysqli->prepare($sql);
                                $stmt->execute();
                                $stmt->bind_result($total_users);
                                $stmt->fetch();
                                $stmt->close();

                                $data_limite = date('Y-m-d', strtotime('-3 months'));
                                $sql = "SELECT
                                    SUM(CASE WHEN data_criacao >= '$data_limite' THEN 1 ELSE 0 END) as novos,
                                    SUM(CASE WHEN data_criacao < '$data_limite' THEN 1 ELSE 0 END) as antigos
                                    FROM usuario";
                                $result = $mysqli->query($sql);

                                $novos = 0;
                                $antigos = 0;
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $novos = $row['novos'];
                                    $antigos = $row['antigos'];
                                }
                            ?>
                            <div class="graphic-info">
                                <p>Usuários</p>
                            </div>
                            <span><?php echo $total_users ?></span>

                            <canvas id="grafico2"></canvas>

                            <div class="graphic-subtitle">
                                <p class="users-subtitle"><?php echo $antigos ?></p>
                                <p class="users-subtitle"><?php echo $novos ?></p>
                            </div>
                            <p class="subtitle">Antigos</p>
                            <p class="subtitle">Novos</p>
                        </div>

                        <div class="graphic-single">
                            <?php
                                include_once('../php/config.php');
                                $data_18 = date('Y-m-d', strtotime('-18 years'));

                                $sql = "SELECT COUNT(*) AS total FROM usuario WHERE nascimento <= ?";
                                $stmt = $mysqli->prepare($sql);
                                $stmt->bind_param('s', $data_18);
                                $stmt->execute();
                                $resultado = $stmt->get_result();
                                $row = $resultado->fetch_assoc();
                                $user_maiores = $row['total'];
                            ?>
                            <div class="graphic-info">
                                <p>Usuários maiores</p>
                            </div>
                            <canvas id="grafico3"></canvas>
                            
                            <div class="graphic-subtitle">
                                <p class="users-subtitle"><?php echo $user_maiores ?></p>
                                <p class="users-subtitle"><?php echo $total_users-$user_maiores ?></p>
                            </div>
                            <p class="subtitle">Maiores</p>
                            <p class="subtitle">Menores</p>
                        </div>
                    </div>
                </div><!--estatisticas-->
                
                <div id="adicionar-produto-content" class="adicionar produto">
                    <div class="titulo-secao">
                        <h2>Dashboard Adicionar Produto</h2>
                        <br>
                        <div class="separator"></div>
                        <br>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg> / Dashboard Poggers</p>
                    </div>
                    
                    <div class="add-prod">
                        <form action="#">
                            <div class="input-box">
                                <input type="text" name="nome" id="nome">
                                <label for="nome">Nome Do Produto</label>
                            </div>

                            <div class="input-box">
                                <input type="number" name="valor" id="valor">
                                <label for="nome">Valor Do Produto</label>
                            </div>

                            <div class="input-box">
                                <input type="number" name="valor_antigo" id="valor_antigo">
                                <label for="nome">Valor Antigo Do Produto</label>
                            </div>

                            <div class="input-box">
                                <input type="number" name="valor" id="valor">
                                <label for="nome">Valor Do Produto</label>
                            </div>
                        </form>
                    </div>
                    
                </div><!--adicionar-produto-->

                <div id="user-manage-content">
                    
                </div>

                <script>
                    const ctx4 = document.getElementById('bar1');

                    new Chart(ctx4, {
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($nomes); ?>,
                            datasets: [{
                                label: 'Vendidos:',
                                data: <?php echo json_encode($vendas); ?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                ],
                                borderColor: 'transparent'
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callback: function(value) {
                                            var maxLength = 10;
                                            return value.length > maxLength ? value.substr(0, maxLength - 3) + '...' : value;
                                        }
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });

                    const ctx = document.getElementById('grafico1');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($labels); ?>,
                            datasets: [{
                                label: 'Vendas Mensal',
                                data: <?php echo json_encode($data); ?>,
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)', 
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                backgroundColor: 'transparent',
                                borderWidth: 2
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });

                    const ctx2 = document.getElementById('grafico2');

                    new Chart(ctx2, {
                        type: 'doughnut',
                        label: ['Novos', 'Antigos'],
                        data: {
                            datasets: [{
                                label: 'Usuários',
                                data: [<?php echo $novos; ?>, <?php echo $antigos; ?>],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                ],
                                backgroundColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgb(46, 216, 182, 1)'
                                ],
                                borderWidth: 0
                            }]
                        }
                    });

                    const ctx3 = document.getElementById('grafico3');

                    new Chart(ctx3, {
                        type: 'doughnut',
                        label: ['Novos', 'Antigos'],
                        data: {
                            datasets: [{
                                label: 'Usuários',
                                data: [<?php echo $total_users-$user_maiores; ?>, <?php echo $user_maiores; ?>],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                ],
                                backgroundColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgb(46, 216, 182, 1)'
                                ],
                                borderWidth: 0
                            }]
                        }
                    });
                </script>
            </div><!--content-->
        </section><!--main-->
    </body>
</html>

<?php
    // include('../main_templates/header_footer/footer.php');
?>