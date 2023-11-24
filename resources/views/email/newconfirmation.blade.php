<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Email</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
</head>
<body> 
    <h1>Confirme seu cadastro</h1>
    <p>Olá, {{ $user['nome'] }}!</p>
    <p>Seu código de confirmação é: {{ $confirmationCode }}</p>
   
</body>
</html>