var radio = document.querySelector('.manual-btn')
let btns = document.getElementsByClassName("manual-btn");
btns[0].classList.add('active-radio')
var cont = 1

document.getElementById('radio1').checked = true

setInterval(() =>{
    proximaImg()
}, 6000)

function mostrarSlide(n){
    cont = n;
    proximaImg();
}

function proximaImg(){
    cont++

    if(cont > 4){
        cont = 1
    }
    
    for (i = 0; i < btns.length; i++) {
        btns[i].classList.remove('active-radio')
    }
    
    document.getElementById('radio' + cont).checked = true
    btns[cont - 1].classList.add('active-radio')
}

var grid_container = document.getElementsByClassName('grid-container');

function scroll_btn_prev(div){
    grid_container[div].scrollLeft -= 1400;
}

function scroll_btn_next(div){
    grid_container[div].scrollLeft += 1400;
}

window.onload = function () {
    scrollableContainer.scrollLeft = 0;
};