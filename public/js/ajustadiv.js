
function ajustarTamanhoDaDiv() {  
  
    const contatv = document.getElementById("contatv");
    const pagsAtv = document.getElementById("pagsAtv");
    const btnvoltar = document.getElementById("btn-voltar")
    const estiloCSS = window.getComputedStyle(pagsAtv);
    const larguraAtual = estiloCSS.getPropertyValue('width');
    //22rem
    const larguraEmVw = (parseInt(larguraAtual) / window.innerWidth) * 100;

    // Arredonda o valor para o número inteiro mais próximo
    const larguraEmVwArredondada = Math.round(larguraEmVw);

   // const margemEsquerdaAtual = window.getComputedStyle(contatv).marginLeft;
   //alert('Margem Esquerda Atual: ' + larguraEmVwArredondada);
    // Obtém o tamanho atual da div
    //const tamanhoAtual = window.getComputedStyle(pagsAtv).width;

    // Verifica se o tamanho atual é igual a '30vw' 
    if (larguraEmVwArredondada == 5) { 
        // Se sim, muda para '5vw'  
        //alert('Margem Esquerda Atual: ' + larguraEmVwArredondada);
        contatv.style.marginLeft = '2vw';
      pagsAtv.style.width = '30vw';
      btnvoltar.style.marginRight = '22rem';
    }  
    else if(larguraEmVwArredondada == 30){ 
        pagsAtv.style.width = '5vw';
        contatv.style.marginLeft = '15vw';
        
      btnvoltar.style.marginRight = '11rem';
       // contatv.style.marginLeft = '640px';
    }
  
    // Se o tamanho atual não for igual a '30vw', você pode adicionar outra condição aqui conforme necessário
}
