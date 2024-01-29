<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rHyoN1iRsVXV4nDyFiAaPxi1V7kXb8Pz35LOAi/VRZQ& ..." rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> --}}
    </head>
    <body>
        <br>
        <div class="container table-responsive">
            <br>
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            <div class="my-3">
                <a class="btn btn-dark" href="{{ route('home') }}">&laquo; {{ __('Menu') }}</a>
                <a class="btn btn-success float-end" href="{{ route('tier.create') }}">&plus; {{ __('Tambah') }}</a>
            </div>
            <table id="myTable" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Apakah Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{$row->description}}</td>
                           <td>
                                 <span class="badge bg-{{ $row->is_active ? 'success' : 'secondary' }}">
                                 {{ $row->is_active ? 'Ya' : 'Tidak' }}
                             </span>
                            </td>

                            <td class="d-flex align-items-center gap-3">
                               <a class="btn btn-warning  " href="{{route('tier.edit',['tier'=> $row->id])}}">Edit</a>

                                <form action="{{route('tier.destroy',['tier'=> $row->id])}}" method="post">
                                    @csrf
                                    @method('delete') 

                                    <button class="btnHapus btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$data->links()}}

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        {{-- <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> --}}
        <script>
            $(document).ready(function(){
                $('.btnHapus').click(function(){
                    return confirm("Hapus data?");
                })
            });
        </script>
    </body>
</html>