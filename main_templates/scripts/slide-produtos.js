let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function slideAtual(n){
    showSlides(slideIndex = n)
}

function showSlides(n) {
    var larguraTela = window.innerWidth;
    let i;
    let slides = document.getElementsByClassName("slides-produto");
    let previews = document.getElementsByClassName("previews");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for(i = 0; i < previews.length; i++){
        previews[i].classList.remove("select");
    }
    previews[slideIndex - 1].classList.add("select");

    slides[slideIndex - 1].style.display = "block";

    let previewContainer = document.querySelector('.preview-img');
    let previewWidth = previews[0].offsetWidth + 10;
    if(larguraTela <= 600){
        previewContainer.scrollLeft = (slideIndex - 2) * previewWidth;
    }else{
        previewContainer.scrollLeft = (slideIndex - 4) * previewWidth;
    }
}
