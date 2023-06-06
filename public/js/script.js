//TROCA O SOL PELA LUA

const troca=document.getElementById('troca'); //const para link sol/lua
const fixada=document.getElementById("temaFixed"); //const para header
const tema=document.getElementById("colorir"); //const para div mae
const fim=document.getElementById("footer"); //const para footer
const trocando=document.getElementById('iconetema'); //const para icone sol e lua

troca.addEventListener('click', trocar); //evento que ocorre ao clicar no sol/lua (troca tema)


//FUNCAO DE TROCA DE TEMA
function trocar(){
    if(trocando.classList.contains('bi-sun-fill')){ //confere se o sol que esta na pagina
        //remove todas as configurações claras
        trocando.classList.remove('bi-sun-fill');
        tema.classList.remove("mae-claro");
        temaFixed.classList.remove("fixed-claro");
        footer.classList.remove("bottom-claro");

        //adiciona todas as configurações escuras
        trocando.classList.add('bi-moon-fill');
        tema.classList.add("mae-escuro");
        temaFixed.classList.add("fixed-escuro");
        footer.classList.add("bottom-escuro");

    }else if(trocando.classList.contains('bi-moon-fill')){ //confere se a lua esta na pagina 
        //remove todas as configurações escuras
        trocando.classList.remove('bi-moon-fill');
        tema.classList.remove("mae-escuro");
        temaFixed.classList.remove("fixed-escuro");
        footer.classList.remove("bottom-escuro");

        //adiciona todas as configurações claras
        trocando.classList.add('bi-sun-fill');
        tema.classList.add("mae-claro");
        temaFixed.classList.add("fixed-claro");
        footer.classList.add("bottom-claro");
    }
}

    