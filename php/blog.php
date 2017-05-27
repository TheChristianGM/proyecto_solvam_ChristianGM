<?php
include ("conexion.php");

$sql=$conexion->query("SELECT * FROM articulos_cgm") or die($conexion->error);
$sqla=$conexion->query("SELECT * FROM categorias_cgm") or die($conexion->error);
$sqlb=$conexion->query("select * from articulos_cgm order by visitas desc limit 3") or die($conexion->error);
$sqlc=$conexion->query("select * from articulos_cgm order by fecha desc limit 4") or die($conexion->error);

if(isset($_GET['Categorias'])){
$id_categoria=$_GET['Categorias'];
$sql=$conexion->query("SELECT * FROM articulos_cgm WHERE categoria=$id_categoria") or die($conexion->error);}

if (isset($_GET['Articulos'])){
          $articulo=$_GET['Articulos'];
$sql=$conexion->query("SELECT * FROM `articulos_cgm` WHERE id_articulo=$articulo") or die($conexion->error);}


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
    <link rel="stylesheet" href="../css/blog.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="../img/favicon.ico">
    
    	
	<!-- JS ================================================== -->
            <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../js/index.js"></script>
    <!-- ================================================== -->

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
        
    <div id="contenidoblog">
        
        
        <div id="noticias">
            
        <?php
			while($fila=$sql->fetch_array()){  
                
                $articulo= utf8_encode ($fila[2]);
                $articulo_corto= substr ($articulo,0,400)."...";
                
		?>
                                
                <div class="articulo">
                    <p class="fotoarticulo"><img width="270" height="220" src="../img/blog/<?php echo $fila[7];?>"></p>
                    
                    <div class="textoarticulo">
                        <p class="tit"><?php echo utf8_encode($fila[1]);?></p>
                        <p class="resumen"><?php echo $articulo_corto?></p>
                        <p class="masinfo"><a href="articulos.php?articulos_cgm=<?php echo ($fila[0])?>">Leer más...</a></p>
                        
                        
                        <p class="detalles">
                            <span class="date"><span></span><?php echo $fila[4];?> | </span><span class="autor"><span></span><?php echo $fila[3];?> | </span><span class="comentarios"><span></span>2 comentarios | </span><span class="etiquetas"><span></span><?php echo $fila[5];?></span>
                        </p>
                    </div>
                    <div class="limpiar"></div>
                </div>
                <?php } ?>
                
                
                
            </div>
        
        
        
            <div id="widgets">
                <div id="caja1">
                    <p>Categorias</p>
                    <ul>
                        
                        <li><span></span><a href="blog.php">Todas las categorias</a><div class="limpiar"></div></li> 
                        
                        
                        <?php
			while($fila=$sqla->fetch_array()){  
		    ?>
                        
                        
                        <li><span></span><a href="blog.php?Categorias=<?php echo $fila[0];?>"><?php echo $fila[1];?></a><div class="limpiar"></div></li> 
                        <?php } ?>
                        
                    </ul>
                    
                    
                </div>
                
                
                <div id="caja2">
                    <p>Post Populares</p>
                    <ul>
                        
                        <?php
			while($fila=$sqlb->fetch_array()){  
		?>
                        
                        <li>
                           <a href="#">
                            <img width="70" height="57" src="../img/blog/<?php echo $fila[7];?>" />
                            <div class="text">
                            <p><?php echo $fila[1];?></p>
                            <p class="fecha">Fecha publicación: <?php echo $fila[4];?></p>
                            </div>
                            </a>
                           <div class="limpiar"></div> 
                        </li>
                        
                        <?php } ?>
                                           
                    </ul>
                    
                </div>
                <div id="caja3">
                    <p>Nuestros vídeos</p>
                    <div class="video">
                        
                        
                        <iframe width="320" height="200" src="https://www.youtube.com/embed/9wJQEHNYE7M" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
                
            </div>
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