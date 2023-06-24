//TROCA O SOL PELA LUA

const trocando=document.getElementById('iconetema'); //const para icone sol e lua

trocando.addEventListener('click', trocar); //evento que ocorre ao clicar no sol/lua (troca tema)

const primaria =  "#003F64";
const secundaria =  "#FFFFFF";
const terciaria =  "#001F32";
const quaternaria =  "#000000";

    // const pri = getComputedStyle(document.documentElement).getPropertyValue("--cor-primaria").trim();
    // const sec = getComputedStyle(document.documentElement).getPropertyValue("--cor-secundaria").trim();
    // const ter = getComputedStyle(document.documentElement).getPropertyValue("--cor-terciaria").trim();
    // const qua = getComputedStyle(document.documentElement).getPropertyValue("--cor-quaternaria").trim();


//FUNCAO DE TROCA DE TEMA
function trocar(){
    if(trocando.classList.contains('bi-sun-fill')){ //confere se o sol que esta na pagina
        trocando.classList.remove('bi-sun-fill');
        trocando.classList.add('bi-moon-fill');
        document.documentElement.style.setProperty("--cor-primaria", terciaria);
        document.documentElement.style.setProperty("--cor-secundaria", quaternaria);
        document.documentElement.style.setProperty("--cor-quaternaria", secundaria);

    }else if(trocando.classList.contains('bi-moon-fill')){ //confere se a lua esta na pagina 
      trocando.classList.remove('bi-moon-fill');
      trocando.classList.add('bi-sun-fill');
      document.documentElement.style.setProperty("--cor-primaria", primaria);
      document.documentElement.style.setProperty("--cor-secundaria", secundaria);
    }
}

    