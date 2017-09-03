@extends('layouts.admin_template')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  
    <div class="box box-primary">
        <div class="register-box-body">
            <h3 class="box-title text-center">Formulário de Cadastro</h3>
            <form action="{{ url('/users/store/') }}" method="post" id="form" >
                {{ csrf_field() }}
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="nome" value="{{ old('name') }}" id="name" name="name">
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('cpf') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="cpf" value="{{ old('cpf') }}" id="cpf" name="cpf">
                      @if ($errors->has('cpf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('cpf') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>  

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" id="email" name="email">
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="senha" id="password" name="password">
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                          <input id="password-confirm" placeholder="Repetir senha" type="password" class="form-control" name="password_confirmation">

                          @if ($errors->has('password_confirmation'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                              </span>
                          @endif
                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                </div>    

                <div class="row">
                  <!-- /.col -->
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                  </div>
                  <!-- /.col -->
                </div>
            </form>
        </div>
    </div>
        <!-- /.form-box -->

    <!-- jQuery 3.1.1 -->
    <script src="{{ asset("../bower_components/AdminLTE/plugins/jQuery/jquery-3.1.1.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset("../bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("../bower_components/AdminLTE/plugins/iCheck/icheck.min.js") }}"></script>


@endsection
