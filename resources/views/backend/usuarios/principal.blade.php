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
                        <p class="col-lg-11" style="vertical-align: middle; text-align: center; font-size: 14pt; font-weight: bolder">Usuarios</p>
                    </div>

                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>e-mail</th>
                                @if(Auth::user()->id==1)
                                <th>Ação</th>
                                @endif
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach($users as $user): ?>
                            <tr>
                                <td style="vertical-align: middle"><?php echo $user->id;?></td>
                                <td style="vertical-align: middle"><?php echo $user->name;?></td>
                                <td style="vertical-align: middle"><?php echo $user->email;?></td>
                                @if(Auth::user()->id==1)
                                <td style="vertical-align: middle">
                                    <a href="{!! route('user.edit', ['id' => $user->id]) !!}"><img src="<?= asset('img/funcionario_edit.png'); ?>" title="Editar"></a>
                                </td>
                                @endif
                            </tr>
                            <?php endforeach;?>
                            </tbody>

                        </table>

                        <div class="col-lg-10 text-center">
                            {!! $users->render() !!}
                        </div>

                        <div class="col-lg-10">
                            <?php
                            if(Auth::user()->id == 1){
                                echo "<a href=\"usuarios/create\" class=\"col-lg-10\"><img src=".asset('img/funcionario_add.png')." title=\"Novo\"><p style=\"text-align: center; color: black\"></p></a>";
                            }
                            ?>



                            <!--   <a href="{!! route('user.create') !!}" class="col-lg-10"><img src="<?= asset('img/funcionario_add.png'); ?>" title="Novo"><p style="text-align: center; color: black"></p></a>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection