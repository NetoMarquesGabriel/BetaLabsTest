<h1>Cadastre-se</h1>
<?php
echo form_open("Usuario/novo");
echo form_label('Nome', 'nome');
echo form_input(array(
    "name" => 'nome',
    "id" => 'nome',
   "class" => 'form-control',
    "maxlength" => "200",
    "minlength" => "20",
));

echo form_label('Email', 'email');
echo form_input(array(
    "type" => "email",
    "name" => 'email',
    "id" => 'email',
   "class" => 'form-control',
    "maxlength" => "200"  
));

echo form_label('Senha', 'senha');
echo form_input(array(
    "type" => "password",
    "name" => 'senha',
    "id" => 'senha',
   "class" => 'form-control',
    "maxlength" => "50",
    "minlength" => "20"
));

echo form_button(array(
    
    "class" => "btn btn-primary",
    "content" => "cadastrar",
    "type" => "submit"
));


echo form_close();


?>
