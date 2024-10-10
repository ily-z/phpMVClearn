<?php 
class Home extends Controller{
    public function index(){
        //echo"home/index";
        //echo"kalo ada berarti bener";
        $data['halaman']='Home';
        $data['nama']= $this->model('User_model')->getUser();
        $this->view('templates/header',$data);
        $this->view("home/index",$data);
        $this->view('templates/footer');

    }
}