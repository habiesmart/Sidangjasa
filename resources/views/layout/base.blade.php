<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/fontawesome.min.css')}}">
    
    <!-- Style (general) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>

@yield('content')

</body>

    <!-- Bootstrap js -->
    <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>

</html>