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
                            <a href="{!! route('vei.index') !!}" style="color: black"><img src="img/veiculo.png" title="Veículos"></a>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <a href="{!! route('cli.index') !!}" style="color: black"><img src="img/provider.png" title="Clientes"></a>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <a href="{!! route('func.index') !!}" style="color: black"><img src="img/funcionario.png" title="Funcionários"></a>
                        </div><div class="col-md-2 col-md-offset-1">
                            <a href="{!! route('via.index') !!}" style="color: black"><img src="img/aviao.png" title="Viagens"></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
