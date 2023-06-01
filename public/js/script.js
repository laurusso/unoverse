const troca=document.getElementById('troca');

troca.addEventListener('click', trocar);

function trocar(){
    var trocando=document.getElementById('icone-tema');
    if(trocando.classList.contains('bi-sun-fill')){
        trocando.classList.remove('bi-sun-fill');
        trocando.classList.add('bi-moon-fill');
    }else if(trocando.classList.contains('bi-moon-fill')){
        trocando.classList.remove('bi-moon-fill');
        trocando.classList.add('bi-sun-fill');
    }
}
    