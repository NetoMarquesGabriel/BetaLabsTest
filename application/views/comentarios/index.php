
<?php
if($this->session->userdata("usuario_logado")){
    
    
    echo '<h1> Adicionar Comentario</h1>';
    echo form_open("Comentarios/adicionar");
    echo form_label('titulo', 'titulo');
    echo form_input(array(
        "class" => "form-control",
        'name' => 'titulo',
        'id' => 'titulo',
        "minlength" => "10",
        "maxlength" => "150",  
    ));
    echo form_label('Comentario', 'comentario');
    echo form_input(array(
         "class" => "form-control",
        'name' => 'comentario',
        'type'=> 'text',
        'id' => 'comentario',
        "minlength" => "10",
        'required' => "true",
    ));
    echo form_button(array(
    
    "class" => "btn btn-primary",
    "content" => "comentar",
    "type" => "submit"
));
    echo form_close();
}
?>


<h1> Comentarios ArrayEnterprises</h1>
<?php foreach($comentarios as $comentario) : ?>
<h2><?= html_escape($comentario["titulo"])?></h2>

<h6>Por:<i><?= html_escape($comentario["nome"])?></i></h6>
<?= auto_typography(html_escape($comentario["comentario"]))?>
<h6><?= dataMysqlParaPtBr($comentario["criacao"])?><h6>
        <?php
        if(isset($usuario)){
            if($usuario['cod_usuario'] == $comentario["cod_usuario"] or $usuario['ADM'] == 1){
            echo anchor("comentarios/excluir/{$comentario['cod_comentario']}","Excluir", array("class" => "check"));
            
                 
            
                }
        }
        ?>
        <hr>
        <?php endforeach;?>

