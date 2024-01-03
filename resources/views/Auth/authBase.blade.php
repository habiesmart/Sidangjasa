<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/fontawesome.min.css')}}">
    
    <!-- Style (general) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>
    
    <div id="main-container" class="container d-flex align-items-center justify-content-center">
        
        <!-- Box login -->
        <div class="col-10 col-md-5 bg-white p-4 rounded shadow" style="min-width: 20em;">
            @yield('auth-content')
        </div>

    </div>

</body>
</html>