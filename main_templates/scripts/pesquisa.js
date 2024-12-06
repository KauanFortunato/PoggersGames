function search_game(){
    let input = document.getElementById('pesquisa-game').value;
    input = input.toLowerCase();
    let games = document.getElementsByClassName('title-item');
    let items = document.getElementsByClassName('grid-item');
    let indicadores = document.getElementsByClassName('manual-btn');
    let text_grid = document.getElementsByClassName('text-grid');
    let erro_pesquisa = document.getElementById('erro-pesquisa');

    let containerSlides = document.getElementsByClassName('slider');
    let backgroundPage = document.getElementsByClassName('background-pag');

    if (containerSlides.length > 0) {
        var item_slide = containerSlides;
        let encontrouResultado = false;

        for (let i = 0; i < games.length; i++) {
            if (!games[i].innerHTML.toLowerCase().includes(input)) {
                items[i].style.display = "none";
    
                item_slide[0].style.display = "none";
    
                indicadores[0].style.display = "none";
                text_grid[0].classList.add('text-grid-pesquisa');
            } else {
                items[i].style.display = "block";
                item_slide[0].style.display = "grid";
                indicadores[0].style.display = "block";
                text_grid[0].classList.remove('text-grid-pesquisa');
                encontrouResultado = true;
            }
        }
        
        if (!encontrouResultado) {
            erro_pesquisa.style.display = "grid";
        } else {
            erro_pesquisa.style.display = "none";
        }

    } else {
        var item_slide = backgroundPage;
        let encontrouResultado = false;

        for (let i = 0; i < games.length; i++) {
            if (!games[i].innerHTML.toLowerCase().includes(input)) {
                items[i].style.display = "none";
                item_slide[0].style.display = "none";
            } else {
                items[i].style.display = "block";
                item_slide[0].style.display = "grid";
                encontrouResultado = true;
            }
        }

        if (!encontrouResultado) {
            erro_pesquisa.style.display = "grid";
        } else {
            erro_pesquisa.style.display = "none";
        }
    }
}

function search_game_mobile(){
    let input = document.getElementById('pesquisa-game-mob').value;
    input = input.toLowerCase();
    let games = document.getElementsByClassName('title-item');
    let items = document.getElementsByClassName('grid-item');
    let container_slide = document.getElementsByClassName('slider');
    let indicadores = document.getElementsByClassName('indicadores');
    let text_grid = document.getElementsByClassName('text-grid');
    let erro_pesquisa = document.getElementById('erro-pesquisa');

    let encontrouResultado = false;

    for (let i = 0; i < games.length; i++) {
        if (!games[i].innerHTML.toLowerCase().includes(input)) {
            items[i].style.display = "none";
            container_slide[0].style.display = "none";
            indicadores[0].style.display = "none";
            text_grid[0].classList.add('text-grid-pesquisa');
        } else {
            items[i].style.display = "block";
            container_slide[0].style.display = "grid";
            indicadores[0].style.display = "block";
            text_grid[0].classList.remove('text-grid-pesquisa');
            encontrouResultado = true;
        }
    }

    if (!encontrouResultado) {
        erro_pesquisa.style.display = "grid";
    } else {
        erro_pesquisa.style.display = "none";
    }
}