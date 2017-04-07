<?php
include ("conexion.php");

$foto=$_GET['foto'];
$sql=$conexion->query("SELECT * FROM detalles_cgm WHERE codigo=$foto") or die ($conexion->error);

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
            <div id="logo"><img src="../img/Logo.png"/><p>INFOFREAK<span>Novedades Tecnologicas</span></p> </div>
            <div id="menu">
                <ul>
          
                    <li><a href="../contacto.html">CONTACTO</a></li>
                    <li><a href="../blog.html">BLOG<span class="flecha"></span></a>
                       
                        
                        <ul class="submenu">
                              <li><a href="#">Novedades Android</a></li> 
                              <li><a href="#">Novedades Intel</a></li>
                              <li><a href="#">Novedades AMD</a></li> 
                           </ul>
                      </li>
                    
                    
                    <li><a href="index.html">INICIO</a></li>
                
                </ul>
                 <div class="limpiar"></div>
            </div>
            
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
                    <li>Socket: </li>
                    <li>Precio: </li>
                </ul>
                
		<?php } ?>      
                
                
                <p class="masinfo"><a href="http://www.marca.com" target="_blank">Más Información...</a></p>
                <p class="enlace"><a href="index.html"><span class="mas"></span>Volver...</a></p>
            </div>
        
        
    </div>
    
    <div class="limpiar"></div>
        
         <div id="pie">
            
            <div id="pie1">
            <p>Sobre Nosotros</p>
                <p><img src="img/Logo.png"></p>
                <p class="direccion">C/ Cervantes, 3 <br />Quart de Poblet - 46930 <br />Valencia<br /><br /> Tel. 96 154 77 93</p>
                <div class="social">
                    <a href="http://facebook.com"><span class="face"></span></a>
                    <a href="http://twitter.com"><span class="twitter"></span></a>
                    <a href="http://google.com"><span class="google"></span></a>
                    <a href="#"><span class="rss"></span></a>
                    <a href="http://instagram.com"><span class="instagram"></span></a>
                </div>
            
            </div>
            
            
            <div id="pie2"><p>¿Dónde estamos?</p>
            <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.4040718686365!2d-0.44258058480530316!3d39.48278957948462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604ff779223b39%3A0xc60596edf6e35ebd!2sCentro+de+FP+SOLVAM!5e0!3m2!1ses!2ses!4v1490268836816" width="240" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            
            </div>
            
            
            <div id="pie3"><p>Últimos post</p>
            <ul>
                <li><a href="#">Enlace a post1</a></li>
                 <li><a href="#">Enlace a post2</a></li>
                 <li><a href="#">Enlace a post3</a></li>
                 <li><a href="#">Enlace a post4</a></li>   
                </ul></div>
            
            
            <div id="pie4">
            <p>Nuestros videos</p>
            <div class="video">
          <iframe width="240" height="200" src="https://www.youtube.com/embed/nS1l2hrH4qQ" frameborder="0" allowfullscreen></iframe>
                </div>
                
                
                </div>
            
            <div class="limpiar"></div>
            <div id="pie5">
                <p class="izq">Copyrigth 2017 SOLVAM - Todos los derechos reservados</p>
                <div class="arriba"></div>
                
                <p class="drch"><a href="index.html">Inicio</a> | <a href="blog.html">Blog</a> |  <a href="contacto.html">Contacto</a> | <a href="aprivado.html">Acceso Privado</a> </p>   
            
                
            </div>
            
        
        </div>
    </div>
    
    </body>
</html>
