const carrossel = document.querySelector(".carrossel");
var email = document.getElementById("email1");
var email1 = document.getElementById("email2");

setInterval(() => {
    carrossel.style.animation = 'carousel-animation 0.8s ease-in-out';

    setTimeout(() => {
        carrossel.style.animation = '';
        carrossel.appendChild(carrossel.firstElementChild);
    },500);
}, 2000);

function validaEmailLogin(email){

    //cria regex para validar email
    const emailRegex = new RegExp(
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );
    if(emailRegex.test(email)){
        return true
    }
    return false
}
function validaEmailCadastro(email1){

    //cria regex para validar email
    const emailRegex = new RegExp(
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );
    if(emailRegex.test(email1)){
        return true
    }
    return false
}