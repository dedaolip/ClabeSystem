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
                        &nbsp;&nbsp;Editar Cliente
                    </div>

                    <form id="uCustomerForm" action="{!! route('cli.update', ['id' => $cliente->id]) !!}" method="post" class="form-horizontal ng-pristine ng-valid" name="uCustomerForm" role="form">

                        <div class="panel-body col-md-12">
                            <div class="form-group col-lg-12">
                                <div class="col-lg-8">
                                    <label class="control-label" for="nome">Nome: </label>
                                    <input class="form-control" type="text" name="nome" value="<?php echo $cliente->pessoa->nome ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="data_nasc">Data de Nascimento: </label>
                                    <input class="form-control date" type="text" name="data_nasc" value="<?php echo $cliente->pessoa->data_nasc ?>">
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="col-lg-3">
                                    <label class="control-label" for="cpf">CPF: </label>
                                    <input class="form-control" type="text" name="cpf" value="<?php echo $cliente->pessoa->cpf ?>">
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="fone">Telefone: </label>
                                    <input class="form-control celphones" type="text" name="fone" value="<?php echo $cliente->pessoa->fone ?>">
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cel">Celular: </label>
                                    <input class="form-control celphones" type="text" name="cel" value="<?php echo $cliente->pessoa->cel ?>">
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="col-lg-5">
                                    <label class="control-label" for="endereco">Endere�o: </label>
                                    <input class="form-control" type="text" name="endereco" value="<?php echo $cliente->pessoa->endereco ?>">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="bairro">Bairro: </label>
                                    <input class="form-control" type="text" name="bairro" value="<?php echo $cliente->pessoa->bairro ?>">
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cep">CEP: </label>
                                    <input class="form-control cep" type="text" name="cep" value="<?php echo $cliente->pessoa->cep ?>">
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="col-lg-5">
                                    <label class="control-label" for="cidade">Cidade: </label>
                                    <input class="form-control" type="text" name="cidade" value="<?php echo $cliente->pessoa->cidade ?>">
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="uf">Estado: </label> <br/>
                                    <select class="form-control" name="uf" style="width: 80pt">
                                        <option value="<?php echo $cliente->pessoa->uf?>"><?php echo $cliente->pessoa->uf;?></option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PR">PR</option>
                                        <option value="PB">PB</option>
                                        <option value="PA">PA</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SE">SE</option>
                                        <option value="SP">SP</option>
                                        <option value="TP">TO</option>
                                    </select>
                                </div>
                            </div>





                            <div class="form-group">
                                <div class="col-lg-10">
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