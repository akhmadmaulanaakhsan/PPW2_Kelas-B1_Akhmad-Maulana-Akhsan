<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pertemuan7.css">
    <title>Gudang Barang</title>
</head>
<body>
    <h1 style="text-align: center"> Gudang Barang</h1>
    <button class="tambah-button">Tambah Buku</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama_Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>ID Supplier</th>
                    <th class="aksi-buku">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangkuu as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->id_supplier }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

</body>
</html>