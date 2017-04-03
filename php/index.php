<?php

//incluir el codigo de la conexion
include("conexion.php");

//recoger la variable de la URL (variable=foto y valor 1,2,3
$foto=$_GET['foto']; //$foto me lo invento
                    //['foto'] es la variable de la url


//ejecutar SELECT
//$sql variable que te inventas
//$conexion es la variable que coges de include ("conexion.php")
//query es el metodo que se ejecuta la SELECT de una tabla

$sql=$conexion->query("SELECT * FROM detalles_cgm WHERE codigo=$foto") or die ($conexion->error);

//recorrer la tabla para visualizar los datos
while($fila=$sql->fetch_array()){
    //$fila es una variable que te inventas
    //$sql es la consulta de antes
    //fetch_array es el metodo que convierte el resultado de la consulta $sql en un array llamado $fila
    
echo $fila[0]." ".$fila[1]." ".$fila[2]." ".$fila[3]." ".$fila[4]." ".$fila[5]." ".$fila[6]." ".$fila[7]." ".$fila[8]." ".$fila[9];
echo "<br>";
echo '<img src="../img/detalles/'.$fila[1].'" width="25%">';
echo "<br>";
}
    
    
?>