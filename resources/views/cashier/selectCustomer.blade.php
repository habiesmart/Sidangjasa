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
                        <button type="button" class="btn btn-secondary py-4" style="max-height:5em;">
                            Non-member
                        </button>
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
                        <input type="text" class="form-control" placeholder="Cari nama customer" aria-label="Cari nama customer">
                        <button class="btn btn-outline-secondary" type="button" id="search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="overflow-y-scroll border rounded" style="max-height:20em; min-height:20rem">
                        <!-- Customer list -->
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action">Wahyu Thamrin</button>
                            <button type="button" class="list-group-item list-group-item-action">Usyi Hassanah</button>
                            <button type="button" class="list-group-item list-group-item-action">Salimah Yuniar</button>
                            <button type="button" class="list-group-item list-group-item-action">Hesti Oktaviani</button>
                            <button type="button" class="list-group-item list-group-item-action">Harjo Wibisono</button>
                            <button type="button" class="list-group-item list-group-item-action">Wahyu Pratama</button>
                            <button type="button" class="list-group-item list-group-item-action">Tedi Adriansyah</button>
                            <button type="button" class="list-group-item list-group-item-action">Vero Prasetya</button>
                            <button type="button" class="list-group-item list-group-item-action">Jono Sitompul</button>
                            <button type="button" class="list-group-item list-group-item-action">Endra Setiawan</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection