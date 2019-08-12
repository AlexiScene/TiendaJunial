@extends('store.template')

@section('content')
<div class="container text-center ">

    <div class="page-header">
        <h1><i class="fa fa-user"></i> Iniciar Sesión</h1>

    </div>
    <div class="row ">
        <div class="col-md-offset-2 col-md-8">
            <div class="page">
                                
                @include('store.partials.errors')

                    <form class="container text-center"  method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" width="50%" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>


                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <label for="password">Contraseña</label>
                           <input class="form-control" type="password" name="password" id="password" required="">

                        
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember"> Recuérdame
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Ingresar</button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a><hr>
                                ¿No tienes cuenta?
                                 <button class="btn btn-primary" type="submit">Crear Cuenta</button>
                            
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@stop
