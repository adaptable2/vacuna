<?php get_header(); ?>

<section class="banner-carrusel">
      <div class="carrusel">
      	<?php 
		// Argumentos para una busqueda de post type
		$args = array(
		  'post_type' => 'banner', // Nombre del post type
		  'order' => 'ASC'
		);
		$banners = new WP_Query($args);
		if ($banners->posts):
		  // Foreach para recorrer el resultado de la busqueda
		    foreach ($banners->posts as $banner):
		      $banner_img = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') ); // Url de la imagen en tamaño Full
		?>
			<img class="img-fluid" src="<?php echo $banner_img;?>">
		<?php
		 endforeach;
		 endif; 
	    ?>
      </div>
</section>
    <section class="how">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col">
            <h2>Cómo proteger mejor a tus hijos</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
        <?php 
            // Argumentos para una busqueda de post type
            $args = array(
              'post_type' => 'como-proteger-hijo', // Nombre del post type
              'order' => 'ASC'
            );
            $protegen = new WP_Query($args);
            if ($protegen->posts):
              // Foreach para recorrer el resultado de la busqueda
                foreach ($protegen->posts as $proteger):
                	$proteger_name = $proteger->post_title;
                	$proteger_link = $proteger->texto_link;
                    $proteger_desc = $proteger->post_content;
                    $proteger_img = wp_get_attachment_url( get_post_thumbnail_id($proteger->ID, 'full') ); // Url de la imagen en tamaño Full
          ?>
          <div class="col">
          	<a class="article" href="article.html">
          		<img class="img-fluid" src="<?php echo $proteger_img;?>">
          		<h3><?php echo $proteger_name;?></h3>
          		<p><?php echo $proteger_desc;?></p>
          		<span><?php echo $proteger_link;?></span>
          	</a>
          </div>
            <?php
             endforeach;
             endif; 
            ?>          
        </div>
      </div>
    </section>
    <section class="articles-one">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col">
            <h2>La protección de mamá no es suﬁciente</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="row justify-content-md-center">
		        <?php 
		            // Argumentos para una busqueda de post type
		            $args = array(
		              'post_type' => 'proteccin_mam', // Nombre del post type
		              'order' => 'ASC'
		            );
		            $proteccion = new WP_Query($args);
		            if ($proteccion->posts):
		              // Foreach para recorrer el resultado de la busqueda
		                foreach ($proteccion->posts as $proteccion):
		                    $proteccion_desc = $proteccion->post_content;
		                    $proteccion_img = wp_get_attachment_url( get_post_thumbnail_id($proteccion->ID, 'full') ); // Url de la imagen en tamaño Full
		          ?>
            	<div class="col">
            		<a class="article" href="article.html">
            			<img class="img-fluid" src="<?php echo $proteccion_img;?>">
            			<p><?php echo $proteccion_desc;?></p>
            		</a>
            	</div>
	            <?php
	             endforeach;
	             endif; 
	            ?>    
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="articles-two">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col">
            <h2>Últimas entradas</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col"><a class="article" href="article.html"><img class="img-fluid" src="https://via.placeholder.com/350x210">
              <div class="body"><span class="blue">Prevención</span>
                <h3>la IRA: Infección Respiratoria Aguda.</h3><span>Agosto 7, 2019</span>
              </div></a></div>
          <div class="col"><a class="article" href="article.html"><img class="img-fluid" src="https://via.placeholder.com/350x210">
              <div class="body"><span class="green">Prevención</span>
                <h3>la IRA: Infección Respiratoria Aguda.</h3><span>Agosto 7, 2019</span>
              </div></a></div>
          <div class="col"><a class="article" href="article.html"><img class="img-fluid" src="https://via.placeholder.com/350x210">
              <div class="body"><span class="red">Prevención</span>
                <h3>la IRA: Infección Respiratoria Aguda.</h3><span>Agosto 7, 2019</span>
              </div></a></div>
          <div class="col"><a class="article" href="article.html"><img class="img-fluid" src="https://via.placeholder.com/350x210">
              <div class="body"><span class="orange">Prevención</span>
                <h3>la IRA: Infección Respiratoria Aguda.</h3><span>Agosto 7, 2019</span>
              </div></a></div>
        </div>
        <div class="row justify-content-center">
          <div class="col text-center"><a class="button button-blue" href="#">Ver más artículos</a></div>
        </div>
      </div>
    </section>
    <section class="iframe">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="embed-container">
              <iframe src="https://player.vimeo.com/video/70591644?title=0&amp;byline=0&amp;portrait=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="invitation">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <h3>Únete a <span>#vacunatuconciencia </span>y haz todo lo que esté en tus manos, para prevenir enfermedades potencialmente mortales.</h3>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <div class="form-invitation">
              <h3>Invita a un amigo a unirse a este movimiento.</h3>
              <input type="text" placeholder="Tu nombre">
              <input type="text" placeholder="Nombre de tu amigo">
              <input type="email" placeholder="Correo electrónico de tu amigo">
              <div class="text-right"><a class="button button-blue" href="#">Enviar</a></div>
            </div>
          </div>
        </div>
      </div>
    </section><a class="testimonials" href="#">Testimonios <br><span>Conoce experiencias y casos reales</span></a>
<?php get_footer(); ?>
