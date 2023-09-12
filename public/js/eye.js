//FUNCAO DE TROCAR O OLHO DA SENHA  (LOGIN)

const olho = document.getElementById('olho'); //const para icone olho
const pssrd = document.getElementById('senha'); //const para input senha
olho.addEventListener('click', trocarOlho);

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


//alert 
