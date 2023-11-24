<!--Lista os dados armazenados no Banco-->
@section('titulo', 'Lista de Usuários')
@include('adm.adm_menu') 

<div class='adm espaco'>    
    <h3 class='adm '><b>Lista de usuários</b></h3>
    
    <div class='adm espaco'>
        <table class="usuario">
            <thead>
                
                <tr class="cabecalho" > <!-- CABECALHO -->
                    <th class="ID">ID</th>
                    <th class="email">Email</th>
                    <th class="nome">Nome</th>
                    <th class="sobrenome">Sobrenome</th>
                    <th class="modulo">Módulo</th> <!--fazer dpsss-->
                    <th class="escola">Escola</th>
                    <th class="btn-desativar">Desativar</th>
               </tr>
            </thead>
            <tbody>
                @foreach($linhas as $row) <!-- LOOP PRA LER A TABELA -->
                    <tr>
                        <td class="ID">{{ $row->id }}</td>
                        <td class="email"> {{ $row->email }}</td>
                        <td class="nome">{{ $row->nome }}</td>
                        <td class="sobrenome">{{ $row->sobrenome }}</td>
                            @if($row->curioso == true)
                                <td class="modulo">curioso</td>
                                <td class="escola">     </td>
                            @elseif($row->adm == true)
                            <td class="modulo">adm</td>
                            <td class="escola">Prof. Isaac Portal Roldán</td>
                            @else
                                @foreach($aluno as $al)
                                    @if($al->id_aluno == $row->id)                
                                    <td class="modulo">estudante</td>
                                        @foreach($escola as $esc)
                                            @if($esc->codigo_escola == $al->id_escola)
                                            <td class="escola">{{$esc->nome_escola}}</td> 
                                            @endif
                                        @endforeach
                                        @endif
                                @endforeach

                                @foreach($professor as $pr)
                                    @if($pr->id_prof == $row->id)                
                                    <td class="modulo">professor</td>
                                    @foreach($escola as $esc)
                                            @if($esc->codigo_escola == $pr->id_escola)
                                            <td class="escola">{{$esc->nome_escola}}</td> 
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                                
                            @endif
                        
                           

                        <td>
                        @if ($row->ativo == true)
                        <a class='btn-desativar' href="{{ route('adm.user.ativacao', ['id' => $row->id, 'acao' => 'desativar']) }}" ><i class='bi bi-toggle-on ativo'></i></a> 
                        @else 
                        <a class='btn-ativar' href="{{ route('adm.user.ativacao', ['id' => $row->id, 'acao' => 'ativar']) }}" ><i class='bi bi-toggle-off desativa'></i></a> 

                            <!-- <a class='btn-desativar' href="#"><i class="bi bi-toggle-off desativa"></i></a> -->
                            @endif
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
        

    </div>
        

    </div> 

    <script src="{{ asset('js/disable.js') }}"></script>
   


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

