<h1>Login</h1>
<?php
echo form_open("Login/autenticar");
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
    "maxlength" => "50"  
));

echo form_button(array(
    
    "class" => "btn btn-primary",
    "content" => "login",
    "type" => "submit"
));

echo form_close();
?>