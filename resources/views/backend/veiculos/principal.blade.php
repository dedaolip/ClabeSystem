@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <a href="javascript:history.back(-1);" class="btn btn-default btn-sm col-lg-1" data-toggle="tooltip" data-placement="top" title="Voltar">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                        </a>
                        <p class="col-lg-11" style="vertical-align: middle; text-align: center; font-size: 14pt; font-weight: bolder">Veículos</p>
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
                                <td style="vertical-align: middle"><?php echo $veiculo->id; ?></td>
                                <td style="vertical-align: middle"><?php echo $funcionario->pessoa->nome; ?></td>
                                <td style="vertical-align: middle"><?php echo $veiculo->placa; ?></td>
                                <td style="vertical-align: middle"><?php echo $veiculo->ano; ?></td>
                                <td style="vertical-align: middle"><?php echo $veiculo->registro; ?></td>
                                <td style="vertical-align: middle"><?php echo $veiculo->tipo; ?></td>
                                <td style="vertical-align: middle">
                                    <a href="{!! route('vei.edit', ['id' => $veiculo->id]) !!}"><img src="<?= asset('img/funcionario_edit.png'); ?>" title="Editar"></a>
                                    <a href="{!! route('vei.destroy', ['id' => $veiculo->id]) !!}"><img src="<?= asset('img/funcionario_delete.png'); ?>" title="Deletar"></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>

                        <div class="col-lg-10 text-center">
                            {!! $veiculos->render() !!}
                        </div>

                        <div class="col-lg-10">
                            <a href="{!! route('vei.create') !!}"><img src="<?= asset('img/funcionario_add.png'); ?>" title="Novo"><p style="text-align: center; color: black"></p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection