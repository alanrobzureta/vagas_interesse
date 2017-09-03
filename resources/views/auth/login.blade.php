@extends('layouts.admin_template')
@section('content')
<div class="login-box">
<div class="login-logo">
  <a href="{{ url('/login') }}"><b>RH</b>ot</a>
</div>
<!-- /.login-logo -->
<div class="login-box-body">
  <p class="login-box-msg">Insira suas credenciais para acesso ao sistema</p>

  <form action="{{ url('/login') }}" method="post" role="form">
      {{ csrf_field() }}
    <div  class="form-group has-feedback form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group has-feedback form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <input class="form-control" placeholder="Senha" type="password" name="password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>
    <div class="row">
      <div class="col-xs-8">                      
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="remember"> Lembrar-me
              </label>
          </div>                           
      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
          <button type="submit" class="btn btn-primary">
              <i class="fa fa-btn fa-sign-in"></i> Login
          </button>
      </div>
      <p><a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu sua senha?</a></p>
      <p><a class="btn btn-link" href="{{ url('/register') }}">Registre-se</a></p>
      <!--<p><a class="btn btn-link" href="{{ url('/register') }}">Registre-se</a></p>-->
      <!-- /.col -->
    </div>
  </form>

<!--                <div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
      Facebook</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
      Google+</a>
  </div>-->
  <!-- /.social-auth-links -->

<!--                <a href="#">I forgot my password</a><br>
  <a href="register.html" class="text-center">Register a new membership</a>-->

</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
$(function () {
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
  });
});
</script>

@endsection
