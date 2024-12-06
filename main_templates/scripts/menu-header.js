document.addEventListener("DOMContentLoaded", function() {
    const cabecalhoBk = document.getElementById("cabecalho-background");
    const contentUserOptions = document.getElementById("content-user-options");
    var widthBk = cabecalhoBk.offsetWidth
    

    const personalLink = document.getElementById("peronalLink");
    const personalContent = document.getElementById("personal-options");

    const cartLink = document.getElementById("cartLink");
    const cartContent = document.getElementById("cart-options");

    // CONSTs USER OFF
    const optionLogin = document.getElementById("option-login-cadastro")
    const boxUserOff = document.getElementById("box-user-off")
    const contentUserOff = document.getElementById("content-user-off-option")


    function hideAllContent() {
        personalContent.classList.add("elemento-escondido");
        cartContent.classList.add("elemento-escondido");
        cartContent.classList.remove("cart-options");
        contentUserOptions.classList.remove("mostrar");
        cartLink.classList.remove("item-ativo");
        personalLink.classList.remove("item-ativo");
        contentUserOptions.classList.remove("scroll-bar");

    }
    
    // USER LOGADO

    if(personalLink){
        personalLink.addEventListener("click", function(event) {
            event.preventDefault();
            if (!personalContent.classList.contains("elemento-escondido")) {
                personalContent.classList.add("elemento-escondido");
                personalLink.classList.remove("item-ativo");
                contentUserOptions.classList.remove("mostrar");
                return;
            }
            hideAllContent();
            personalContent.classList.remove("elemento-escondido");
            personalLink.classList.add("item-ativo");
            
            personalContent.style.transform = "none";
            if(window.innerWidth > 754){
                cartContent.style.transform = "translateX(-20px)";
                contentUserOptions.style.transform = "translateY(70px) translateX(-145px)";
            }
            contentUserOptions.classList.add("mostrar");
    
        });
        
        cartLink.addEventListener("click", function(event) {
            event.preventDefault();
            if (!cartContent.classList.contains("elemento-escondido")) {
                cartContent.classList.add("elemento-escondido");
                contentUserOptions.classList.remove("mostrar");
                cartLink.classList.remove("item-ativo");
    
                return;
            }
            hideAllContent();
            cartContent.classList.remove("elemento-escondido");
            cartLink.classList.add("item-ativo");
            cartContent.classList.add("cart-options");
            contentUserOptions.classList.add("scroll-bar");
            
            cartContent.style.transform = "none";
            if(window.innerWidth > 754){
                personalContent.style.transform = "translateX(-20px)";
                widthBk = cabecalhoBk.offsetWidth;
                
                if(widthBk == 1200){
                    contentUserOptions.style.transform = "translateY(70px) translateX(-27rem)";
                }else{
                    contentUserOptions.style.transform = "translateY(70px) translateX(-27rem)";
                }
            }
            contentUserOptions.classList.add("mostrar");
        });
    }else{

        // USER OFF

        optionLogin.addEventListener("click", function(event) {
            event.preventDefault();
            if(!contentUserOff.classList.contains("elemento-escondido")){
                optionLogin.classList.remove("item-ativo");
                contentUserOff.classList.add("elemento-escondido");
                boxUserOff.classList.remove("mostrar");
                contentUserOff.style.transform = "translateX(-20px)";
                return
            }else{
                optionLogin.classList.add("item-ativo");
                contentUserOff.classList.remove("elemento-escondido");
                boxUserOff.classList.add("mostrar");
                contentUserOff.style.transform = "none";
            }
        });
    }
});