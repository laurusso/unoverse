// javascript do site, contem configuracoes dinamicas e interativas do site
const subMenus = document.querySelectorAll('.subMenu');

subMenus.forEach(subMenu => {
    const parentMenuItem = subMenu.previousElementSibling;
    parentMenuItem.addEventListener('click', () => {
        subMenu.classList.toggle('active');
    });
});

//TROCA O SOL PELA LUA

const trocando=document.getElementById('iconetema'); //const para icone sol e lua
trocando.addEventListener('click', trocar); //evento que ocorre ao clicar no sol/lua (troca tema)

//CONSTANTES DE COR PARA TROCA DE TEMA
const primaria =  "#003F64";
const secundaria =  "#FFFFFF";
const terciaria =  "#001F32";
const quaternaria =  "#000000";
const quinquenaria =  "#003F64";
const sexta =  "#FFFFFF";
const setima =  "#CEE8FF";
const oitava =  "#00468D";

//FUNCAO DE TROCA DE TEMA
function trocar(){
    if(trocando.classList.contains('bi-sun-fill')){ //confere se o sol que esta na pagina
       temaEscuro(defaultTransition);
    }//fim do if
    else if(trocando.classList.contains('bi-moon-fill')){ //confere se a lua esta na pagina 
        temaClaro(defaultTransition);
    }//fim do else if
}//fim da funcao trocar

const temaClaro = (transicao) => {  
    document.documentElement.style.setProperty("--transicao", transicao); //transicao
    trocando.classList.remove('bi-moon-fill');
    trocando.classList.add('bi-sun-fill');
    document.documentElement.style.setProperty("--cor-primaria", primaria); //topo e rodape
    document.documentElement.style.setProperty("--cor-quaternaria", quaternaria); //fundo 
    document.documentElement.style.setProperty("--cor-sexta", sexta); //letra
    document.documentElement.style.setProperty("--cor-setima", setima);   //sombra topo
    setTemaCookie("claro");
    transicaoUpdate();
}; //fim da funcao temaClaro

const temaEscuro = (transicao) => {
    document.documentElement.style.setProperty("--transicao", transicao); //transicao
    trocando.classList.remove('bi-sun-fill');
    trocando.classList.add('bi-moon-fill');
    document.documentElement.style.setProperty("--cor-primaria", terciaria); //topo e rodape
    document.documentElement.style.setProperty("--cor-sexta", quinquenaria); //fundo
    document.documentElement.style.setProperty("--cor-quaternaria", secundaria); //letra
    document.documentElement.style.setProperty("--cor-setima", oitava); //sombra topo
    setTemaCookie("escuro");
    transicaoUpdate();
}; //fim da funcao temaEscuro


//FUNCOES DE COOKIES DO SITE (TROCA DE TEMA)

const setTemaCookie = (tema) => { //com parametro tema
    document.cookie = "tema=" + tema + ";path=/";
}; //fim da funcao setTemaCookie

const getTemaCookie = () => {
    const cookies = document.cookie.split(";");
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].split("=");
        if (cookie[0] === "tema") {
            return cookie[1];
        }  
    }
    return null;
}; //fim da funcao getTemaCookie

document.addEventListener("DOMContentLoaded", () => {
    const tema = getTemaCookie();
    if (tema === "claro") {
        temaClaro(semTransicao);
    }
    else if (tema === "escuro") {
        temaEscuro(semTransicao);
    }
    else{
        temaClaro(semTransicao);
    }
}); //fim da funcao DOMContentLoaded

//AS TRANSICOES DO SITE
const semTransicao = "none"; //sem transição
const transicao1 = "background-color"; // primeira propriedade da transição
const transicao2 = "color"; // segunda propriedade de transição
const duracaoTransicao = "0.4s"; // duração da transição
const tempoTransicao = "ease"; // função de tempo da transição
const defaultTransition = `${transicao1} ${duracaoTransicao} ${tempoTransicao}, ${transicao2} ${duracaoTransicao} ${tempoTransicao}`;

const transicaoUpdate = () => {
    setTimeout(() => {
        document.documentElement.style.setProperty("--transicao", defaultTransition);
    },0);
}; //fim da funcao transicaoUpdate


//FUNCAO DE TROCAR O OLHO DA SENHA  (LOGIN)

const olho = document.getElementById('olho'); //const para icone olho
olho.addEventListener('click', trocarOlho);

function trocarOlho(){
    if(olho.classList.contains('bi-eye')){
        olho.classList.remove('bi-eye');
        olho.classList.add('bi-eye-slash');
        document.getElementById('senha').type = 'text';
    }//fim do if
    else{
        olho.classList.remove('bi-eye-slash');
        olho.classList.add('bi-eye');
        document.getElementById('senha').type = 'password';
    }//fim do else
}//fim da funcao trocarOlho

//CONFIGURAÇÃO DA JANELA MODAL
function abrirModal_Placa_Uno()
{
    const modal=document.getElementById('janela-modal-placa-uno')
    modal.classList.add('abrir')

    modal.addEventListener('click',(e) =>{
        if(e.target.id == 'fechar-placa-uno' || e.target.id =='janela-modal-placa-uno')
        {
            modal.classList.remove('abrir')
        }
    })
  
}

function abrirModal_Protoboard()
{
    const modal=document.getElementById('janela-modal-protoboard')
    modal.classList.add('abrir')

    modal.addEventListener('click',(e) =>{
        if(e.target.id == 'fechar' || e.target.id =='janela-modal-protoboard')
        {
            modal.classList.remove('abrir')
        }
    })
  
}
function abrirModal_Jumpers()
{
    const modal=document.getElementById('janela-modal-jumpers')
    modal.classList.add('abrir')

    modal.addEventListener('click',(e) =>{
        if(e.target.id == 'fechar' || e.target.id =='janela-modal-jumpers')
        {
            modal.classList.remove('abrir')
        }
    })
  
}



