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
                        &nbsp;&nbsp;Adicionar Viagem
                    </div>

                    <form id="uCustomerForm" method="post" class="form-horizontal ng-pristine ng-valid" name="uCustomerForm" role="form">

                        <div class="panel-body col-md-12">
                            <div class="form-group col-lg-12">
                                <div class="col-lg-6">
                                    <label class="control-label" for="motorista">Motorista: </label>
                                    <input class="form-control" type="text" name="motorista" value placeholder="ex.: Roberto">
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="veiculo">Veículo: </label>
                                    <input class="form-control" type="text" name="veiculo" value placeholder="ex.: a25s4ds47">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-lg-4">
                                    <label class="control-label" for="origem">Origem: </label>
                                    <input class="form-control" type="text" name="origem" value placeholder="ex.: São Simão - SP">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="destino">Destino: </label>
                                    <input class="form-control" type="text" name="destino" value placeholder="ex.: Olímpia - SP">
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label" for="data_partida">Data de Partida: </label>
                                    <input class="form-control date" type="text" name="data_partida" value placeholder="ex.: 25/04/2016">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-lg-4">
                                    <label class="control-label" for="tempo_viage">Tempo de Viagem: </label>
                                    <input class="form-control ano" type="text" name="tempo_viage" value placeholder="ex.: 5" title="Tempo em Horas">
                                </div>
                                <div class="col-lg-4">
                                    <label class="control-label" for="previsao_chegada">Previsão de Chegada: </label>
                                    <input class="form-control date" type="text" name="previsao_chegada" value placeholder="ex.: 25/04/2016">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-lg-5">
                                    <label class="control-label" for="previsao_chegada">Detalhes da Viagem: </label>
                                    <textarea class="form-control date" name="previsao_chegada" style="height: 100px" maxlength="255"></textarea>
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