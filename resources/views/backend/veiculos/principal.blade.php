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
                        &nbsp;&nbsp;Veículo
                    </div>

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
                            <?php foreach($veiculos as $veiculo): ?>
                            <tr>
                                <?php $funcionario = \App\Funcionario::find($veiculo->responsavel_id);?>
                                <td><?php echo $veiculo->id; ?></td>
                                <td><?php echo $funcionario->pessoa->nome; ?></td>
                                <td><?php echo $veiculo->placa; ?></td>
                                <td><?php echo $veiculo->ano; ?></td>
                                <td><?php echo $veiculo->registro; ?></td>
                                <td><?php echo $veiculo->tipo; ?></td>
                                <td>
                                    <a href="{!! route('vei.edit', ['id' => $veiculo->id]) !!}"><img src="img/funcionario_edit.png" title="Editar"></a>
                                    <a href="{!! route('vei.destroy', ['id' => $veiculo->id]) !!}"><img src="img/funcionario_delete.png" title="Deletar"></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>

                        <div class="col-lg-10 text-center">
                            {!! $veiculos->render() !!}
                        </div>

                        <div class="col-lg-10">
                            <a href="{!! route('vei.create') !!}"><img src="img/funcionario_add.png" title="Novo"><p style="text-align: center; color: black"></p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection