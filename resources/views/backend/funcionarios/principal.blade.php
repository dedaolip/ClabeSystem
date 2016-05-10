@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="javascript:history.back(-1);" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Voltar">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                        </a>
                        &nbsp;&nbsp;Funcionário
                    </div>

                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Cargo</th>
                                <th>Contato</th>
                                <th>Ação</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach($funcionarios as $funcionario): ?>
                                <tr>
                                    <td><?php echo $funcionario->id ?></td>
                                    <td><?php echo $funcionario->pessoa->nome ?></td>
                                    <td><?php echo $funcionario->cargo->nome ?></td>
                                    <td><?php echo $funcionario->pessoa->fone ?></td>
                                    <td>
                                        <a><img src="img/funcionario_edit.png" title="Editar"></a>
                                        <a><img src="img/funcionario_delete.png" title="Deletar"></a>
                                    </td>
                                </tr>
                            <?php endforeach ;?>
                            </tbody>

                        </table>

                        <div class="col-lg-1">
                            <a href="{!! route('func.create') !!}"><img src="img/funcionario_add.png" title="Novo"><p style="text-align: center; color: black"></p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection