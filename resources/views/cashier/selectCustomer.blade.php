@extends('layout.base')

@section('content')

<div id="main-container" class="container d-flex align-items-center justify-content-center">
    
    <!-- Pilih membership box -->
    <div class="card col-12 col-md-9 shadow" style="max-width: 40em;">
        <div class="card-header text-secondary">
            <button type="button" class="btn">
                <i id="back-btn" class="fa-solid fa-arrow-left-long fs-5 text-secondary"></i>
            </button>
            <a><strong>Pilih Customer</strong></a>
        </div>
        <div class="card-body" style="min-height:20rem;">
            <div class="row mx-0">

                <!-- non-member button -->
                <div class="col-4 pe-4">
                    <div class="d-grid">
                        <a href="{{route('cashier.create')}}">
                            <button type="button" class="btn btn-secondary py-4" style="max-height:5em;">
                                Non-member
                            </button>
                        </a>
                        <!-- info -->
                        <p class="text-secondary mt-3">
                            <small><i class="fa-solid fa-circle-info me-1"></i>
                            Jika customer belum memiliki membership, maka pilih sebagai non-member.</small>
                        </p>
                    </div>
                </div>

                <!-- customer search box -->
                <div class="col-8 d-grid border-start border-secondary ps-4">
                    <p class="mb-1 text-primary"><strong> Member
                        <i class="fa-solid fa-caret-down ms-1"></i>
                        </strong>
                    </p>

                    <div class="input-group mb-2">
                        <!-- Search bar -->
                        <input type="text" id="search-keyword" class="form-control" placeholder="Cari nama customer" aria-label="Cari nama customer">
                        <button class="btn btn-outline-secondary" type="button" id="search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="overflow-y-scroll border rounded" style="max-height:20em; min-height:20rem">
                        <!-- Customer list -->
                        <div id="list-customer" class="list-group">
                            @foreach ($customers as $customer)
                            <a href="{{route('cashier.create', ["customerID"=> $customer->id])}}" class="list-group-item list-group-item-action">{{"$customer->name | $customer->pic"}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
<script>
    $(document).ready(function(){

        $("#search-btn").click(function(){
            search();
        });

        function search(){
            var data = {
                "_token": "{{ csrf_token() }}",
                "keyword": $('#search-keyword').val()
            };
            $.ajax({
                url: '{{route('customer.find')}}',
                type:'POST',
                data: data,
                success: function(data, status, xhr){
                    $('#list-customer').empty();
                    data.data.forEach((customer, index) => {
                        var newCustomer = `<a href="{{route("cashier.create", ["customerID"=> "_customerID"])}}" class="list-group-item list-group-item-action">${customer.name} | ${customer.pic}</a>`.replace('_customerID', customer.id);                        $('#list-customer').append(newCustomer);
                    });
                },
                error: function(xhr, status, err){

                },
            });
        }
    });
</script>
@endsection