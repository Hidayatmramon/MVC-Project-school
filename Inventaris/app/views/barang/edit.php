<div class="container">
  <h3 class="mb-3">Edit Peminjaman</h3>
  <form action="<?= BASE_URL; ?>/barang/updateBarang" method="post">
    <div class="class-body">
      <input type="hidden" name="id" value="<?= $data['barang']['id']; ?>">
      <div class="form-group mb-3">
        <label for="">Nama Peminjam : </label>
        <input type="text" class="form-control" name="nama_peminjam" value="<?= $data['barang']['nama_peminjam'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="">Jenis Barang :</label>
        <select class="form-control" name="jenis_barang">
          <option value="Laptop" <?= ($data['barang']['jenis_barang'] == 'Laptop') ? 'selected' : '' ?>>Laptop</option>
          <option value="HP" <?= ($data['barang']['jenis_barang'] == 'HP') ? 'selected' : '' ?>>HP</option>
          <option value="AdaptorLAN" <?= ($data['barang']['jenis_barang'] == 'AdaptorLAN') ? 'selected' : '' ?>>AdaptorLAN</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="">No Barang : </label>
        <input type="number" class="form-control" name="no_barang" value="<?= $data['barang']['no_barang'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="">Tanggal Pinjam : </label>
        <input type="datetime-local" class="form-control" name="tgl_pinjam" value="<?= $data['barang']['tgl_pinjam'] ?>">
      </div>
      <div class="form-group mb-3">
        <label for="">Tanggal Kembali : </label>
        <input type="datetime-local" class="form-control" name="tgl_kembali">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <br>
  <a href="<?= BASE_URL ?>/home/index"><button class="btn btn-danger">Kembali</button></a>
</div>