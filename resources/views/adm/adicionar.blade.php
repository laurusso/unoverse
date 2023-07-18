@include('adm.adm_menu') 
<!--Falta adicionar a class p/ configuração da tela-->
<div class=" ">
  <h3 class=" ">Adicionar Atividade</h3>
    <div class=" ">
      <form class="" action="{{route('adm.salvar')}}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('adm._form')
        <button class="">Salvar</button>
      </form>
    </div>
  </div>  
   

<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')



