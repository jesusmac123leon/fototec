<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo $nombre;
if(mail('leon-herido1@hotmail.com',$asunto,$mensaje)){
    echo"mensage enviado we";
}else{
    echo"error mensage no enviado";
}
?>