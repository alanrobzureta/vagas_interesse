@extends('layouts.admin_template')
@section('content')    
    <div class="box box-primary">
        <div class="register-box-body">
            <h3 class="box-title text-center">Formulário de Cadastro</h3>
            @include('errors.list')
            {!! Form::open(['url' => URL::to("users"),'id'=>'form']) !!}            
            {!! Form::token() !!}
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::text('name',old('name'), ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'Nome']) !!}                    
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('cpf') ? ' has-error' : '' }}">
                    {!! Form::text('cpf',old('cpf'), ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'CPF']) !!}                    
                      @if ($errors->has('cpf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('cpf') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>  

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                   {!! Form::text('email',old('email'), ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'Email']) !!}                    
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::password('password', ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'Senha']) !!}                    
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
            {!! Form::close() !!}
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
