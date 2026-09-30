@extends('layouts.auth')

@section('content')



            <div class="card-body p-4">

                <h2>Restaurar Contraseña</h2>

                <p class="text-muted">Introduzca su correo registrado. <br/><br/>Recibirá un email con un enlace para restaurar la contraseña.</p>

                <p class="text-muted"><br/><br/>{{ trans('global.reset_password') }}</p>



                @if(session('status'))

                    <div class="alert alert-success" role="alert">

                        {{ session('status') }}

                    </div>

                @endif



                <form method="POST" action="{{ route('password.email') }}">

                    @csrf



                    <div class="form-group">

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email') }}">



                        @if($errors->has('email'))

                            <div class="invalid-feedback">

                                {{ $errors->first('email') }}

                            </div>

                        @endif

                    </div>



                    <div class="row">

                        <div class="col-12">

                            <button type="submit" class="btn btn-primary btn-flat btn-block">

                                {{ trans('global.send_password') }}

                            </button>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-12">

                            <p class="ad-register-text"><br/><br/><a href="https://portal.tramec.mx/login">&lt;&lt;Regresar al Portal</a></p>

                        </div>

                    </div>

                    

                </form>

            </div>

        

@endsection