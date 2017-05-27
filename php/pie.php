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
                
                
                 <?php
			while($fila=$sqlc->fetch_array()){  
		?>
              
                <li><a href="#"><?php echo $fila[1];?></a></li>
                
                  <?php } ?>
                
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
                
                <p class="drch"><a href="index.php">Inicio</a> | <a href="blog.php">Blog</a> |  <a href="../contacto.html">Contacto</a> | <a href="../aprivado.html">Acceso Privado</a> </p>   
            
                
            </div>