
@include('adm.adm_menu') 
<!--Falta adicionar a class p/ configuração da tela-->
<div class=" ">
  <h3 class=" ">Editando Atividade</h3>
    <div class=" ">
      <form class="" action="{{route('adm.atualizar', $linha->num)}}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('adm._form')
        <button class="">Atualizar</button>
        
      </form>
    </div>
  </div>  
   

<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')
 