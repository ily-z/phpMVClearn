<?php

class Orang extends Controller{
    public function index(){
        $data['halaman']='orang';
        $data['judul']='dafatar orang';
        $data['orang']=$this->model('Orang_model')->takeALLorang();
        $this->view('templates/header',$data);
        $this->view('orang/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['halaman']='detail orang ';
        $data['judul']='detail orang';
        $data['orang']=$this->model('Orang_model')->takeOrangById($id);
        $this->view('templates/header',$data);
        $this->view('orang/detail',$data);
        $this->view('templates/footer');
    }

    public function semuaorang(){
        $data['halaman']='orang semua';
        $data['judul']='orang semua';
        $data['orang']=$this->model('Orang_model')->takeALLorang();
        $this->view('templates/header',$data);
        $this->view('orang/semuaorang',$data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Orang_model')->tambahDataOrang($_POST) > 0){
            Flasher::setFlash(' berhasil ','ditambahkan','success');
            header('location:'.BASEURL.'/orang');
            exit;
        }else{
            Flasher::setFlash(' gagal',' ditambahkan','danger');
            header('location:'.BASEURL.'/orang');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Orang_model')->hapusDataOrang($id) > 0){
            Flasher::setFlash(' berhasil ','dihapus','success');
            header('location:'.BASEURL.'/orang');
            exit;
        }else{
            Flasher::setFlash(' gagal ',' dihapus ','danger');
            header('location:'.BASEURL.'/orang');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Orang_model')->takeOrangById($_POST['id']));
        //echo 'ok';
    }

    public function ubahData( ){ 
        if($this->model('Orang_model')->ubahDataOrang($_POST) > 0){
            Flasher::setFlash(' berhasil','  diubah','success');
            header('location:'.BASEURL.'/orang');
            exit;
        }else{
            Flasher::setFlash(' gagal',' diubah','danger');
            header('location:'.BASEURL.'/orang');
            exit;
        }
    }
}

