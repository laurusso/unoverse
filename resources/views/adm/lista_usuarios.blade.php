<!--Lista os dados armazenados no Banco-->
@section('titulo', 'Lista de Usuários')
@include('adm.adm_menu') 

<div class='adm espaco'>    
    <h3 class='adm '><b>Lista de usuários</b></h3>
    
    <div class='adm espaco'>
        <table class="atv">
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
                        <td class="id_pessoa">{{ $row->id_pessoa }}</td>
                        <td class="email"> {{ $row->email }}</td>
                        <td class="nome">{{ $row->nome }}</td>
                        <td class="sobrenome">{{ $row->sobrenome }}</td>
                        <td class="">em teste</td>
                        <td class="escola">escola</td>

                        <td class="btn"> <!-- COLUNA COM DESATIVAR -->
                        </td>
                        <td>
                            <a class='btn-excluir' href="{{ route('adm.excluir',$row->id) }}"><img src="{!! asset('img/adm/adm_trocar.png') !!}"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        

    </div>
        

    </div>
   


<!-- CHAMADA DA DIV FOOTER -->
@include('adm.adm_footer')

