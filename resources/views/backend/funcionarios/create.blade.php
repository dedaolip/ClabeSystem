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
                        &nbsp;&nbsp;Adicionar Novo Funcionário
                    </div>

                    <form id="uCustomerForm" method="post" class="form-horizontal ng-pristine ng-valid" name="uCustomerForm" role="form">

                        <div class="panel-body col-md-12">
                            <div class="form-group col-lg-12">
                                <div class="col-lg-8">
                                    <label class="control-label" for="nome">Nome: </label>
                                    <input class="form-control" type="text" name="nome" value placeholder="ex.: Maria das Graças">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="data_nasc">Data de Nascimento: </label>
                                    <input class="form-control date" type="text" name="data_nasc" value placeholder="ex.: 25/04/1990">
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="col-lg-2">
                                    <label class="control-label" for="cpf">CPF: </label>
                                    <input class="form-control" type="text" name="cpf" value placeholder="ex.: 342.014.248.93">
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="fone">Telefone: </label>
                                    <input class="form-control celphones" type="text" name="fone" value placeholder="ex.: (16)3984-2752">
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="celular">Celular: </label>
                                    <input class="form-control celphones" type="text" name="celular" value placeholder="ex.: (16)99725-5743">
                                </div>
                                <div class="col-lg-6">
                                    <label class="control-label" for="cargo">Cargo: </label>
                                    <input class="form-control" type="text" name="cargo" value placeholder="ex.: Secretária">
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="col-lg-5">
                                    <label class="control-label" for="endereco">Endereço: </label>
                                    <input class="form-control" type="text" name="endereco" value placeholder="ex.: Rua: Manoel Prado, 246">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="bairro">Bairro: </label>
                                    <input class="form-control" type="text" name="bairro" value placeholder="ex.: Centro">
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="cep">CEP: </label>
                                    <input class="form-control cep" type="text" name="cep" value placeholder="ex.: 14.200-000">
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="col-lg-5">
                                    <label class="control-label" for="cidade">Cidade: </label>
                                    <input class="form-control" type="text" name="cidade" value placeholder="ex.: Rua: São Simão">
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label" for="uf">Estado: </label> <br/>
                                    <select class="form-control" name="uf" style="width: 80pt">
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
                                        <option value="SP" selected>SP</option>
                                        <option value="TP">TO</option>
                                    </select>
                                </div>
                            </div>





                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <button type="reset" class="btn">Limpar</button>
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