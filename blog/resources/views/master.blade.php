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
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/stat')}}">Štatistiky<span class="sr-only">(current)</span></a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/post')}}">Všetky odkazy</a>
                    </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url('user/' . Auth::id())}}">Moje odkazy</a>
                      </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{url('user/' . Auth::id())}}">{{ Auth::user()->name}}</a>
                     </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url('/logout')}}">Odhlásiť</a>
                      </li>

                  </ul>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
