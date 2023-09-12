<!--Lista os dados armazenados no Banco-->
@include('adm.adm_menu') 

        <div class='adm espaco'>
            <h3 class='adm '>Lista de atividades</h3>
            <div class='adm espaco'>
                <table>
                    <thead>
                        <tr> <!-- CABECALHO -->
                            <td>Num</td>
                            <td>Nome</td>
                            <td>Modulo</td>
                            <td>Descricao</td>

                            <td>Arquivo</td>
                            <td></td>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach($linhas as $row) <!-- LOOP PRA LER A TABELA -->
                            <tr>
                                <td>{{ $row->num }}</td>
                                <td>{{ $row->nome }}</td>
                                <td>{{ $row->modulo }}</td>
                                <td>{{ $row->descricao }}</td>
                    
                                @foreach($imgs as $rua)
                                    @if($row->num == $rua->fk_num)
                                
                                        <td><img src="{{ asset($rua->upload) }}" width=100  alt="{{ $row->nome }}"></td> 
    
                                    @endif
                                    <!-- <td><img src="{{ asset($row->imagem) }}" width=100  alt="{{ $row->titulo }}"></td> -->
                                @endforeach
                                
                                
                                <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                                    <a class='btn-lista' href="{{ route('adm.editar',$row->num) }}">Alterar</a>
                                    <a class='btn-lista' href="{{ route('adm.excluir',$row->num) }}">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                

            </div>
            <div class="btn-add"> <!-- BOTAO ADICIONAR -->
                     <a class=" btn-lista lista-add"  href="{{ route('adm.adicionar')}}">Adicionar</a>
                </div>

            </div>


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

