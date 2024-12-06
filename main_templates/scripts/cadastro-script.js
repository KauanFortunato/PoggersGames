function usuarioJaCadastrado(){
    document.getElementById("nome").classList.add("nome-error");
    document.getElementById("nomeLabel").classList.add("error-nome-label");

    let labelError_nome = document.getElementsByClassName("labelError-nome");
    labelError_nome[0].style.display = "block";
}

function emailJaCadastrado(){
    document.getElementById('email').classList.add('email-error');
    document.getElementById('emailLabel').classList.add('error-email-label');

    let labelError_email = document.getElementsByClassName("labelError-email");
    labelError_email[0].style.display = 'block'
}