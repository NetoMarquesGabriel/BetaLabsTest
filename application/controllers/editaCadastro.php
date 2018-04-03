<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class EditaCadastro extends CI_Controller{
    public function index(){
        autoriza();
        $this->load->template("usuario/editar.php");
    }
    
    public function edita(){
       autoriza();
       $senha = md5($this->input->post("senha"));
        $nome = $this->input->post("nome");
        $data = array(
            'nome' => $nome,
            'senha' => $senha
        );
       $this->load->model('Usuario_model');
       $usuario = $this->session->userdata("usuario_logado");
       $id = $usuario['cod_usuario'];
       echo $id;
       var_dump($data);
       
       if($this->usuario_model->editaInformacoes($id,$data)){
            $this->session->set_flashdata("sucess", "atualizado com sucesso");
        }else{
            $this->session->set_flashdata("danger", "erro ao atualizar");
        }
        redirect("/");
   }
}