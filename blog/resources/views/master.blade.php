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
        <header class="container">
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif    

            @if(Auth::check())

                <nav class="navigation">
                    <div class="btn-group btn-group-sm pull-left">
                        <a href="{{url('/post')}} " class="btn btn-default"> all posts</a>
                        <a href="{{url('user/' . Auth::id())}}" class="btn btn-default"> my posts
                    </div>
                    <div class="btn-group btn-group-sm pull-right">
                        <span class="username">{{ Auth::user()->name}}</span>
                         <a href="{{url('/logout')}}" class="btn btn-default logout"> logout</a>    
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
