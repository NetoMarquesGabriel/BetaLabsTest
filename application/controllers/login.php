<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
    public function index(){
        $this->load->template("login/index.php");
        
    }
    public function autenticar(){
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));
        $this->load->model("Usuario_model");
        $usuario = $this->usuario_model->autentica($email, $senha);
        if($usuario){
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("sucess" , "logado com Sucesso!");
            redirect('/');
            
            
        }else{
            $this->session->set_flashdata("danger" , "email ou senha invalidos!");
            redirect('/login/index');
            
        }

        
    }
    
    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("sucess" , "deslogado com Sucesso!");
        redirect('/');
        
    }
}