<?php 

class About extends Controller{
    public function index($nama='jokowo',$pekerjaan='presiden',$umur='40'){
        //echo"saya $nama adalah $pekerjaan   ";
        $data['nama']=$nama;
        $data['pekerjaan']=$pekerjaan;
        $data['umur']=$umur;
        $data['halaman']= 'About';
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page(){
        //echo"About/page";
        $data['halaman']='Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
