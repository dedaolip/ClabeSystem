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
                            <a href="{{ url('/veiculos') }}" style="color: black"><img src="img/veiculo.png" title="veículos"></a>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <a href="{{ url('/clientes') }}" style="color: black"><img src="img/provider.png" title="Clientes"></a>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <a href="{{ url('/funcionarios') }}" style="color: black"><img src="img/funcionario.png" title="Funcionários"></a>
                        </div><div class="col-md-2 col-md-offset-1">
                            <a href="{{ url('/viagens') }}" style="color: black"><img src="img/aviao.png" title="Viagens"></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
