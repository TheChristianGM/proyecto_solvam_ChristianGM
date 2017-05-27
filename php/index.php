<?php
include ("conexion.php");

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
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../css/cajas_articulos.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="../img/favicon.ico">
    
    	
	<!-- JS ================================================== -->
        <script src="../js/jquery-3.2.0.min.js"></script>
        <script src="../js/index.js"></script>
        
    
    
        <!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" media="screen" />
    
    
    <script type="text/javascript" src="../js/ajustes-fancybox.js"></script>
    
    <!-- ================================================== -->
    
    
  
	<style type="text/css">.fancybox-custom .fancybox-skin {box-shadow: 0 0 50px #222;}</style>
    
    
    
    

</head>

<body>
<div id="contenedor">
    <div id="encabezado">
        <div id="menulogo">
                <?php
                    include ("menulogo.php");
                ?> 
        </div>
        
        <div id="portada">
            <div id="galeria">
            
            
            <div id="fotos-galeria">
                
                
               
                
                <div class="foto1">
                    <img src="../img/galeria/foto.jpg"/>
                    <p>Pues descripcion 1</p>
                
                
                </div>
                
                
                <div class="foto2">
                
                    <img src="../img/galeria/foto2.jpg"/>
                    <p>Pues descripcion 2</p>
                </div>
                
                
                <div class="foto3">
                    
                    <img src="../img/galeria/foto3.jpg"/>
                    <p>Pues descripcion 3</p>
                
                </div>
                
                
                <div class="foto4">
                    
                    <img src="../img/galeria/foto4.jpg"/>
                    <p>Pues descripcion 4</p>
                
                </div>
                
              
                
                </div>
            
            
            </div>
            
            
            
            <div id="textoprincipal">
                <p class="titulo">TITULO INVENTADO <br/>DE UNA NOTICIA DE HARDWARE</p>
                <p class="subtitulo">Pues descripcion corta de la notcia inventada donde luego pone un ver mas </p>
                
    <p class="textonoticia">Pues ahora viene el texto de la noticia que es jodidamente largo. Pues descripcion corta de la notcia inventada donde luego pone un ver mas y ya pues le das y lo terminas de eller todo si te interesa</p>
        <p class="enlace"><a href="../blog.html"><span class="mas"></span>mas...</a></p>
            </div>
        </div>
        
    </div>
        
    <div id="contenido">
        <div class="lupa" style="height:47px; width:47px; border: 1px solid red;   background-image: url(../img/back-top-btn.png);" ></div>
        
        
                <p>
                <a class="fancybox-effects-d" href="../img/detalles/asus-h81-gamer-edition.jpg" title="Hola Juanra :D"><img height="300px" src="../img/detalles/asus-h81-gamer-edition.jpg" alt="" /></a>
	           </p>
        
        


        <div class="caja_articulo">
        <div class="telon"></div>
        <img src="../img/detalles/gigabyte-aorus.jpg">
        <h2>Gigabute Aorus GA-AX370-Gaming K5</h2>
        <div class="lupa"></div>        
        <a href="detalles.php?foto=1"><div class="detalles"></div></a>
        </div>
        
                
        
        <div class="caja_articulo">
        <div class="telon"></div>
        <img src="../img/detalles/asus-h81-gamer-edition.jpg">
        <h2>Asus H81 Gamer Edition</h2>
        <div class="lupa"></div>        
        <a href="detalles.php?foto=2"><div class="detalles"></div></a>
        </div>
        
        <div class="caja_articulo">
        <div class="telon"></div>
        <img src="../img/detalles/ryzen7_1800X.jpg">
        <h2>AMD Ryzen7 1800X</h2>
        <div class="lupa"></div>        
        <a href="detalles.php?foto=3"><div class="detalles"></div></a>  
        </div>
        
        <div class="caja_articulo">
        <div class="telon"></div>
        <img src="../img/detalles/ryzen5_1600.jpg">
        <h2>AMD Ryzen 5 1600 3.2GHZ</h2>
        <div class="lupa"></div>        
        <a href="detalles.php?foto=4"><div class="detalles"></div></a> 
        </div>
        
        <div class="limpiar"></div>
        </div>
    
        <div class="limpiar"></div>
        
        <div id="pie">
            <?php
            include ("pie.php");
          ?>
        
        </div>
    </div>
    
    
         <div class="arriba"></div>
    </body>
</html>
