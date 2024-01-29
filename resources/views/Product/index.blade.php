<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rHyoN1iRsVXV4nDyFiAaPxi1V7kXb8Pz35LOAi/VRZQ& ..." rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <div class="container table-responsive py-5">
        <br>
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
        <table id="myTable" class="table table-striped">
            <thead class="table-dark ">
                <tr>
                    <th>Name</th>
                    <th>Product Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->product_category }}</td>
                    <td class="d-flex align-items-center gap-4">
                        <a class="btn btn-warning " href="{{route('product.edit',['product'=> $row->id])}}">detail</a>
                        <form action="{{route('product.destroy',['product'=> $row->id])}}" method="post"
                            >
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$data->links()}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
