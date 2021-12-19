<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Crud</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{url ('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{url ('assets/css/style.css')}}">
        
        

    </head>
    <body>
        <nav class="nav-estilo navbar navbar-expand-md navbar-light bg-black shadow-sm ">
            <div class="container">

                <!-- Link Voltar Inicio -->
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="{{ url('/') }}">
                        Inicio
                    </a>
                        @guest
                            @if (Route::has('login'))
                                
                                    <a  href="{{ route('login') }}">{{ __('Entrar') }}</a>
                             
                            @endif

                            @if (Route::has('register'))
                                
                                    <a  href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                              
                            @endif
                            @else
                              
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                             
                        @endguest
                   
                </div>
            </div>
        </nav>
        <div class="wrapper">
            <div class="inner">
                <div id="app">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
