<!-- 
    Aquivo que contem as configuracoes para logar-se no site, caso ja tenha conta
 -->

@include('layout._menu')
<div class="form_entrar">
    <h1>Entrar</h1>
    
   <div class="linha_titulo">
        <div class="retangulo"></div>
        <div class="bola"></div>
        <div class="bola"></div>
   </div>

    <form action="#" method="post">
        {{csrf_field() }}
        <div class="form-items">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
        </div>
        <label for="">nome</label>
        <input type="text">
        
    </form>
</div>



@include('layout._footer')
