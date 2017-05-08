<?php
include ("conexion.php");

$sql=$conexion->query("SELECT * FROM articulos_cgm") or die($conexion->error);
$sqla=$conexion->query("SELECT * FROM categorias_cgm") or die($conexion->error);
$sqlb=$conexion->query("select * from articulos_cgm order by visitas desc limit 3") or die($conexion->error);

if(isset($_GET['Categorias'])){
$id_categoria=$_GET['Categorias'];
$sql=$conexion->query("SELECT * FROM articulos_cgm WHERE categoria=$id_categoria") or die($conexion->error);

}


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
            <a href="../index.html"><div id="logo"><img src="../img/Logo.png"/><p>INFOFREAK<span>Novedades Tecnologicas</span></p> </div></a>
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
                    
                    
                    <li><a href="../index.html">INICIO</a></li>
                
                </ul>
                 <div class="limpiar"></div>
            </div>
            
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
                        <p class="masinfo"><a href="#">Leer más...</a></p>
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
            
            <div id="pie1">
            <p>Sobre Nosotros</p>
                <p><img src="../img/Logo.png"></p>
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
                
                <p class="drch"><a href="../index.html">Inicio</a> | <a href="../blog.html">Blog</a> |  <a href="../contacto.html">Contacto</a> | <a href="../aprivado.html">Acceso Privado</a> </p>   
            
                
            </div>
            
        
        </div>
    </div>
    
    </body>
</html>