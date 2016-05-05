@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Veículos</div>

                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Responsável</th>
                                <th>Placa</th>
                                <th>Ano</th>
                                <th>Registro</th>
                                <th>Tipo</th>
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
                                <td>
                                    <a><img src="img/funcionario_edit.png" title="Editar"></a>
                                    <a><img src="img/funcionario_delete.png" title="Deletar"></a>
                                </td>
                            </tr>
                            </tbody>

                        </table>

                        <div class="col-lg-1">
                            <a href="{{ url('/veiculos/create') }}"><img src="img/funcionario_add.png" title="Novo"><p style="text-align: center; color: black"></p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection