@include('layout._menu')
<div class="form_entrar">
    <h1>Entrar</h1>
    <!-- linha do titulo -->
   <div class="linha_titulo">
        <div class="retangulo"></div>
        <div class="bola"></div>
        <div class="bola"></div>
   </div>

    <!-- formulario -->
    <form action="#" method="post">
        <div class="form-items">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
        </div>
        <label for="">nome</label>
        <input type="text">
        
    </form>
</div><!--FIM FORM-->

<form action="">
    <label for="">nome</label>
    <input type="text">
</form>
@include('layout._footer')
