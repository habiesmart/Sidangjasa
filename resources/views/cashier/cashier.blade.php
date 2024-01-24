@extends('layout.base')

@section('content')

<div class="ms-5 px-3 mt-3">
    <!-- Back button -->
    <button class="btn btn-secondary shadow-sm me-2">
    <i class="fa-solid fa-arrow-left-long me-1"></i>
        Pilih membership
    </button>
    <!-- Main menu button -->
    <button class="btn btn-secondary shadow-sm">
        <i class="fa-solid fa-house me-1"></i>
        Main menu
    </button>
    <!-- Customer label -->
    <div class="d-inline py-1 px-3 ms-2 rounded-pill bg-success-subtle">
        Customer: xxx |
        Membership: xxx
    </div>
</div>

<container class="row m-5 mt-3">

    <!-- Product section -->
    <div class="col-6">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <i class="fa-solid fa-list me-2"></i>
                <strong>Daftar Produk</strong>
            </div>

            <div class="card-body p-0 p-3 overflow-y-scroll" style="max-height: 36rem">
                <!-- Search bar -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari nama produk" aria-label="Cari nama customer">
                    <button class="btn btn-outline-secondary" type="button" id="search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <!-- Category tabs -->
                <ul class="nav nav-tabs mt-2" id="products-tab" role="tablist">
                    <li class="nav-item" >
                        <button class="nav-link active" id="cat1-tab" data-bs-toggle="tab" data-bs-target="#cat1-pane" type="button" role="tab" aria-controls="cat1-pane" aria-selected="true"><strong>Semua</strong></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cat2-tab" data-bs-toggle="tab" data-bs-target="#cat2-pane" type="button" role="tab" aria-controls="cat2-pane" aria-selected="false"><strong>Rokok</strong></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cat3-tab" data-bs-toggle="tab" data-bs-target="#cat3-pane" type="button" role="tab" aria-controls="cat3-pane" aria-selected="false"><strong>Obat-obatan</strong></button>
                    </li>
                </ul>
                <!-- Tabs content/pane -->
                <div class="tab-content" id="myTabContent">
                    
                    <!-- Category 1 -->
                    <div class="tab-pane fade show active" id="cat1-pane" role="tabpanel" aria-labelledby="cat1-tab" tabindex="0">
                        <!-- Tabel produk -->
                        <div class="border py-2 rounded overflow-y-scroll" style="height:26rem;max-height: 26rem">
                            <table class="table table-hover table-sm m-0">
                                <tr>
                                    <td class="px-2 wide-column">Barang 1</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                                <!-- static sample -->
                                <tr>
                                    <td class="px-2 wide-column">Khong Guan Biscuit Red Assorted 300G</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 wide-column">Ultra Teh Kotak Extra 200Ml</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 wide-column">Max Tea Instant Drink Lemon Tea 5X25g</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 wide-column">Indomie Mi Instan Goreng Plus Special 80g</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Category 2 -->
                    <div class="tab-pane fade" id="cat2-pane" role="tabpanel" aria-labelledby="cat2-tab" tabindex="0">
                        <!-- Tabel produk -->
                        <div class="border py-2 rounded overflow-y-scroll" style="height:26rem;max-height: 26rem">
                            <table class="table table-hover table-sm m-0">
                                <tr>
                                    <td class="px-2 wide-column">Barang 1</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Category 3 -->
                    <div class="tab-pane fade" id="cat3-pane" role="tabpanel" aria-labelledby="cat3-tab" tabindex="0">
                        <!-- Tabel produk -->
                        <div class="border py-2 rounded overflow-y-scroll" style="height:26rem;max-height: 26rem">
                            <table class="table table-hover table-sm m-0">
                                <tr>
                                    <td class="px-2 wide-column">Barang 1</td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Satuan</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-light border">Grosir</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

    <!-- Cart section -->
    <div class="col-6">
        <div class="card shadow-sm">
            <div class="card-header bg-blue text-white">
                <i class="fa-solid fa-cart-shopping me-2"></i>
                <strong>Keranjang</strong>
            </div>
            <!-- box container -->
            <div class="card-body">
                <div class="border rounded overflow-y-scroll py-1" style="height:25rem;">
                    
                    <!-- Cart table -->
                    <table class="table table-sm table-hover m-0">
                        <tr>
                            <td>Indomie Mi Instan Goreng Plus Special 80g</td>
                            <td><strong>Rp 40.000</strong></td>
                            <td width="15%">
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Satuan</option>
                                    <option value="1">Grosir</option>
                                </select>
                            </td>
                            <!-- Qty button -->
                            <td width="12%">
                                <div class="input-group">
                                    <input type="text" class="form-control text-center form-control-sm p-0" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="btn-group-vertical btn-group-sm float-end" role="group" aria-label="">
                                        <button type="button" class="btn btn-sm btn-outline-secondary py-0">+</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary py-0">-</button>
                                    </div>
                                </div>
                            </td>
                            <td width="5%">
                                <button type="button" class="btn btn-sm btn-outline-danger p-0" style="width:20px;height:20px;"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                        </tr>
                        <!-- sample 1-->
                        <tr>
                            <td>Indomie Mi Instan Goreng Plus Special 80g</td>
                            <td><strong>Rp 40.000</strong></td>
                            <td width="15%">
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Satuan</option>
                                    <option value="1">Grosir</option>
                                </select>
                            </td>
                            <!-- Qty button -->
                            <td width="12%">
                                <div class="input-group">
                                    <input type="text" class="form-control text-center form-control-sm p-0" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="btn-group-vertical btn-group-sm float-end" role="group" aria-label="">
                                        <button type="button" class="btn btn-sm btn-outline-secondary py-0">+</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary py-0">-</button>
                                    </div>
                                </div>
                            </td>
                            <td width="5%">
                                <button type="button" class="btn btn-sm btn-outline-danger p-0" style="width:20px;height:20px;"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                        </tr>
                        <!-- Sample 2 -->
                        <tr>
                            <td>Indomie Mi Instan Goreng Plus Special 80g</td>
                            <td><strong>Rp 40.000</strong></td>
                            <td width="15%">
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option selected>Satuan</option>
                                    <option value="1">Grosir</option>
                                </select>
                            </td>
                            <!-- Qty button -->
                            <td width="12%">
                                <div class="input-group">
                                    <input type="text" class="form-control text-center form-control-sm p-0" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="btn-group-vertical btn-group-sm float-end" role="group" aria-label="">
                                        <button type="button" class="btn btn-sm btn-outline-secondary py-0">+</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary py-0">-</button>
                                    </div>
                                </div>
                            </td>
                            <td width="5%">
                                <button type="button" class="btn btn-sm btn-outline-danger p-0" style="width:20px;height:20px;"><i class="fa-solid fa-xmark"></i></button>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Bottom table -->
                <div class="row mt-2 mx-1">
                    <div class="col-8 border rounded">
                        <table class="table">
                            <!-- Total Harga -->
                            <tr>
                                <th class="text-primary">Total</th>
                                <td colspan="2">Rp 120.000,00</td>
                            </tr>
                            <!-- Input tunai -->
                            <tr>
                                <th>Tunai</th>
                                <td width="5%">Rp</td>
                                <td>
                                    <input type="number" class="form-control" id="total-tunai">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- Button bayar -->
                    <div class="col-4 d-grid">
                        <button class="btn btn-primary" style="max-height:50%">
                            <strong>Bayar</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</container>

@endsection