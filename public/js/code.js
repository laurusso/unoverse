

document.getElementById("MostraCodigo").addEventListener("click", function() {
    document.getElementById("MostraCodigo").style.display = "none";
    document.getElementById("EsconderCodigo").style.display = "inline"; 
    document.getElementById("codebox").style.display = "block";
});

document.getElementById("EsconderCodigo").addEventListener("click", function() {
    document.getElementById("EsconderCodigo").style.display = "none";
    document.getElementById("MostraCodigo").style.display = "inline";
    document.getElementById("codebox").style.display = "none";
});

// Voltar para a tela anterior
function voltarTela() { 
    window.history.back(); 
}

// Chamar a função quando necessário, por exemplo, em resposta a um clique em um botão
document.getElementById('botaoVoltar').addEventListener('click', function() {
    voltarTela();
});