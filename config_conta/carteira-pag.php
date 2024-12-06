<?php
    include('../main_templates/header_footer/header.php');
    include('./master-template-conta.php');
    include('./config/consulta-carteira.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" href="../img/IconeLogo.ico" type="img/x-icon">
        
        <link rel="stylesheet" type="text/css" href="../css/main-styles.css">
        <link rel="stylesheet" type="text/css" href="./css/main-style-conta.css">
        <link rel="stylesheet" type="text/css" href="./css/carteira-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title> Poggers Games</title>
        <script src="../main_templates/scripts/menu-header.js"></script>
        <script src="./scripts/add-dinheiro-carteira.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>

    <body>
        <section class="align-items">
            <div class="add-fundos">
                <div class="container-fundos">
                    <div class="fundo-item">
                        <p>Adicionar 5.00€</p>

                        <div class="info-fundos">
                            <p>5.00€</p>
                            <div class="btn-fundos" onclick="addDinheiro(5)">
                                <span>Adicionar Fundos</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="fundo-item">
                        <p>Adicionar 10.00€</p>

                        <div class="info-fundos">
                            <p>10.00€</p>
                            <div class="btn-fundos" onclick="addDinheiro(10)">
                                <span>Adicionar Fundos</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="fundo-item">
                        <p>Adicionar 20.00€</p>

                        <div class="info-fundos">
                            <p>20.00€</p>
                            <div class="btn-fundos" onclick="addDinheiro(20)">
                                <span>Adicionar Fundos</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="fundo-item">
                        <p>Adicionar 100.00€</p>

                        <div class="info-fundos">
                            <p>100.00€</p>
                            <div class="btn-fundos" onclick="addDinheiro(100)">
                                <span>Adicionar Fundos</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="fundo-item">
                        <p>Adicionar 150.00€</p>

                        <div class="info-fundos">
                            <p>150.00€</p>
                            <div class="btn-fundos" onclick="addDinheiro(150)">
                                <span>Adicionar Fundos</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="fundo-item">
                        <p>Adicionar 200.00€</p>

                        <div class="info-fundos">
                            <p>200.00€</p>
                            <div class="btn-fundos" onclick="addDinheiro(200)">
                                <span>Adicionar Fundos</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="detalhe-conta">
                    <h1>Sua conta Poggers</h1>
                    <div class="container-conta">
                        <div class="saldo-conta">
                            <p>Saldo atual da Carteira</p>
                            <h1 class="saldo"><?php echo $_SESSION['dinheiro'] ?>€</h1>
                        </div>
                        <p class="id_carteira">id_carteira: <?php echo $_SESSION['id_carteira'] ?></p>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

<?php
    include('../main_templates/header_footer/footer.php');
?>
