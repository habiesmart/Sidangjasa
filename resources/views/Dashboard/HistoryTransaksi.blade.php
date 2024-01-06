@extends('layout.base')

@section('content')

    <div class="container">
      <h2 class="text-center">Histori Transaksi</h2>

      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>2024-01-03</td>
            <td>Pembelian Barang A</td>
            <td>Rp 500.000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>2024-01-04</td>
            <td>Pembayaran Tagihan Listrik</td>
            <td>Rp 200.000</td>
          </tr>
          <!-- Tambahkan baris tinggal sesuaikan -->
        </tbody>
      </table>
    </div>
    @endsection