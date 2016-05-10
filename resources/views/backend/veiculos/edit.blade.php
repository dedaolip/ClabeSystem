@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="javascript:history.back(-1);" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Voltar">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                        </a>
                        &nbsp;&nbsp;Adicionar Novo Veículo
                    </div>

                    <form id="uCustomerForm" action="{!! route('vei.update', ['id' => $veiculo->id]) !!}" method="post" class="form-horizontal ng-pristine ng-valid" name="uCustomerForm" role="form">

                        <div class="panel-body col-md-12">
                            <div class="form-group col-lg-12">
                                <div class="col-lg-6">
                                    <label class="control-label" for="responsavel_id">Funcionário Responsável: </label>
                                    <select class="form-control" name="responsavel_id">
                                        <?php $responsavel = \App\Funcionario::find($veiculo->responsavel_id); ?>
                                        <option value="<?php echo $responsavel->id ;?>"><?php echo $responsavel->pessoa->nome ;?></option>
                                        <?php foreach($funcionarios as $funcionario): ?>
                                        <option value="<?php echo $funcionario->id;?>"><?php echo $funcionario->pessoa->nome;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="placa">Placa: </label>
                                    <input class="form-control placa" type="text" name="placa" value="<?php echo $veiculo->placa; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="ano">Ano: </label>
                                    <input class="form-control ano" type="text" name="ano" value="<?php echo $veiculo->ano; ?>">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-lg-6">
                                    <label class="control-label" for="registro">Registro: </label>
                                    <input class="form-control" type="text" name="registro" value="<?php echo $veiculo->registro; ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="tipo">Tipo: </label>
                                    <input class="form-control" type="text" name="tipo" value="<?php echo $veiculo->tipo; ?>">
                                </div>
                            </div>






                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <button type="reset" class="btn">Limpar</button>
                                    <input name="_method" type="hidden" value="PUT">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection