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

                        <div class="panel-body">
                            <span style="padding-top: 5px">
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="name">Nome: </label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="text" name="name" value placeholder="ex.: Maria das Graças">
                                </div>
                            </div>
                            </span>

                            <br>

                            <span style="padding-top: 5px">
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="phone">Telefone: </label>
                                <div class="col-lg-5">
                                    <input class="form-control celphones" type="text" name="phone" value placeholder="ex.: (16) 3623-4444">
                                </div>
                            </div>
                            </span>

                            <br>

                            <span style="padding-top: 5px">
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="addres">Cargo: </label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="text" name="address" value placeholder="ex.: Rua Laguna, 34, Jd àulista, Ribeirão Preto - SP">
                                </div>
                            </div>
                            </span>

                            <br>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
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