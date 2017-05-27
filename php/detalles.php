<?php
include ("conexion.php");

$foto=$_GET['foto'];
$sql=$conexion->query("SELECT * FROM detalles_cgm WHERE codigo=$foto") or die ($conexion->error);

$sqlc=$conexion->query("select * from articulos_cgm order by fecha desc limit 4") or die($conexion->error);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

    <!-- Fuentes ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Average+Sans|Josefin+Sans|Julius+Sans+One" rel="stylesheet">
    
	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/estructura.css">
    <link rel="stylesheet" href="../css/logoymenu.css">
    <link rel="stylesheet" href="../css/textoprincipal.css">
    <link rel="stylesheet" href="../css/pie.css">
    <link rel="stylesheet" href="../css/detalles.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="../img/favicon.ico">
    
    	
	<!-- JS ================================================== -->

</head>

<body>
<div id="contenedor">
    <div id="encabezado">
        <div id="menulogo">
            <?php
                include ("menulogo.php");
                ?> 
            
        </div>
        
    </div>

<?php
		while($fila=$sql->fetch_array()){
?>
    
        <div id="contenidodetalles">
            
             <p><img src="../img/detalles/<?php echo $fila[1];?>" /></p>
            
            <div id="textoprincipal">
                <p class="titulo"> <?php echo utf8_encode($fila[2]);?></p>
                <p class="subtitulo"><?php echo utf8_encode($fila[3]);?></p>
                <p class="textonoticia"><?php echo utf8_encode($fila[4]);?></p>
                <ul>
                    <li>Fecha Salida: <?php echo $fila[5];?></li>
                    <li>Marca: <?php echo utf8_encode($fila[6]);?></li>
                    <li>Modelo: <?php echo utf8_encode($fila[7]);?></li>
                    <li>Socket: <?php echo utf8_encode($fila[8]);?></li>
                    <li>Precio: <?php echo utf8_encode($fila[9]);?>€</li>
                </ul>
                
		      
                
                
                <p class="masinfo">
                    <a href="<?php echo utf8_encode($fila[10]);?>" target="_blank">
                        Más Información...</a></p>
                <p class="enlace"><a href="index.php"><span class="mas"></span>Volver...</a></p>
            </div>
        <?php } ?>
        
    </div>
    
    <div class="limpiar"></div>
        
         <div id="pie">
            <?php
            include ("pie.php");
          ?>
        
        </div>
    </div>
    
    </body>
</html>
