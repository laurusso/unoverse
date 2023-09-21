function abrirModal(url) {
    var modalBg = document.getElementById('modal-bg');
    var modalIframe = document.getElementById('arquivo');

    

    modalIframe.src = url;
    modalBg.style.display = 'block';
}

// 

function fecharModal() {
    var modalBg = document.getElementById('modal-bg');
    var modalIframe = document.getElementById('arquivo');

    modalIframe.src = '';
    modalBg.style.display = 'none';
}