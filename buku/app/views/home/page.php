<div class="container">
  <div class="d-felx justify-content-center">
    <div class="card mx-auto" style="width: 20rem;">
      <img src="<?= BASE_URL ?>/img/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Profile Anda </h5>
        <p class="card-text">
          Nama : <?= $data['nama'] ?>
          <br>
          Status : <?= $data['pekerjaan'] ?>
        </p>
        <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>