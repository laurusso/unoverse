function abrirModal(url) {
    var modalBg = document.getElementById('modal-bg');
    var modalIframe = document.getElementById('arquivo');
    modalIframe.src = url;
    modalBg.style.display = 'block';
}

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