<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/fontawesome.min.css')}}">
    
    <!-- Style (general) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>

@yield('content')

@yield('script')

</body>
</html>