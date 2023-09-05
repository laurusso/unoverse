@section("titulo",'Adicionar Atividade')
@include('adm.adm_menu') 
<!--Falta adicionar a class p/ configuração da tela-->
<div class="cadatv-content">
  <div class="form_atividade">
    <h3 class="espaco"><b>Cadastro de Atividades</b></h3>
      <div class="">
        <form class="" action="{{route('adm.salvar')}}" method="post"  enctype="multipart/form-data">
          {{ csrf_field() }}
          @include('adm._form')

          <button type="submit" value="enviar">Adicionar</button>

        </form>
      </div>
  </div>  
  <div class="img-adm">
      <img src="{!! asset('img/adm/adm-robot.svg') !!}">
  </div>
   
</div>
<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')



