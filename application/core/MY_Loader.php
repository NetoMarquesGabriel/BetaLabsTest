<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Loader extends CI_Loader{
    public function template($nome, $dados = array()) {
        $this->view("template/head.php");
        $this->view("template/navbar.php");
        $this->view("template/alerts.php");
        $this->view($nome, $dados);
        $this->view("template/footer.php");
    }
    
}

