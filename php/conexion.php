<?php
//$conexion es una variable
$conexion = new mysqli("localhost" ,"thechristiangm", "24071996","megabasededatos");
if($conexion ->connect_error) die('No se pudo conectar a la base de datos');
?>
