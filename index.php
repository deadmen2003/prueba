<?php
$paracorreo = "camilorolando15@gmail.com";
$titulo = "Test correo";
$mensaje = "hola";
$tucorreo = "From: proyectoitsa1@gmail.com";

if(mail($tucorreo,$titulo,$mensaje,$paracorreo))
{
    echo "correo enviado";
}else
{
    echo "error";
}

?>