<h1>Editar seu cadastro</h1>
<?php
echo form_open("EditaCadastro/edita");
echo form_label('Nome', 'nome');
echo form_input(array(
    "name" => 'nome',
    "id" => 'nome',
   "class" => 'form-control',
    "maxlength" => "200",
    "minlength" => "20",
));



echo form_label('Senha', 'senha');
echo form_input(array(
    "type" => "password",
    "name" => 'senha',
    "id" => 'senha',
   "class" => 'form-control',
    "maxlength" => "50",
    "minlength" => "20",
));

echo form_button(array(
    
    "class" => "btn btn-primary",
    "content" => "Editar",
    "type" => "submit"
));


echo form_close();


?>
