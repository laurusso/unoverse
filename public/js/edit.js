const selectEscola = document.getElementById("select");
var mql = window.matchMedia('(min-width: 769px)');
function toggleEditMode(inputId, editIconId, checkIconId,campo) {
    const inputElement = document.getElementById(inputId);
    const editIcon = document.getElementById(editIconId);
    const checkIcon = document.getElementById(checkIconId);
  
    if (inputElement.readOnly) {
      inputElement.readOnly = false;
      editIcon.style.display = "none";
      checkIcon.style.display = "inline-block";
      if (campo === "escola") {
        selectEscola.style.display = "block";
        inputElement.style.display = "none";
      }
    } else {
      inputElement.readOnly = true;
      editIcon.style.display = "inline-block";
      checkIcon.style.display = "none";
      if (campo === "escola") {
        selectEscola.style.display = "none";
        inputElement.style.display = "block";
      }

              document.getElementById('campoAlterado').value = campo;
              document.querySelector('form').submit();}
          
  }
 
  function exibicaobutton(acao) {
    const btnFoto = document.getElementById('InputFoto');
    const btnDefault = document.getElementById('Fotodefault');
    const btnEsconde = document.getElementById('esconderBTN');
    var  divPerfil = document.querySelector('.perfil');
    if (acao === "mostra") {
      btnFoto.style.display = "block";
      btnDefault.style.display = "block";
      btnEsconde.style.display = "block";


       if (mql.matches) { divPerfil.style.height = '100vh'; } 
      // else { divPerfil.style.height = '100vh';}

      // divPerfil.style.height = "100vh";
    } else if (acao === "esconde") {
      btnFoto.style.display = "none";
      btnDefault.style.display = "none";
      btnEsconde.style.display = "none";
       if (mql.matches) { divPerfil.style.height = '90vh'; } 
      // else { divPerfil.style.height = '100vh';}
    }
  }

  function senha(acao) {
    const Senhantiga = document.getElementById('senhaAntiga');
    const Senhanova = document.getElementById('senhaNova');
    const cancelar = document.getElementById('ocultar'); 
    const mudarsenha = document.getElementById('mostra');
    const l1 = document.getElementById('label1');
    const l2 = document.getElementById('label2');
    const alterar =  document.getElementById('mudarSenha'); 
    if (acao === "mostra") {
      Senhantiga.style.display = "block";
      Senhanova.style.display = "block"; 
      cancelar.style.display = "block";
      l1.style.display = "block";
      l2.style.display = "block";
      alterar.style.display = "block";
      mudarsenha.style.display = "none";
      
    } else if (acao === "ocultar") {
      Senhantiga.style.display = "none";
      Senhanova.style.display = "none";
      cancelar.style.display = "none";
      l1.style.display = "none";
      l2.style.display = "none";
      alterar.style.display = "none";
      mudarsenha.style.display = "block";
    }
  }

  document.getElementById('mostra').addEventListener('click', function() {
    senha('mostra');
  });
  document.getElementById('ocultar').addEventListener('click', function() {
    senha('ocultar');
  });

  document.getElementById('esconderBTN').addEventListener('click', function() {
    exibicaobutton('esconde');
  });

  document.getElementById('InputFoto').addEventListener('change', function() {
    document.getElementById('campoAlterado').value = "foto";
    document.getElementById('form').submit();
  
  });

  document.getElementById('Fotodefault').addEventListener('click', function() {
    document.getElementById('campoAlterado').value = "foto";
    document.getElementById('form').submit();
  });
  document.getElementById('mudarSenha').addEventListener('click', function() {
    document.getElementById('campoAlterado').value = "senha";
    document.getElementById('form').submit();
  });
 
