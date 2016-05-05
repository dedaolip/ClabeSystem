@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes</div>

                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Cargo</th>
                            <th>Contato</th>
                            <th>A��o</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
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
                        <a href="{{ url('/create') }}"><img src="img/funcionario_add.png" title="Novo"><p style="text-align: center; color: black"></p></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection