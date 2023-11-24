<!--Lista os dados armazenados no Banco-->
@section("titulo",'Lista de Atividades')
      @include('adm.adm_menu') 

      

        <div class='adm espaco'>
            <h3 class='adm '><b>Lista de Escolas</b></h3>
            
         
            <div class='adm espaco'>
                <table class="atv">
                    <thead>
                        
                        <tr class="cabecalho" > <!-- CABECALHO -->
                            <th class="num">Código</th>
                            <th class="nome">Nome</th>
                            <th class="nome">Cidade</th>
                            <th class="nome">UF</th>
                            <th class="nome">Pública?</th>
                            <th class="btn-alterar">Alterar</th>
                            <th class="btn-excluir">Excluir</th>
                       </tr>
                    </thead>  
                    <tbody>
                        @foreach($linha as $row) <!-- LOOP PRA LER A TABELA -->
                            <tr>
                                <td class="num">{{ $row->codigo_escola }}</td>
                                <td class="descricao"> {{ $row->nome_escola }}</td>
                                <td class="nome">{{ $row->cidade }}</td>
                                <td class="nome">{{ $row->UF }}</td>

                                @if($row->publica == true)
                                <td class="nome">sim</td> 
                                @else
                                <td class="nome">não</td>
                                @endif
                            
                                <td class="btn"> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                                    <a class='btn-alterar' href="{{ route('adm.escola.editar',$row->codigo_escola) }}"><i class="bi bi-arrow-left-right"></i></a>
                                </td>
                                <td>
                                    <a class='btn-excluir' href="{{ route('adm.escola.excluir',$row->codigo_escola) }}"><i class="bi bi-x-circle-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                

            </div>
                

            </div>
           


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

