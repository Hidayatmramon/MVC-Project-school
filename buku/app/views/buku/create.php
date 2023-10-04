<div class="container">
  <h3 class="mb-3">Tambah Buku</h3>
  <form action="<?= BASE_URL; ?>/buku/simpanbuku" method="post">
    <div class="form-group mb-3">
      <label for="">Judul : </label>
      <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group mb-3">
      <label for="">Penullis : </label>
      <input type="text" class="form-control" name="penulis">
    </div>
    <div class="form-group mb-3">
      <label for="">Tanggal Selesai : </label>
      <input type="date" class="form-control" name="tgl_selesai">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>