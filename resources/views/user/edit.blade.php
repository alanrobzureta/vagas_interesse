@extends('layouts.admin_template')
@section('content')      
    <div class="box box-primary">
        <div class="register-box-body">
            <h3 class="box-title text-center">Alteração dos dados de {{ $user->name }}</h3>
            @include('errors.list')
            {!! Form::open(['url' => URL::to("users/$user->id")]) !!}
            {!! method_field('PUT') !!}
            {!! Form::token() !!}
                
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::text('name', $user->name, ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'Nome']) !!}                    
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback{{ $errors->has('cpf') ? ' has-error' : '' }}">
                    {!! Form::text('cpf', $user->cpf, ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'CPF']) !!}                    
                      @if ($errors->has('cpf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('cpf') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>  

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                   {!! Form::text('email', $user->email, ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'Email']) !!}                    
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <div class="col-xs-4">
                    {!! Form::submit('Alterar', ['class'=>'btn btn-primary btn-block btn-flat']) !!}                      
                  </div>
                  <div class="col-xs-4">
                      <a href="{{url('/users/')}}" class="btn btn-default">Voltar</a>
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
