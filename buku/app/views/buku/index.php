<div class="container">
  <h3 class="mb-3">Daftar Buku</h3>
  <br>
  <div class="d-flex justify-content-between">
    <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>
    <div class="d-flex">
      <form action="<?= BASE_URL; ?>/buku/cari" method="post" class="d-flex">
        <input type="text" class="form-control" name="search">
        <button type="submit" class="btn btn-primary">Cari</button>
      </form>
      <a href="<?= BASE_URL; ?> /buku/index" class="btn btn-secondary">Reset</a>
    </div>
  </div>
  <br>
  <table class="table table-light table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Tanggal Selesai</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($data['buku'] as $row) : ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $row['judul'] ?></td>
          <td><?= $row['penulis'] ?></td>
          <td><?= $row['tgl_selesai'] ?></td>
          <td>
            <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
            <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?')">hapus</a>
          </td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>
</div>