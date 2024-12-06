document.addEventListener("DOMContentLoaded", function() {
    const relatoriosLink = document.getElementById("relatorios-link");
    const estatisticasLink = document.getElementById("estatisticas-link");
    const adicionarProdutoLink = document.getElementById("add-produto-link");
    const userManageLink = document.getElementById("usuarios-manage");
    const prdManageProdLink = document.getElementById("produtos-manage");

    relatoriosLink.classList.add("sidebar-active");

    const relatoriosContent = document.getElementById("relatorios-content");
    const estatisticasContent = document.getElementById("estatisticas-content");
    const adicionarProdutoContent = document.getElementById("adicionar-produto-content");
    const userManageContent = document.getElementById("user-manage-content");
    const prodManageContent = document.getElementById("prod-manage-content");

    function hideAllContent() {
        relatoriosContent.style.display = "none";
        estatisticasContent.style.display = "none";
        adicionarProdutoContent.style.display = "none";
        userManageContent.style.display = "none";
        prodManageContent.style.display = "none"

        estatisticasLink.classList.remove("sidebar-active");
        relatoriosLink.classList.remove("sidebar-active");
        adicionarProdutoLink.classList.remove("sidebar-active");
        userManageLink.classList.remove("sidebar-active");
        prdManageProdLink.classList.remove("sidebar-active");
    }

    relatoriosLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContent();
        relatoriosLink.classList.add("sidebar-active");
        relatoriosContent.style.display = "block";
    });

    estatisticasLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContent();
        estatisticasLink.classList.add("sidebar-active");
        estatisticasContent.style.display = "block";
    });

    adicionarProdutoLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContent();
        adicionarProdutoLink.classList.add("sidebar-active");
        adicionarProdutoContent.style.display = "block";
    });

    userManageLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContent();
        userManageLink.classList.add("sidebar-active");
        userManageContent.style.display = "block";
    });

    prdManageProdLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContent();
        prdManageProdLink.classList.add("sidebar-active");
        prodManageContent.style.display = "block";
    });
});