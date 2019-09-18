<?php get_header(); ?>
  <?php 
    $args = array(
      'post_type' => 'banner',
      'order' => 'ASC',
      'seccion' => 'contacto'
    );
    $banners = new WP_Query($args);
    if ($banners->posts):
  ?>
  <section class="banner">
    <?php
      foreach ($banners->posts as $banner):
        $bannerImg = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
    ?>
      <img class="img-fluid" src="<?php echo $bannerImg; ?>">
    <?php endforeach; ?>
  </section>
  <?php endif; ?>
  <section class="contact">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col">
            <h1>Queremos conocerte un poco más</h1>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="row justify-content-md-center">
              <div class="col-md-12">
                <h2>1. ¿Cúal es tu nombre?</h2>
                <input type="text" placeholder="Escribe aquí tu respuesta">
              </div>
              <div class="col-md-12">
                <h2>2.  ¿Cómo te consideras?</h2>
                <div class="input-wrapper">
                  <input class="fancy-radio" id="radio1" hidden="" name="radio-group" type="radio">
                  <label class="fancy-radio-label" for="radio1"><span class="fancy-label--text">Adulto / joven</span><span class="fancy-radiobutton"><span class="radiobutton-dot"></span></span></label>
                </div>
                <div class="input-wrapper">
                  <input class="fancy-radio" id="radio2" hidden="" checked="" name="radio-group" type="radio">
                  <label class="fancy-radio-label" for="radio2"><span class="fancy-label--text">Adulto</span><span class="fancy-radiobutton"><span class="radiobutton-dot"></span></span></label>
                </div>
                <div class="input-wrapper">
                  <input class="fancy-radio" id="radio3" hidden="" name="radio-group" type="radio">
                  <label class="fancy-radio-label" for="radio3"><span class="fancy-label--text">Adulto mayor</span><span class="fancy-radiobutton"><span class="radiobutton-dot"></span></span></label>
                </div>
              </div>
              <div class="col-md-12">
                <h2>3.  ¿Eres Papá o Mamá?</h2>
                <div class="input-wrapper">
                  <input class="fancy-radio" id="radio4" hidden="" name="radio-group-2" type="radio">
                  <label class="fancy-radio-label" for="radio4"><span class="fancy-label--text">Papá</span><span class="fancy-radiobutton"><span class="radiobutton-dot"></span></span></label>
                </div>
                <div class="input-wrapper">
                  <input class="fancy-radio" id="radio5" hidden="" checked="" name="radio-group-2" type="radio">
                  <label class="fancy-radio-label" for="radio5"><span class="fancy-label--text">Mamá</span><span class="fancy-radiobutton"><span class="radiobutton-dot"></span></span></label>
                </div>
                <div class="input-wrapper">
                  <input class="fancy-radio" id="radio6" hidden="" name="radio-group-2" type="radio">
                  <label class="fancy-radio-label" for="radio6"><span class="fancy-label--text">No tengo hijos</span><span class="fancy-radiobutton"><span class="radiobutton-dot"></span></span></label>
                </div>
              </div>
              <div class="col-md-12">
                <h2>4.  ¿Cuantos años tiene(n) tu(s) hijo(s)?</h2>
                <input type="text" placeholder="Escribe aquí tu respuesta">
              </div>
              <div class="col-md-12">
                <h2>5.  ¿Los has vacunado recientemente? Si es así que vacunas  le has aplicado:</h2>
                <input type="text" placeholder="Escribe aquí tu respuesta">
              </div>
              <div class="col-md-12">
                <h2>6.  ¿Te has vacunado recientemente? Si es así que vacunas te aplicaste:</h2>
                <input type="text" placeholder="Escribe aquí tu respuesta">
              </div>
              <div class="col-md-12">
                <h2>7.  Ingresa tu correo electrónico</h2>
                <input type="text" placeholder="Escribe aquí tu respuesta">
              </div>
              <div class="col-md-12"><br><br>
                <input class="checkbox" id="check-1" type="checkbox">
                <label class="checkbox-label" tabindex="1" for="check-1"> <a href="#">Acepto la política de tratamiento de datos</a></label>
              </div>
              <div class="col-md-12 text-center"><br><br><a class="button button-blue" href="">Enviar</a></div>
            </div>
          </div>
        </div>
      </div>
  </section>
<?php get_footer(); ?>
