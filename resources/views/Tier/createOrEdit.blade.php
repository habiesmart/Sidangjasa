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
        <div class="alert alert-danger alert-dismissible fade {{!$errors->isEmpty() ? 'show' : 'hide'}}" role="alert">
            &#9888; <b>Error</b>
            <br>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
        <a class="btn btn-dark float-end" href="{{ route('tier.index') }}">&laquo; {{ __('kembali') }}</a>
        <p class="fs-1">Tiers</p>
        <form action="{{ $route }}" method="POST">
            @csrf
            @method($http_method)

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama tier.."
                    value="{{ old("name") ?? $data->name ?? '' }}">
                <small class="form-text text-muted text-bold">Tingkatan atau membership untuk menentukan harga</small>
            </div>
            <br>
            <div class="form-group">
                <label for="name">Deskripsi</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Nama tier.."
                    value="{{ old("description") ?? $data->description ?? '' }}">
                <small class="form-text text-muted text-bold">Penjelasan tentang tier yang anda tambahkan</small>
            </div>
            <br>
            <div class="form-group form-check">
                <input type="hidden" class="form-check-input" name="is_active" value="0">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" @if(old("is_active") ?? $data->is_active ?? 0) checked @endif>
                <label class="form-check-label" for="is_active">Apakah data ini diaktifkan?</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
