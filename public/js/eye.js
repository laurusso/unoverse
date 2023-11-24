//FUNCAO DE TROCAR O OLHO DA SENHA  (LOGIN)

const olho = document.getElementById('olho'); //const para icone olho
const pssrd = document.getElementById('senha'); //const para input senha
const olhoConf = document.getElementById('olho-confirm'); //const para icone olho
const pssrdConf = document.getElementById('senha-confirm'); //const para input senha
olho.addEventListener('click', trocarOlho);
olhoConf.addEventListener('click', trocarOlhoConf);

function trocarOlho(){
    if(olho.classList.contains('bi-eye')){
        olho.classList.remove('bi-eye');
        olho.classList.add('bi-eye-slash');
        pssrd.type = "password";
    }//fim do if
    else{
        olho.classList.remove('bi-eye-slash');
        olho.classList.add('bi-eye');
        pssrd.type ="text";
    }//fim do else
}//fim da funcao trocarOlho


function trocarOlhoConf(){
    if(olhoConf.classList.contains('bi-eye')){
        olhoConf.classList.remove('bi-eye');
        olhoConf.classList.add('bi-eye-slash');
        pssrdConf.type = "password";
    }//fim do if
    else{
        olhoConf.classList.remove('bi-eye-slash');
        olhoConf.classList.add('bi-eye');
        pssrdConf.type ="text";
    }//fim do else
}//fim da funcao trocarOlho