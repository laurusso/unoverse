
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmação de Email</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('css/confirmacao.css') }}">   

   
    
</head>
<body>
<div>
    <form  action="{{route('confirmar.email.code')}}" method="post"  enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="id"  value="{{ $user['id'] }}">
              <input type="hidden" name="nome"  value="{{ $user['nome'] }}">
              <input type="hidden" name="email"  value="{{ $user['email'] }}">
              
              <input type="hidden" name="confirmationCode" value="{{ $confirmationCode }}">

                <div class="engloba-conf">
                  <h3>Insira seu código:</h3>
                  <input type="text" name="codeEmail" class="codigo">
                  <input type="submit" class="enviar">
                </div>
      </form>
</div>
</body>
</html>
 