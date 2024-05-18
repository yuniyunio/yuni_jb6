<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Toko Sembako</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="/" style="text-decoration: none"><h1 class="text-center my-4" style="color: #47b5ff; font-weight: bolder">TOKO SEMBAKO</h1></a>
                    <hr>
                </div>
                <div class="card">
                    <div class="card-header text-center">Data Pembelian</div>

                    <div class="card-body">
                        <table class="table">
                            <a href="/pembelian/create" class="btn btn-success">Tambahkan Data</a>
                            <thead>
                                <tr>
                                    <th>ID Pembelian</th>
                                    <th>ID Pembeli</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah Pembelian</th>
                                    <th>ID Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembelians as $pembelian)
                                    <tr>
                                        <td>{{ $pembelian->id }}</td>
                                        <td>{{ $pembelian->id_pembeli }}</td>
                                        <td>{{ $pembelian->nama_produk }}</td>
                                        <td>Rp {{ number_format($pembelian->biaya) }}</td>
                                        <td>{{ $pembelian->jumlah_pembelian }}</td>
                                        <td>{{ $pembelian->id_petugas }}</td>
                                        <td>
                                            <a href="{{ route('pembelians.show', $pembelian->id) }}"
                                                class="btn btn-sm btn-secondary">Detail</a>
                                            <a href="{{ route('pembelians.edit', $pembelian->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('pembelians.destroy', $pembelian->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
