<?php 
//Activa tipos estricos
declare(strict_types=1);

function render_template(string $template, array $data = []) {
   //Extraer los datos
    extract($data); 

 //devuelve el contenido
return require "php/templates/$template.php";
}



?>