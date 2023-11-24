@section("titulo",'Adicionar Atividade')
@include('adm.adm_menu') 
<!--Falta adicionar a class p/ configuração da tela-->
<div class="cadatv-content">
  <div class="form_escola">
    <h3 class=""><b>Cadastro Escolas</b></h3>
    <div class="linha_titulo2">
            <div class="retangulo2"></div>
            <div class="bola"></div>
            <div class="bola"></div>
    </div>
      <div class="">
        <form class="" action="{{route('adm.salvar.escola')}}" method="post"  enctype="multipart/form-data">
          {{ csrf_field() }}
          @include('adm.escola.form_escola')

          <button type="submit" value="enviar" class="adicionar_ativ">Adicionar</button>

        </form>
      </div>
  </div>   
  <div class="img-adm">
      <img src="{!! asset('img/adm/adm-robot.svg') !!}">
  </div>
   
</div> 
<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')



