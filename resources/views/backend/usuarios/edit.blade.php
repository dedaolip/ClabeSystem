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
                        &nbsp;&nbsp;Editar Usuários
                    </div>

                    <div class="panel-body">

                        @if ($errors->any())
                            <div class="row marBottom13">
                                <div class="col-lg-12">
                                    <ul class="alert alert-warning">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <form id="uUpdateUserForm" action="{!! route('user.update', ['id' => $user->id]) !!}" method="post" class="form-horizontal ng-pristine ng-valid" name="uUpdateUserForm" role="form">

                            <div class="row marBottom13">
                                <div class="col-lg-4{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label" for="uName">Nome: </label>
                                    <input class="form-control" type="text" name="name" value ="<?= $user->name; ?>">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                    @endif
                                </div>

                                <div class="col-lg-4{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label" for="email">E-mail: </label>
                                    <input class="form-control" type="text" name="email" value ="<?= $user->email; ?>">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row marBottom13">
                                <div class="col-lg-4{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label" for="uPassword">Nova Senha: </label>
                                    <input id="uPassword" class="form-control" type="password" name="password" placeholder="********">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                    @endif
                                </div>

                                <div class="col-lg-4{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="control-label" for="uPasswordConfirmation">Confirme a Senha: </label>
                                    <input id="uPasswordConfirmation" class="form-control" type="password" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    <input name="_method" type="hidden" value="PUT">
                                    {{ csrf_field() }}
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
