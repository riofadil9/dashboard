<?php

class Login extends Controller{
    public function index($nama="fadil",$pekerjaan="mahasiswa")
    {
        $this->view("login/index");
    }
    public function hai(){
        $this->view("login/index");
    }
}