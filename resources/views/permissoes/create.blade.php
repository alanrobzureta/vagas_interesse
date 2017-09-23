@extends('layouts.admin_template')
@section('content')    
    <div class="box box-primary">
        <div class="register-box-body">
            <h3 class="box-title text-center">Formulário de Cadastro</h3>
            @include('errors.list')
            {!! Form::open(['url' => URL::to("permissoes"),'id'=>'form']) !!}            
            {!! Form::token() !!}
                <div class="form-group has-feedback{{ $errors->has('nome') ? ' has-error' : '' }}">
                    {!! Form::text('nome',old('nome'), ['class'=>'form-control', 'maxlength'=>150, 'placeholder'=>'Nome']) !!}                    
                      @if ($errors->has('nome'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nome') }}</strong>
                          </span>
                      @endif
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
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
