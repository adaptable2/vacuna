<?php get_header(); ?>
  
  <?php 
    $args = array(
      'post_type' => 'banner',
      'order' => 'ASC',
      'seccion' => 'nosotros'
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

  <section class="about">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10">
          <div class="row justify-content-md-center">
            <div class="col-md-12">
              <h1><?php the_title(); ?></h1>
              <p>
              <?php
                echo $posts[0]->post_content;
              ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
    $args = array(
      'post_type' => 'persona',
      'order' => 'ASC',
    );
    $persons = new WP_Query($args);
    if ($persons->posts):
  ?>
  <section class="members">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10">
          <div class="row justify-content-md-center">
            <div class="col-md-12">
              <h2>¿Quiénes nos hemos unido a este movimiento?</h2>
              <ul>
                <?php
                  foreach ($persons->posts as $person):
                    $personTitle = $person->post_title;
                    $personProf = $person->profesin;
                    $personImg = wp_get_attachment_url( get_post_thumbnail_id($person->ID, 'full') );
                ?>
                  <li><img src="<?php echo $personImg; ?>">
                    <p><?php echo $personTitle; ?></p>
                    <span><?php echo $personProf; ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
              <h3>y todas las <span>8.765 personas </span>que se han unido recientemente en nuestras redes sociales.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php get_footer(); ?>
