<?php

class Home extends Controller{
    public function index($nama="fadil",$pekerjaan="mahasiswa")
    {
        $this->view("home/index");
    }
    public function hai(){
        echo 'home/hai';
    }
}