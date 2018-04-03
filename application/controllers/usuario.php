<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller{
    
    public function novo(){
        $adm = 0;
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha")),
             "ADM"=> $adm);
        $this->load->model("Usuario_model");
        if($this->usuario_model->cadastra($usuario)){
            $this->session->set_flashdata("sucess" , "cadastrado com Sucesso!");
        }else{
            $this->session->set_flashdata("danger" , "Algo deu errado!");
        }
        redirect("/");
        
        
    }
    

    public function cadastrar(){
       $this->load->template("usuario/cadastro.php");
       
   }

   
}

