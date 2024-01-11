<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Kualifikasi Keanggotaan</title>
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Kualifikasi membership</h2>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kualifikasi</th>
                <th>Deskripsi</th>
                <th>Syarat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Gold Member</td>
                <td>Anggota berstatus Gold</td>
                <td>Pembelian minimal Rp 1.000.000</td>
                <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Silver Member</td>
                <td>Anggota berstatus Silver</td>
                <td>Pembelian minimal Rp 500.000</td>
                <td>
                    <button class="btn btn-info btn-sm">Detail</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan baris sesuai dengan data kualifikasi membership -->
        </tbody>
    </table>

</div>

</body>
</html>
