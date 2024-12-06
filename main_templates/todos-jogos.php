<?php
    include('./header_footer/header.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style_header_footer.css">
        <link rel="stylesheet" type="text/css" href="./css/grid_container_item.css">
        <link rel="stylesheet" type="text/css" href="./css/todos-jogos-style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="./scripts/master-template.js"></script>
        <script src="./scripts/pesquisa.js"></script>
        <script src="./scripts/todos-jogos-filter.js"></script>

        <meta charset="utf-8">

        <title> Poggers Games</title>
    </head>
    <body>
        <main>
            <div class="background-pag">
                <div class="background"></div>
                <div class="titulo-pag"><h1>Todos os Produtos</h1></div>
                <div class="info-todos-jogos">
                    <p>Aqui é onde você pode encontrar todos os nossos games de PC.
                        Temos os melhores games a venda e no melhor preço, ajudando você a economizar mais quando quiser algum jogo novo.</p>
                </div>
            </div>

            <div class="grid-items-filtro">
                <div class="grid-container-filtro">
                    <div class="filtro-item">
                        <div class="txt-filtro">
                            <p>Filtrar por preço</p>
                        </div>
                        <div class="caixa-opcoes">
                            <select name="ordenar-por" id="ordenar-por-select">
                                <option name="none" value="lancamento">---Selecione---</option>
                                <option name="lancamento" value="lancamento">Lançamento</option>
                                <option name="mais-caro" value="mais-caro">Mais Caro</option>
                                <option name="mais-barato" value="mais-barato">Mais Barato</option>
                            </select>
                        </div>
                    </div>

                    <div class="filtro-item">
                        <div class="txt-filtro">
                            <p>Filtrar por tipo</p>
                        </div>
                        <div class="caixa-opcoes">
                            <div class="select-tipo">
                                <input type="checkbox" id="check-jogo">
                                <label for="check-jogo" class="check-tipo-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                    </svg>
                                </label>
                                <label for="check-jogo"><p>Jogo</p></label>
                            </div>

                            <div class="select-tipo">
                                <input type="checkbox" id="check-gift-card">
                                <label for="check-gift-card" class="check-tipo-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                    </svg>
                                </label>
                                <label for="check-gift-card"><p>Gift card</p></label>
                            </div>
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
