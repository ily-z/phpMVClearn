<?php

class App{
    protected $controller = "Home";
    protected $method = "index";
    protected $params=[];

    public function __construct(){
        //echo"halo ini diApp";
        $url = $this->parseURL();
        //controller
        if (isset($url)) {
            if ($url["0"] !== null){
                if(file_exists('../app/controllers/'. $url[0] .'.php')){
                    $this->controller = $url[0];
                    unset($url[0]);
                    //error_reporting(0);
                }
            }
        }
        
        //method
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller =new $this->controller;

        if (isset($url[1])){
            if(method_exists( $this->controller, $url[1] )){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //parameter (in url)
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalanlan semua
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL(){
        if(isset($_GET["url"])){
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);  
            $url=explode('/',$url);
            return $url;
        }
    }
}
//echo"di app";