@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Viagens</div>

                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Veiculo</th>
                                <th>Motorista</th>
                                <th>Destino</th>
                                <th>Origem</th>
                                <th>Data de Partida</th>
                                <th>Tempo de Viagem</th>
                                <th>Previsão de Chegada</th>
                                <th>Ação</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>
                                    <a><img src="img/funcionario_edit.png" title="Editar"></a>
                                    <a><img src="img/funcionario_delete.png" title="Deletar"></a>
                                </td>
                            </tr>
                            </tbody>

                        </table>

                        <div class="col-lg-1">
                            <a href="{{ url('/viagens/create') }}"><img src="img/funcionario_add.png" title="Novo"><p style="text-align: center; color: black"></p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection