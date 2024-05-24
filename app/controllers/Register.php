<?php

class Register extends Controller{
    public function index($nama="fadil",$pekerjaan="mahasiswa")
    {
        $this->view("register/index");
    }
    public function hai(){
        $this->view("login/index");
    }
}
