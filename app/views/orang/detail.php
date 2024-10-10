<div class="container">
<h3><?= $data['judul']?></h3>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['orang']['nama']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=  $data['orang']['nomer']?></h6>
    <p class="card-text">alamat: <?= $data['orang']['alamat']?></p>
    <p class="card-text">Status: <?= $data['orang']['status']?></p>
    <a href="<?= BASEURL?>/orang" class="card-link">back</a>
  </div>
</div>
</div>
