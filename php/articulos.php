<?php
include ("conexion.php");

$sql=$conexion->query("SELECT * FROM articulos_cgm") or die($conexion->error);
$sqla=$conexion->query("SELECT * FROM categorias_cgm") or die($conexion->error);
$sqlb=$conexion->query("select * from articulos_cgm order by visitas desc limit 3") or die($conexion->error);

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
  <link href="https://fonts.googleapis.com/css?family=Average+Sans|Josefin+Sans|Julius+Sans+One|Open+Sans" rel="stylesheet">
    
	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/estructura.css">
    <link rel="stylesheet" href="../css/logoymenu.css">
    <link rel="stylesheet" href="../css/textoprincipal.css">
    <link rel="stylesheet" href="../css/pie.css">
    <link rel="stylesheet" href="../css/articulo.css">
    

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
        
    <div id="contenidoarticulo">
        
                <?php
			while($fila=$sql->fetch_array()){  
                
                
		?>
        
        
        <div class="articulo">
            
            <img class="imgtitulo" src="../img/blog/<?php echo $fila[7];?>">
            
            <h1>Pues este es el titulo completo de la noticia del articulo para comprobar el largo</h1>
            <h2>Escrito por TheChristianGM el día 11/05/17</h2>
            <p>
                Y aquí ya va a ir todo el articulo asi que:
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales id ipsum consequat tincidunt. Integer ac ex dictum dolor dapibus commodo. Suspendisse convallis placerat ipsum ut lobortis. Praesent eget dapibus lectus. Nunc vel dui mauris. Aenean eget ante sit amet erat scelerisque facilisis. Phasellus hendrerit urna in cursus tempus. Nam scelerisque nec nisi sed varius. Nam tincidunt, velit non mattis pellentesque, elit ante facilisis lorem, a fringilla magna metus quis tellus. Sed velit orci, fermentum ut viverra ut, auctor eget massa. Nunc ultricies porta ante sed tincidunt. Nulla porttitor sollicitudin libero, id egestas massa. Nunc non nisl diam. Ut sodales, dolor nec egestas eleifend, odio mi porta velit, maximus pharetra est diam ac ante. Vestibulum suscipit, turpis ac mollis mattis, erat neque consectetur est, eu mollis nisl nisl vitae massa.<br><br/>

Aliquam vel sagittis nunc, at cursus neque. Nullam eget massa ut turpis maximus ullamcorper vitae eu ipsum. Phasellus sodales quam nec turpis varius viverra. Sed interdum porttitor scelerisque. Nullam venenatis eget sem in egestas. Maecenas tincidunt faucibus erat, et imperdiet velit semper ac. Aliquam sit amet auctor lectus. Suspendisse et maximus augue. Nulla convallis nulla vel magna mollis ultrices. Fusce vestibulum erat vitae dui ullamcorper, in ullamcorper nibh gravida. Etiam non odio lobortis, mattis est sed, suscipit augue.<br><br/>

Ut a arcu ut ligula blandit hendrerit at nec ligula. Pellentesque dignissim commodo leo, ut sagittis tortor malesuada vitae. Cras ipsum dolor, tempus et vehicula vel, consectetur eget odio. Fusce mollis ornare diam, sit amet cursus turpis pulvinar vel. Aliquam erat volutpat. Donec lacinia neque id elementum congue. Donec vitae viverra elit. Proin laoreet, nisi egestas congue suscipit, nulla nulla mollis purus, vel viverra arcu risus eu lectus.<br><br/></p>
            
            <img class="imgcontenido" src="https://wallpaperbrowse.com/media/images/ZhGEqAP.jpg">
            
            <p>

Proin nec felis et nisl feugiat gravida. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam volutpat turpis eu ipsum sollicitudin aliquet. Vestibulum elit risus, viverra at ante vitae, commodo lobortis mauris. Quisque vitae malesuada tellus. Fusce ac ipsum dolor. Mauris gravida faucibus erat in tincidunt. Mauris porta ipsum id augue ornare vulputate. In fringilla nec enim at suscipit. Nulla vehicula lectus augue, ultrices egestas neque interdum id. Donec posuere aliquet tellus sed fringilla. Aliquam erat volutpat. Vestibulum a nunc id erat ullamcorper egestas ac sit amet ante. Praesent euismod, massa eu pretium ornare, augue nisl accumsan est, ac consequat ante justo ac libero.<br><br/>

Maecenas ultrices porttitor aliquet. Vestibulum ultricies eget mi id accumsan. Fusce ex diam, tempus at turpis id, finibus facilisis metus. Mauris porttitor diam sit amet magna blandit, sit amet hendrerit purus condimentum. Nulla ut imperdiet nunc, non accumsan tellus. Nunc sit amet congue urna, a pretium odio. Integer ipsum sem, lobortis ut neque nec, feugiat feugiat augue. Maecenas auctor pharetra libero. Quisque id luctus felis. Quisque rutrum dui a faucibus laoreet. Quisque vel viverra neque. Suspendisse pretium libero nec augue vestibulum mattis. Duis vel arcu vel leo finibus finibus vitae varius urna. Sed blandit turpis eu iaculis tempus.<br><br/>
            </p>
        
        
        
        
        </div> 
        
        <div class="limpiar"></div>
    </div>
    <?php } ?>
        
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
    
    
         <div class="arriba"></div>
    </body>
</html>