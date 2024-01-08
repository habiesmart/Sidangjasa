<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">


    </head>
    <body>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        <form action="{{$route}}" method="POST">
            @csrf
            @method($http_method)

            {{-- {{dd($data->is_active)}} --}}
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama tier.." value="{{ !empty($data)? old($data->name, $data->name): ''}}">
                <small class="form-text text-muted">Tingkatan atau membership untuk menentukan harga</small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="{{ !empty($data)? old($data->is_active, $data->is_active) : __('1')}}" @if(!empty($data->is_active)) checked @endif>
                <label class="form-check-label" for="is_active">Apakah data ini diaktifkan?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
                
            });
        </script>
    </body>
</html>