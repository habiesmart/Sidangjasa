<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>List Data Barang</title>
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>List Data Barang</h2>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Barang A</td>
                <td>Rp 100.000</td>
                <td>50</td>
                <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Barang B</td>
                <td>Rp 150.000</td>
                <td>30</td>
                <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan baris sesuaikan -->
        </tbody>
    </table>
</div>
</body>
</html>
