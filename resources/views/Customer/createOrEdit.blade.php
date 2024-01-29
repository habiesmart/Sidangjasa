<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 


    </head>
    <body>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
        <form action="{{$route}}" method="POST">
            @csrf
            @method($http_method)
            <div class="container table-responsive">   
            <div class="form-group table-striped">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Customer.." value="{{ !empty($data)? old($data->name, $data->name): ''}}">
                <small class="form-text text-muted">Tingkatan atau membership untuk menentukan harga</small>
            </div>
            <div class="form-group">
                <label for="pic">PIC</label>
                <input type="text" class="form-control" id="pic" name="pic" placeholder="Nama pic toko customer.." value="{{ !empty($data)? old($data->pic, $data->pic): ''}}">
                <small class="form-text text-muted">person in charge</small>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone toko customer.." value="{{ !empty($data)? old($data->phone, $data->phone): ''}}">
                <small class="form-text text-muted">nomer telepon</small>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="address toko customer..">{{ !empty($data)? old($data->address, $data->address): ''}}</textarea>
                <small class="form-text text-muted">alamat rumah</small>
            </div>
            <div class="form-group">
                 <select class="form-control" name="tier_id" id="tier_id">
                <option value="0">pilih tier</option>
                @foreach ($tiers as $tier)
                    <option @if(!empty($data) && $tier->id == $data->tier_id) selected @endif value="{{$tier->id}}">{{$tier->name}}</option>
                @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
                
            });
        </script>
    </body>
</html>