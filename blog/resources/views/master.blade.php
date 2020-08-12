<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body>
        <header class="container-fluid">
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @if(Auth::check())

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="{{url('/')}}">Odkazy</a>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link" href="{{url('/stat')}}">Štatistiky</a>
                      <a class="nav-item nav-link" href="{{url('/post')}}">Všetky odkazy</a>
                      <a class="nav-item nav-link" href="{{url('user/' . Auth::id())}}">Moje odkazy</a>
                      <a class="nav-item nav-link" href="{{url('user/' . Auth::id())}}">{{ Auth::user()->name}}</a>

                      <a class="nav-item nav-link" href="{{url('/logout')}}">Odhlásiť</a>
                    </div>
                  </div>
                </nav>
            @else
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="{{url('/stat')}}">Štatistiky</a>
                  <a class="nav-item nav-link" href="{{url('/post')}}">Všetky odkazy</a>
                  <a class="nav-item nav-link" href="{{url('/login')}}">Prihlásiť</a>
                  <a class="nav-item nav-link" href="{{url('/register')}}">Registrovať</a>
                </div>
              </div>
            </nav>
            @endif
        </header>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script src='js/main.js'></script>
    </body>
</html>
