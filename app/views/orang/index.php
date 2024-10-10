<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php if(isset($_SESSION['flash'])){
            Flasher::flash();
            }
            ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mt-3 mb-4 tambahDataOrang" id='labelTambah'data-toggle="modal" data-target="#formmodal">
            Tambah Data Orang
            </button>
        </div>
    </div> 

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL;?>/Orang/cari" method="post">
            <div class="input-group mb-2">
                <input type="text" class="form-control" placeholder="cari orang di sini" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">cari</button>
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>daftar orang</h3
            <ul class="list-group">

                <?php foreach( $data['orang'] as $orang):?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $orang['nama'];?>
                    <div class="justify-content-between align-items-end">
                        <!-- info -->
                        <a href="<?= BASEURL?>/orang/detail/<?= $orang['id']?>" class="badge bg-info text-white  ">Info</a>
                        <!-- ubah -->
                        <a href="<?= BASEURL?>/orang/update/<?= $orang['id']?>" class="badge bg-warning text-white tampilModalUbah"  data-toggle="modal" data-target="#formmodal" data-id="<?= $orang['id']?>" >update</a>
                        <!-- hapus -->
                        <a href="<?= BASEURL?>/orang/hapus/<?= $orang['id']?>" class="badge bg-danger text-white " onclick="return confirm('yakin?')">hapus</a>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
            <br>
            <a href="<?= BASEURL?>/orang/semuaorang"><button type="button" class="btn btn-primary">data semua orang</button></a>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Tambah Data Orang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form  -->
        <form method="post" action="<?= BASEURL?>/orang/tambah">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="inputnama">Masukkan Nama</label>
                <input type="text" class="form-control" id="inputnama" aria-describedby="emailHelp" placeholder="masukkan nama" name="inputnama">
                <small id="emailHelp" class="form-text text-muted">silahkan masukkan nama lengkap</small>
            </div>
            <div class="form-group">
                <label for="inputnomer">Nomer</label>
                <input type="number" class="form-control" id="inputnomer" placeholder="masukkan nomer anda" name="inputnomer">
            </div>
            <div class="form-group">
                <label for="inputalamat">Masukkan Alamat</label>
                <textarea class="form-control" id="inputalamat" name="inputalamat" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="inputstatus">Pilih Status</label>
                <select class="form-control" id="inputstatus" name="inputstatus">
                <option value="aktif">aktif</option>
                <option value="nonaktif">nonaktif</option>
                </select>
            </div>
            <div class="labelsubmit">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
            <!-- endform -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>