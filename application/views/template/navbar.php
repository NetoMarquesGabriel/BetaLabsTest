
        <div class="container">
             <div class="text-right">

        <?php if(!$this->session->userdata("usuario_logado")){
        
      echo anchor("Login/index","Login"); 
      echo anchor("Usuario/cadastrar","Cadastre-se", array("class" => "ml-4"));
                
        }else{

      echo anchor("Login/logout","logout");
      echo anchor("EditaCadastro/index","Editar cadastro", array("class" => "ml-4"));
        }
        ?>
     
    </div>