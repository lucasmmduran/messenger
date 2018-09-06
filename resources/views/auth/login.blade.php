@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">

        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>
                    Por favor, ingresa tus datos:
                </b-alert>
                <p class="card-text">Header and footers using props.</p>
                <b-button href="#"
                          variant="primary">Go somewhere</b-button>

                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <b-form-group
                        label="Correo electrónico"
                        label-for="email"
                        description="Nunca compartiremos tu correo. Está seguro con nosotros.">

                        <b-form-input type="email"
                        id="email" name="email"
                        value="{{ old('email') }}" required autofocus
                        placeholder="ejemplo@micorreo.com">
                        </b-form-input>

                    </b-form-group>

                    <b-form-group
                        label="Contraseña"
                        label-for="password"
                        description="Nunca compartiremos tu correo. Está seguro con nosotros.">

                        <b-form-input type="password"
                        id="password" name="password"
                        value="{{ old('password') }}" required>
                        </b-form-input>

                    </b-form-group>

                   

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </b-card>
        </b-col>

    </b-row>
</b-container>
@endsection
