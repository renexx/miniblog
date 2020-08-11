<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') / blog</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

                <!-- <nav class="navigation">
                    <div class="btn-group btn-group-sm pull-left">
                        <a href="{{url('/stat')}} " class="btn btn-default">Štatistiky</a>
                        <a href="{{url('/post')}} " class="btn btn-default">Všetky odkazy</a>
                        <a href="{{url('user/' . Auth::id())}}" class="btn btn-default"> Moje odkazy
                    </div>
                    <div class="btn-group btn-group-sm pull-right">
                        <span class="username">{{ Auth::user()->name}}</span>
                         <a href="{{url('/logout')}}" class="btn btn-default logout"> logout</a>
                    </div>
                </nav> -->

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="#">Odkazy</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="{{url('/stat')}}">Štatistiky</a>
                      <a class="nav-item nav-link" href="{{url('/post')}}">Všetky odkazy</a>
                      <a class="nav-item nav-link" href="{{url('user/' . Auth::id())}}">Moje odkazy</a>
                      <a class="nav-item nav-link" href="{{url('user/' . Auth::id())}}">{{ Auth::user()->name}}</a>

                      <a class="nav-item nav-link disabled" href="{{url('/logout')}}">Logout</a>
                    </div>
                  </div>
                </nav>
            @else
            <div class="btn-group btn-group-sm pull-left">
                <a href="{{url('/post')}} " class="btn btn-default"> all posts</a>
            </div>
            <div class="btn-group btn-group-sm pull-right">

                 <a href="{{url('/login')}}" class="btn btn-default"> login</a>
                 <a href="{{url('/register')}}" class="btn btn-default">register</a>
            </div>

            @endif
        </header>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>
