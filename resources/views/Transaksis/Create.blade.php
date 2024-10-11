<form action="{{ url('/simpan-transaksi') }}" method="POST">
  @csrf  <!-- Token CSRF wajib untuk form POST di Laravel -->
  <div class="input-group mb-3">
    <span class="input-group-text">Tanggal Transaksi</span>
    <input type="date" class="form-control" name="tanggal_transaksi" required>
  </div>
  
  <div class="input-group mb-3">
    <span class="input-group-text">Nama Pembeli</span>
    <input type="text" class="form-control" name="nama_pembeli" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">Jumlah Barang Yang Di Beli</span>
    <input type="number" class="form-control" name="jumlah_barang" required>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">Total Harga</span>
    <input type="number" step="0.01" class="form-control" name="total_harga" required>
  </div>

  <button type="submit" class="btn btn-primary m-3">Simpan</button>
  <button type="reset" class="btn btn-warning m-3">Reset</button>
</form>
