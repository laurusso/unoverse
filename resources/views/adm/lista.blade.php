<!--Lista os dados armazenados no Banco-->
@include('adm.adm_menu') 

        <div class='adm'>
            <h3 class='adm'>Lista de atividades</h3>
            <div class='adm'>
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
                                    <a class='btn deep-orange' href="{{ route('adm.editar',$row->num) }}">Alterar</a>
                                    <a class='btn rede' href="{{ route('adm.excluir',$row->num) }}">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=''> <!-- BOTAO ADICIONAR -->
                     <a  href="{{ route('adm.adicionar')}}">Adicionar</a>
                </div>

            </div>

            </div>


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

