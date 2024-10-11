<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Transaksi</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Transaksi></a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Tanggal Transaksi</th>
        <th scope="col">Nama Pembeli</th>
        <th scope="col">Jumlaha Barang Yang Dibeli</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
        <td><img src="{{asset('storage/products/'.$product->image)}}" alt=""></th>
        <td>{{ $product->title}}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->stoct}}</td>
    <td>
    <button type="button" class="btn btn-success btn-sm">Lihat</button>
    <button type="button" class="btn btn-warning btn-sm">Edit</button>
    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
    @empty
    <p>Data Belum Tersedia.<p>
   
    @endforelse
</tbody>
    <td>
        <tr>
    </table>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
    </html>