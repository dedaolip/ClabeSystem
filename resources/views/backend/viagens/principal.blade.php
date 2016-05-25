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
                        <p class="col-lg-11" style="vertical-align: middle; text-align: center; font-size: 14pt; font-weight: bolder">Viagens</p>
                    </div>

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
                            <?php foreach($viagens as $viagem): ?>
                                <?php $motorista = \App\Funcionario::find($viagem->motorista_id);?>
                                <tr>
                                    <td style="vertical-align: middle"><?php echo $viagem->id?></td>
                                    <td style="vertical-align: middle"><?php echo $viagem->veiculo->placa?></td>
                                    <td style="vertical-align: middle"><?php echo $motorista->pessoa->nome?></td>
                                    <td style="vertical-align: middle"><?php echo $viagem->destino?></td>
                                    <td style="vertical-align: middle"><?php echo $viagem->origem?></td>
                                    <td style="vertical-align: middle"><?php echo $viagem->data_partida?></td>
                                    <td style="vertical-align: middle"><?php echo $viagem->tempo?></td>
                                    <td style="vertical-align: middle"><?php echo $viagem->data_chegada?></td>
                                    <td style="vertical-align: middle">
                                        <a href="{!! route('via.edit', ['id' => $viagem->id]) !!}"><img src="<?= asset('img/funcionario_edit.png'); ?>" title="Editar"></a>
                                        <a href="{!! route('via.destroy', ['id' => $viagem->id]) !!}"><img src="<?= asset('img/funcionario_delete.png'); ?>" title="Deletar"></a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>

                        </table>

                        <div class="col-lg-10 text-center">
                            {!! $viagens->render() !!}
                        </div>

                        <div class="col-lg-10">
                            <a href="{!! route('via.create') !!}"><img src="<?= asset('img/funcionario_add.png'); ?>" title="Novo"><p style="text-align: center; color: black"></p></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection