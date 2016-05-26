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
                    <p class="col-lg-11" style="vertical-align: middle; text-align: center; font-size: 14pt; font-weight: bolder">Clientes</p>
                </div>

                <div class="panel-body">
                    <div class="form-group col-lg-12">
                        <label class="control-label text-center" style="font-weight: bold; font-size: 20pt">Pesquisar</label>
                    </div>
                    <div class="form-group col-lg-1">
                        <label for="pesquisar" class="control-label" style="padding-top: 5pt">Nome:</label>
                    </div>
                    <div class="form-group col-lg-4">
                        <input class="form-control" type="text" style="padding: 5pt">
                    </div>
                    <div class="form-group col-lg-4">
                        <button class="btn btnPesquisa" id="btnPesquisar">Pesquisar</button>
                    </div>

                    <div class="col-lg-12 divTabela" id="divTabela">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Contato</th>
                                <th>Ação</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach($clientes as $cliente): ?>
                            <tr>
                                <td style="vertical-align: middle"><?php echo $cliente->id;?></td>
                                <td style="vertical-align: middle"><?php echo $cliente->pessoa->nome;?></td>
                                <td style="vertical-align: middle"><?php echo $cliente->pessoa->fone;?></td>
                                <td style="vertical-align: middle">
                                    <a href="{!! route('cli.edit', ['id' => $cliente->id]) !!}"><img src="<?= asset('img/funcionario_edit.png'); ?>" title="Editar"></a>
                                    <a href="{!! route('cli.destroy', ['id' => $cliente->id]) !!}"><img src="<?= asset('img/funcionario_delete.png'); ?>" title="Deletar"></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>

                        </table>

                        <div class="col-lg-10 text-center">
                        {!! $clientes->render() !!}
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <a class="col-lg-10" href="{!! route('cli.create') !!}"><img src="<?= asset('img/funcionario_add.png'); ?>" title="Novo"><p style="text-align: center; color: black"></p></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection