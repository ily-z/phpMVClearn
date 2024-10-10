<div class="container d-flex justify-content-around flex-md-row flex-lg-wrap ">
  <?php foreach( $data['orang'] as $orang):?>

  <div class="card m-2 shadow mb-5 bg-white rounded" style="width: 18rem;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body bg-primary ">
      <h5 class="card-title"><?= $orang['nama']?></h5>
      <p class="card-text"><?= $orang['nomer']?></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> Nomer: <?= $orang['nomer']?></li>
      <li class="list-group-item"> Alamat: <?= $orang['alamat']?></li>
      <li class="list-group-item"> Status: <?= $orang['status']?></li>
    </ul>
    <div class="card-body">
    <a href="<?= BASEURL?>/orang" class="card-link">back</a>
    </div>
  </div>
  <?php endforeach?>
</div>