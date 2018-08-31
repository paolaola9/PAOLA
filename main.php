<?php
$destino="paolaola9@gmail.com"
$Name=$_POST["Name"];
$Phone=$_POST["Phone"];
$Email=$_POST["Email "];
$contenido="Name: "$Name"- \nPhone: "$Phone" - \nEmail: "$Email;
mail($destino, "contacto" , $contenido);
header("location:index.html");



?>
