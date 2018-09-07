<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
    <div id="app">
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <b-navbar toggleable type="dark" variant="primary">
            <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>

            <b-navbar-brand href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </b-navbar-brand>

            <b-collapse is-nav id="nav_text_collapse">
                <b-navbar-nav class="ml-auto">
                    @guest
                        <b-nav-item href="{{ route('login') }}">Ingresar</b-nav-item>
                        <b-nav-item href="{{ route('register') }}">Registro</b-nav-item>
                    @else
                        <!-- Navbar dropdown -->
                        <b-nav-item-dropdown text="{{ Auth::user()->name }}" right>
                            <b-dropdown-item href="#" @click="logout">
                                Cerrar sesión
                            </b-dropdown-item>
                        </b-nav-item-dropdown>
                    @endguest
                </b-navbar-nav>
            </b-collapse>

        </b-navbar>

     
 
                {{-- <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a >Login</a></li>
                            <li><a href="">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     >
                                            Logout
                                        </a>

                                        
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
       

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
