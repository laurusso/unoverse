function Resposta(acao,num) {
    const btnmostra = document.getElementById('btn-mostra');
    const btnoculta = document.getElementById('btn-oculta');
var i = 1;
    if (acao === "mostra") {
        btnmostra.style.display = "none";
        btnoculta.style.display = "inline";

        // Mostra todas as respostas corretas
        for (i ; i <= num ; i++) { 
            var resposta = document.getElementById('resposta_certa_'+i);
            resposta.style.display = "block";
        }
    } 
    else if (acao === "ocultar") {
        btnmostra.style.display = "inline";
        btnoculta.style.display = "none";
        // Oculta todas as respostas corretas
        for (i ; i <= num ; i++) { 
            var resposta = document.getElementById('resposta_certa_'+i);
            resposta.style.display = "none";
        }
    }
}

// Voltar para a tela anterior
function voltarTela() {
    window.history.back(); 
}

// Chamar a função quando necessário, por exemplo, em resposta a um clique em um botão
document.getElementById('botaoVoltar').addEventListener('click', function() {
    voltarTela();
});

document.getElementById('btn-mostra').addEventListener('click', function() {
    Resposta('mostra','{{$num}}');
});

  document.getElementById('btn-oculta').addEventListener('click', function() {
    Resposta('ocultar','{{$num}}');
  });