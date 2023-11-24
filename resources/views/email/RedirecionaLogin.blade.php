<!DOCTYPE html>
<html>
<head>
    <!-- Seu cabeçalho e outros recursos -->
</head>
<body>
    <!-- Seu conteúdo HTML -->

    <script>
        // Adicione este script na parte inferior da sua visão

        // Obtenha a resposta do servidor
        var mensagem = @json(session('mensagem')); // Ou como você preferir passar a mensagem de erro

        if (mensagem) {
            alert(mensagem);
            window.location.href = "/login"; // Redirecione para a tela de login
        }
    </script>
</body>
</html>
