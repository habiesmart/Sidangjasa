@extends('layout.base')

@section('content')
<!-- Container -->
<div id="main-container" class="container d-flex align-items-center justify-content-center">
    
    <!-- main menu box -->
    <div class="card col-12 col-md-9 shadow" style="max-width: 30em;">
        <div class="card-header text-secondary">
            <a><strong>Main menu</strong></a>
        </div>
        <div class="card-body">
            <div class="row mx-0 overflow-hidden">
                
                <!-- Kasir button -->
                <button class="fs-1 col-12 btn btn-primary py-3 mb-2">
                    <i class="fa-solid fa-cash-register"></i>
                    Kasir
                </button>

                <!-- Dashboard button -->
                <div class="col-6 d-grid p-0 pe-2">
                    <button class="btn btn-success py-2">
                        <i class="fa-solid fa-chart-column"></i>
                        Dashboard
                    </button>    
                </div>

                <!-- Admin Button -->
                <div class="col-6 d-grid p-0">
                    <button class="btn btn-secondary py-2">
                        <i class="fa-solid fa-gear"></i>
                        Admin
                    </button>    
                </div>
                
            </div>
        </div>
    </div>

</div>

@endsection