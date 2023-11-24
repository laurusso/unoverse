
document.getElementById('cookies-btn').addEventListener('click', function() {
    if (localStorage.getItem('cookie_accepted') !== 'true'){
    // Define um cookie para registrar a aceitação do usuário
    document.cookie = "cookie_accepted=true; expires=Sun, 31 Dec 2023 12:00:00 UTC; path=/projetoscti23/menu";
    // Esconde a janela de cookies
    document.getElementById('cookies-msg').style.display = 'none';
    }
});  
window.onload = function() {
    if (document.cookie.replace(/(?:(?:^|.*;\s*)cookie_accepted\s*=\s*([^;]*).*$)|^.*$/, "$1") === "true"){
        // Se o usuário não aceitou os cookies, exibe a janela de cookies
        document.getElementById('cookies-msg').style.display = 'block';
    }
};                    