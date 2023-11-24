
@section("titulo",'Editar Atividade')
@include('adm.adm_menu') 
<!--Falta adicionar a class p/ configuração da tela-->
<div class="cadatv-content">
  <div class="form_atividade">
    <h3 class=""><b>Editor de Exercicio</b></h3>
    <div class="linha_titulo2">
            <div class="retangulo2"></div>
            <div class="bola"></div>
            <div class="bola"></div>
    </div>
      <div class="">
      <form class="" action="{{route('adm.exercicio.atualizar', $linha->id_exercicio)}}" method="post"  enctype="multipart/form-data">
          {{ csrf_field() }}
          @include('adm.exercicios.form_exerc')

          <button type="submit" value="enviar" class="atualizar_ativ">Atualizar</button>

        </form>
      </div>
  </div>  
  <div class="img-adm">
      <img src="{!! asset('img/adm/adm-robot.svg') !!}">
  </div>
   
</div> 
<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')



