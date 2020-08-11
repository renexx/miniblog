<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>403 UNAUTHORIZED</title>
   
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Prepáč, pridávať príspevky môžeš iba ako prihlásený.</div>
        <a href="{{url('/login')}}" class="bntDownload">Prihlásiť sa</a>    
        <a href="{{url('/post')}}" class="bntDownload">Späť</a>    
    </div>
</div>
</body>
</html>