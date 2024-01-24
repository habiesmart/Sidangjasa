@extends('layout.base')

@section('content')
<style>
        body {
            font-size: 13px;
        }
        .receipt-container {
            width: fit-content;
            background-color: white;
            padding: 0rem 1rem 2rem 1rem;
            margin: 0 auto;
            margin-top: 3rem;
        }
        .header {
            margin: 0;
            text-align: center;
        }
        h2, p {
            margin: 0;
        }
        .flex-container-1 {
            display: flex;
            margin-top: 10px;
        }
        .flex-container-1 > div {
            text-align : left;
        }
        .flex-container-1 .right {
            text-align : right;
            width: 200px;
        }
        .flex-container-1 .left {
            width: 100px;
        }
        .flex-container {
            width: 300px;
            display: flex;
        }
        .flex-container > div {
            -ms-flex: 1;  /* IE 10 */
            flex: 1;
        }
        ul {
            display: contents;
        }
        ul li {
            display: block;
        }
        hr {
            border-style: dashed;
        }
        a {
            text-decoration: none;
            text-align: center;
            padding: 10px;
            background: #00e676;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        #back-button {
            position: relative;
            left: -6rem;
            top: 0;
            margin: 0;
        }
    </style>

    

    <!-- Invoice -->
    <div class="receipt-container shadow">
        <!-- Back to cashier button -->
        <button class="btn btn-outline-secondary ms-auto" type="button" id="back-button">
            <i class="fa-solid fa-arrow-left-long"></i>
        </button>

        <div class="header" style="margin-bottom: 30px;">
            <h2>Toko {{config('app.name')}}</h2>
            {{-- <small>
                
            </small> --}}
        </div>
        <hr>
        <div class="flex-container-1">
            <div class="left">
                <ul>
                    <li>No Order</li>
                    <li>Kasir</li>
                    <li>Tanggal</li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li> {{-- $order->receipt_number --}} xxx</li>
                    {{-- <li> {{ $order->nama_kasir }} xxx</li> --}}
                    <li> {{-- date('Y-m-d : H:i:s', strtotime($order->created_at)) --}} xxx</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="flex-container" style="margin-bottom: 10px; text-align:right;">
            <div style="text-align: left; flex-grow:2; ">Nama Produk</div>
            <div>Jumlah</div>
            <div>Harga/Qty</div>
            <div>Total</div>
        </div>

        {{-- @foreach ($order->productOrder as $item) --}}
            <div class="flex-container" style="text-align: right;">
                <div style="text-align: left; flex-grow:2;">Top Coffee Kopi Gula 2 In 1 20X25g {{-- $orderDetail->product->name --}}</div>
                <div> {{-- $orderDetail->quantity --}} xxx</div>
                <div>Rp {{-- number_format($orderDetail->price) --}} xxx</div>
                <div>Rp {{-- number_format($orderDetail->price * $orderDetail->quantity) --}} xxx</div>
            </div>
        <hr>
        <div class="flex-container" style="text-align: right; margin-top: 10px;">
            <div></div>
            <div>
                <ul>
                    <li>Grand Total</li>
                    <li>Pembayaran</li>
                    <li>Kembalian</li>
                </ul>
            </div>
            <div style="text-align: right;">
                <ul>
                    <li>Rp {{-- number_format($order->grand_total) --}} xxx</li>
                    <li>Rp {{-- number_format($order->cash) --}} xxxx</li>
                    <li>Rp {{-- number_format($order->change) --}} xxx</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="header" style="margin-top: 25px;">
            <h3>Terima kasih</h3>
            <p>Silahkan berkunjung kembali</p>
        </div>
    </div>

    <div class="mx-auto row my-4" style="width:20rem;">
        <button type="button" class="btn col btn-lg shadow-sm btn-primary px-5 me-3">
            Cetak struk
        </button>
        <button type="button" class="btn col-2 btn-secondary">
            <i class="fa-solid fa-house"></i>
        </button>
    </div>


@endsection