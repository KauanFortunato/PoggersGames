function login_cadastro(){
    window.location.href = '../main_templates/login.php';
}

function inicio_redi(){
    window.location.href = '../main_templates/index.php';
}

function pers_redi(txt){
    window.location.href = txt;
}

function animacaoMenu() 
{
    var menuIcon = document.querySelector('.menu-icon');
    // var menu = document.querySelector('.menu');

    menuIcon.classList.toggle('change');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}

function binarioParaBase64(){
    return "data:image/png;base64," + btoa(String.fromCharCode.apply(null, new Uint8Array(dadosBinarios)));
}

function submitForm(element){
    var form = element.closest('.form-jogo');
    form.submit();
}

document.addEventListener("DOMContentLoaded", function() {
    const html = document.querySelector('html');
    const checkbox = document.getElementById('switch-mode');

    checkbox.addEventListener('change', function() {
        html.classList.toggle('light-mode');
    });
});

