<?php
$destino="paolaola9@gmail.com"
$name=$_POST["Name"];
$Phone=$_POST["Phone"];
$Email=$_POST["Email "];
$contenido="Nombre" - $name -  "\nPhone " - $Phone  -  "\nEmail " -$Email";
mail($destino, "contacto" , $contenido);
header("location:index.html");



?>
