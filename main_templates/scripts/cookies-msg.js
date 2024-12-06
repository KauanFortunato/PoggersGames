var msgCookies = document.getElementById('cookies-msg')
var focusCookies = document.getElementById('cookies-focus')


function cookie_acept(resp){
    localStorage.lgpd = resp

    msgCookies.classList.remove('mostrar')
    focusCookies.classList.remove('mostrar')
}

if(localStorage.lgpd !== 'sim' && localStorage.lgpd !== 'nao'){
    msgCookies.classList.add('mostrar')
    focusCookies.classList.add('mostrar')
}else{
    msgCookies.classList.remove('mostrar')
    focusCookies.classList.remove('mostrar')
}
