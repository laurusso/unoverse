//TROCA O SOL PELA LUA

const troca=document.getElementById('troca');
const fixada=document.getElementById("temaFixed");
const tema=document.getElementById("colorir");
const fim=document.getElementById("footer");

troca.addEventListener('click', trocar);
var trocando=document.getElementById('iconetema');


function trocar(){
    if(trocando.classList.contains('bi-sun-fill')){
        trocando.classList.remove('bi-sun-fill');
        trocando.classList.add('bi-moon-fill');
        tema.classList.remove("mae-claro");
        tema.classList.add("mae-escuro");
        temaFixed.classList.remove("fixed-claro");
        temaFixed.classList.add("fixed-escuro");
        footer.classList.remove("bottom-claro");
        footer.classList.add("bottom-escuro");
    }else if(trocando.classList.contains('bi-moon-fill')){
        trocando.classList.remove('bi-moon-fill');
        trocando.classList.add('bi-sun-fill');
        tema.classList.remove("mae-escuro");
        tema.classList.add("mae-claro");
        temaFixed.classList.remove("fixed-escuro");
        temaFixed.classList.add("fixed-claro");
        footer.classList.remove("bottom-escuro");
        footer.classList.add("bottom-claro");
    }
}

    