@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem Vindo ao ClabeSystem</div>

                <div class="panel-body">

                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-2 col-md-offset-1">
                            <img src="img/veiculo.png">
                            <p>Veículos</p>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img src="img/motorista.png">
                            <p>Motorista</p>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <img src="img/provider.png">
                            <p>Forneçedor</p>
                        </div>
                        <div class="col-md-2 col-md-offset-1">

                            <a href="{{ url('/func') }}"><img src="img/funcionario.png">Funcionários</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
