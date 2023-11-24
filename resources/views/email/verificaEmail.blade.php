
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmação de Cadastro</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('css/confirmacao.css') }}">   

   
    
</head>
<body>
<div>
    <form  action="{{route('confirmar.code')}}" method="post"  enctype="multipart/form-data">
              {{ csrf_field() }}

              <input type="hidden" name="nome"  value="{{ $user['nome'] }}">
              <input type="hidden" name="email"  value="{{ $user['email'] }}">
              <input type="hidden" name="senha"  value="{{ $user['senha'] }}">
              <input type="hidden" name="sobrenome"  value="{{ $user['sobrenome'] }}">
              <input type="hidden" name="foto"  value="{{ $user['foto'] }}">
              <input type="hidden" name="genero"  value="{{ $user['genero'] }}">
              <input type="hidden" name="curioso"  value="{{ $user['curioso'] }}">
              <input type="hidden" name="codigo_escola"  value="{{ $user['codigo_escola'] }}">
              <input type="hidden" name="type_user"  value="{{ $user['typeuser'] }}">
            
                <input type="hidden" name="confirmationCode" value="{{ $confirmationCode }}">

                <div class="engloba-conf">
                  <h3>Insira seu código:</h3>
                  <input type="text" name="codeUser" class="codigo">
                  <input type="submit" class="enviar">
                </div>
      </form>
</div>
</body>
</html>
 