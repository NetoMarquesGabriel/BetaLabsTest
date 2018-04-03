<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comentarios extends CI_Controller{
    
    public function index(){
        $this->load->helper("date_helper");
        $this->load->helper("typography");
        $this->load->model("Comentarios_model");
        $comentarios = $this->Comentarios_model->buscaComentarios();
           if($this->session->userdata("usuario_logado")){
           $usuario = $this->session->userdata("usuario_logado");
           $dados = array("comentarios" => $comentarios, 'usuario' => $usuario);
        }else{
            $dados = array("comentarios" => $comentarios);
        }


    $this->load->template("comentarios/index",$dados);

    
    
    }
    public function adicionar(){

        $this->load->model("Comentarios_model");
        $usuario = $this->session->userdata("usuario_logado");
        $id = $usuario['cod_usuario'];
        $comentario = $this->input->post('comentario');
        $titulo = $this->input->post('titulo');
        $data = date('Y/m/d');
        $dados = array(
            'comentario' => $comentario,
            'titulo' => $titulo,
            'cod_usuario' => $id,
            'criacao' => $data
        );
        
       if($this->comentarios_model->adicionaComentario($dados)){
           $this->session->set_flashdata("sucess", "Comentario adicionado");
       }else{
           $this->session->set_flashdata("danger", "Algo deu errado!");
       }
        redirect("/");

    }
public function excluir($cod){
 
    $this->load->model("Comentarios_model");
        if($this->comentarios_model->excluir($cod)){
            $this->session->set_flashdata("sucess", "Comentario excluido");
        }else{
           $this->session->set_flashdata("danger", "Algo deu errado!"); 
        }
    redirect('/');
}


}