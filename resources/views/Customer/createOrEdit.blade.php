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
    <div class="container mt-5">
        <div class="alert alert-danger alert-dismissible fade {{ !$errors->isEmpty() ? 'show' : 'hide' }}"
            role="alert">
            &#9888; <b>Error</b>
            <br>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
        <a class="btn btn-dark float-end" href="{{ route('customer.index') }}">&laquo; {{ __('kembali') }}</a>
        <p class="fs-1">Customer (Member)</p>

        <form action="{{ $route }}" method="POST">
            @csrf
            @method($http_method)
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nama Customer.." value="{{ old('name') ?? ($data->name ?? '') }}">
                            <small class="form-text text-muted">Nama toko, customer, atau perorangan untuk dijadikan
                                member</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pic">PIC</label>
                            <input type="text" class="form-control" id="pic" name="pic"
                                placeholder="Nama pic toko customer.." value="{{ old('pic') ?? ($data->pic ?? '') }}">
                            <small class="form-text text-muted">Person in charge perwakilan toko</small>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Nomer telepon toko customer.." value="{{ old('phone') ?? ($data->phone ?? '') }}">
                            <small class="form-text text-muted">Nomer telepon yang bisa dihubungi</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Alamat toko customer..">{{ old('address') ?? ($data->address ?? '') }}</textarea>
                            <small class="form-text text-muted">Alamat rumah/toko</small>
                        </div>
                        <br>
                        <select class="form-control" name="tier_id" id="tier_id">
                            <option value="0">Pilih Tier</option>
                            @foreach ($tiers as $tier)
                                <option @if (old('tier_id') == $tier->id || (!empty($data) && $tier->id == $data->tier_id)) selected @endif value="{{ $tier->id }}">
                                    {{ $tier->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit &RightTriangle;</button>
                    </div>
                </div>
        </form>
        <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
</body>

</html>
