@section("titulo",'Adicionar Atividade')
@include('adm.adm_menu') 
<!--Falta adicionar a class p/ configuração da tela-->
<div class="cadatv-content">
  <div class="form_exercicio">
    <h3 class=""><b>Cadastro de Questões</b></h3>
    <div class="linha_titulo2">
            <div class="retangulo2"></div>
            <div class="bola"></div>
            <div class="bola"></div>
    </div>
      <div class="">
        <form class="" action="{{route('adm.destinaExercicio')}}" method="post"  enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class=" conteudo_form_ativ form_cad_ativ">   

          <div class="caixa-cadAtv geral-atv">
                <label>Conteudo destinado para?</label>
                <br>
            
                    <label> 
                        <!-- <input type="radio" name="aluno" value="al" {{isset($linha->aluno) && $linha->aluno == 'al' ? 'checked'  : '' }}  > -->
                        <input type="radio" name="destinoEx" value="aluno" {{isset($linha->destinoEx) && $linha->destinoEx == 'aluno' ? 'checked' : '' }}>
                    Aluno 
                    </label>  
                    <label>
                    <input type="radio" name="destinoEx" value="professor" {{isset($linha->destinoEx) && $linha->destinoEx == 'professor' ? 'checked' : '' }}>
                        <!-- <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} > -->    
                        Professor 
                    </label>
                    <label>
                    <input type="radio" name="destinoEx" value="curioso" {{isset($linha->destinoEx) && $linha->destinoEx == 'curioso' ? 'checked' : '' }}>
                        <!-- <input type="radio" name="aluno" value="pr"   {{ isset($linha->aluno) && $linha->aluno == 'pr' ? 'checked' : '' }} > -->    
                        Curioso 
                    </label>
            

    </div>     

          </div>

          <button type="submit" value="enviar" class="adicionar_ativ">Continuar</button>

        </form>
      </div>
  </div>  
  <div class="img-adm">
      <img src="{!! asset('img/adm/adm-robot.svg') !!}">
  </div>
   
</div> 
<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')



