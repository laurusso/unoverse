<!--Lista os dados armazenados no Banco-->
      @section("titulo",'Lista de Atividades')
      @include('adm.adm_menu') 

      

        <div class='adm espaco'>
            <h3 class='adm '><b>Lista de atividades</b></h3>
            <div class="btn-add"> <!-- BOTAO ADICIONAR -->
                     <a class=" btn-lista lista-add"  href="{{ route('adm.adicionar')}}">Adicionar atividades</a>
                </div>
            <div class='adm espaco'>
                <table class="atv">
                    <thead>
                        
                        <tr class="cabecalho" > <!-- CABECALHO -->
                            <th class="num">Número</th>
                            <th class="nome">Nome</th>
                            <th class="modulo">Módulo</th>
                            <th class="descricao">Descrição</th>
                            <th class="arquivo">Arquivo</th>
                            <th class="btn-alterar">Alterar</th>
                            <th class="btn-excluir">Excluir</th>
                       </tr>
                    </thead> 
                    <tbody>
                        @foreach($linhas as $row) <!-- LOOP PRA LER A TABELA -->
                            <tr>
                                <td class="num">{{ $row->num }}</td>
                                <td class="nome"> {{ $row->nome }}</td>
                                <td class="modulo">{{ $row->modulo }}</td>
                                <td class="descricao">{{ $row->descricao }}</td>

                                <td class="arquivo">
                                    @foreach($imgs as $rua)
                                        @if($row->num == $rua->fk_num)
                                            <button class="btn-visua" onclick="abrirModal('{{ asset($rua->upload) }}')">Visualizar </button>
                                        @endif
                                    @endforeach
                                </td>
                                <div id="modal-bg">
                                       
                                        <span id="fechar-modal" onclick="fecharModal()">X Fechar</span>
                                        <iframe id="arquivo" class="modal-iframe" src=""></iframe>
                                        
                                
                                </div>
                                       
                                <td class="btn"> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                                    <a class='btn-alterar' href="{{ route('adm.editar',$row->num) }}"><i class="bi bi-arrow-left-right"></i></a>
                                </td>
                                <td>
                                    <a class='btn-excluir' href="{{ route('adm.excluir',$row->num) }}"><i class="bi bi-x-circle-fill"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                

            </div>
                

            </div>
            <script src="{{ asset('js/vizu.js') }}"></script> 


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

