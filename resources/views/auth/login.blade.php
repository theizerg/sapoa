@extends('auth.layouts.app')

@section('content')
 
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesión</p>

    <form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
       <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus placeholder="Ingresa tu usuario">
       @if ($errors->has('nb_usuario'))
        <span class="help-block">
        <strong>{{ $errors->first('nb_usuario') }}</strong>
            </span>
         @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="form-group has-feedback">
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                                <span class="fa fa-lock form-control-feedback"></span>
                                <span class="missing_alert text-danger" id="password_alert"></span>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    <a href="{{ route('password.request') }}"> Olvidé mi contraseña</a><br>    

@endsection
