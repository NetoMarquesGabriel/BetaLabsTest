<?php

class Usuario_model extends CI_Model{
    
    public function cadastra($usuario){
        return $this->db->insert("usuario", $usuario);
        
        
    }
    public function autentica($email,$senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuario")->row_array();
        return $usuario;
    }
    public function editaInformacoes($id,$data){
        
        
        $this->db->where('cod_usuario', $id);
        return $this->db->update('usuario',$data);
        
    }
}