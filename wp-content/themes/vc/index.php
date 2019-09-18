<?php get_header(); ?>
  <?php 
    $args = array(
      'post_type' => 'banner',
      'order' => 'ASC',
      'seccion' => 'home'
    );
    $banners = new WP_Query($args);
    if ($banners->posts):
  ?>
  <section class="banner-carrusel">
    <div class="carrusel">
    <?php
      foreach ($banners->posts as $banner):
        $bannerImg = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') );
    ?>
        <img class="img-fluid" src="<?php echo $bannerImg; ?>">
    <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php 
    $args = array(
      'post_type' => 'proteger',
      'order' => 'ASC'
    );
    $saveChilds = new WP_Query($args);
    if ($saveChilds->posts):
  ?>
  <section class="how">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col">
          <h2>Cómo proteger mejor a tus hijos</h2>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <?php
          foreach ($saveChilds->posts as $saveChild):
          $childTitle = $saveChild->post_title;
          $childExc = $saveChild->post_excerpt;
          $childLink = $saveChild->guid;
          $childlinkText = $saveChild->link;
          $childImg = $saveChild->icono['guid'];
        ?>
          <div class="col">
            <a class="article" href="<?php echo $childLink; ?>">
              <img class="img-fluid" src="<?php echo $childImg; ?>">
              <h3><?php echo $childTitle; ?></h3>
              <p><?php echo $childExc; ?></p>
              <span><?php echo $childlinkText; ?></span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php 
    $args = array(
      'post_type' => 'proteccin_mam',
      'order' => 'ASC'
    );
    $saveMoms = new WP_Query($args);
    if ($saveMoms->posts):
  ?>
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
              foreach ($saveMoms->posts as $saveMom):
              $MomTitle = $saveMom->post_title;
              $MomLink = $saveMom->guid;
              $MomImg = $saveMom->imagen_home['guid'];
            ?>
              <div class="col">
                <a class="article" href="<?php echo $MomLink; ?>">
                  <img class="img-fluid" src="<?php echo $MomImg; ?>">
                  <p><?php echo $MomTitle ?></p>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif ?>

  <?php
    global $query_string;
    query_posts ('posts_per_page=4'); 
    if ( have_posts() ) : 
  ?>
  <section class="articles-two">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col">
          <h2>Últimas entradas</h2>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <?php  
          while ( have_posts() ) :
          the_post();
          $postImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') );
          $categories = get_the_terms(get_the_ID(), 'category');
          $postDate = get_the_date('', get_the_ID());
        ?>
        <div class="col">
          <a class="article" href="<?php echo get_permalink(get_the_ID()); ?>">
            <img class="img-fluid" src="<?php echo $postImg; ?>">
            <div class="body">
              <?php  
                foreach ($categories as $category):
                $categoryName = $category->name;
                $categoryDesc = $category->description;
              ?>
              <span class="<?php echo $categoryDesc; ?>"><?php echo $categoryName; ?></span>
              <?php endforeach; ?>
              <h3><?php the_title(); ?></h3>
              <span><?php echo $postDate; ?></span>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="row justify-content-center">
        <div class="col text-center"><a class="button button-blue" href="#">Ver más artículos</a></div>
      </div>
    </div>
  </section>
  <?php  
    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;
  ?>

  <?php 
    $args = array(
      'post_type' => 'video',
      'order' => 'ASC',
      'posts_per_page' => '1'
    );
    $videos = new WP_Query($args);
    if ($videos->posts):
  ?>
  <section class="iframe">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="embed-container">
            <?php
              foreach ($videos->posts as $video):
                $iframe = $video->post_content;
                echo $iframe;
              endforeach;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

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
            <?php echo do_shortcode('[contact-form-7 id="7" title="Formulario Home"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
