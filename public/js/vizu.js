function abrirModal(url) {
    var modalBg = document.getElementById('modal-bg');
    var modalIframe = document.getElementById('arquivo');
    modalIframe.src = url;
    modalBg.style.display = 'block';
}




function MostraAtv(code) {
    
    if (code && code.trim() !== '') {
        alert("O valor da variável 'code' é: " + code);
        const preTag = document.getElementById("conteudo");

    // Use a função fetch para carregar o arquivo local
    fetch(code)
        .then(response => {
            if (!response.ok) {
                throw new Error("Não foi possível carregar o arquivo.");
            }
            return response.text();
        })
        .then(data => {
            // 'data' contém o conteúdo do arquivo de texto
            preTag.textContent = data;
        })
        .catch(error => {
            console.error("Erro:", error);
        });
}
}

// function MostraAtv(upload,code) {
//     abrirLateral(upload);
//     if (code && code.trim() !== '') {
//         Boxcode(code);
//     } else {
//         // Se 'code' estiver vazio ou nulo, trate-o de acordo com seus requisitos
//         console.log("O código está vazio ou nulo.");
//         // Ou você pode exibir uma mensagem de erro ao usuário, por exemplo:
//         // alert("O código está vazio ou nulo.");
//     }
// }



function abrirLateral(url) {
    var lateralBg = document.getElementById('lateral-bg');
    var modalIframe = document.getElementById('arquivo');
    modalIframe.src = url;
    lateralBg.style.display = 'inline';
}
  

function fecharModal() {
    var modalBg = document.getElementById('modal-bg');
    var modalIframe = document.getElementById('arquivo');

    modalIframe.src = '';
    modalBg.style.display = 'none';
}
function fecharLateral() {
    var modalBg = document.getElementById('lateral-bg');
    var modalIframe = document.getElementById('arquivo');

    modalIframe.src = '';
    modalBg.style.display = 'none';
}



 
function Boxcode(code) {

    $.ajax({
        type: "POST",
        url: "/users/atividade", // Substitua pela URL da sua rota no Laravel
        data: { code: code }, // Envie a chave para o Laravel
        
    });
}