<?php

class Comentarios_model extends CI_Model{
    
    public function buscaComentarios(){
        $this->db->join("Usuario", "usuario.cod_usuario = comentario.cod_usuario");
        $this->db->select("comentario.*, Usuario.nome ");
         $this->db->from("comentario");
        return $this->db->get()->result_array();
        
        
    }
    public function adicionaComentario($dados) {
        
        return $this->db->insert("comentario", $dados);
        
    }
    public function excluir($cod){
        $this->db->where("cod_comentario", $cod);
        return $this->db->delete("comentario");
    }
}