<!--Lista os dados armazenados no Banco-->
@section("titulo",'Lista de Atividades')
      @include('adm.adm_menu') 

      

        <div class='adm espaco'>
            <h3 class='adm '><b>Lista de Exercicios</b></h3>
            
         
            <div class='adm espaco'>
                <table class="atv">
                    <thead>
                        
                        <tr class="cabecalho" > <!-- CABECALHO -->
                            <th class="num">Número</th>
                            <th class="nome">Pergunta</th>
                            <th class="nome">Atividade</th>
                            <th class="btn-alterar">Alterar</th>
                            <th class="btn-excluir">Excluir</th>
                       </tr>
                    </thead> 
                    <tbody>
                        @foreach($lista as $row) <!-- LOOP PRA LER A TABELA -->
                            <tr>
                                <td class="num">{{ $row->id_exercicio }}</td>
                                <td class="descricao"> {{ $row->pergunta }}</td>
                                <td class="descricao">{{ $atv }}</td>
                               
                                <td class="btn"> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                                    <a class='btn-alterar' href="{{ route('adm.exercicio.editar',$row->id_exercicio) }}"><i class="bi bi-arrow-left-right"></i></a>
                                </td>
                                <td>
                                    <a class='btn-excluir' href="{{ route('adm.exercicio.excluir',$row->id_exercicio) }}"><i class="bi bi-x-circle-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                

            </div>
                

            </div>
           


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

