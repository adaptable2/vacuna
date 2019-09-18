<?php get_header(); ?>
  <?php  
    $img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') );
  ?>
  <section class="banner">
    <img class="img-fluid" src="<?php echo $img; ?>">
  </section>
  <section class="content">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <h1><?php the_title(); ?></h1>
            <?php
              echo $posts[0]->post_content;
            ?>
          </div>
        </div>
      </div>
  </section>
  <?php
    $argsSticky = array(
      'category__in' => 10, 
      'numberposts' => 1,
      'post__not_in' => array($post->ID),
      'orderby'          => 'date',
      'order'            => 'DESC',
    );
    $relatedSticky = get_posts($argsSticky);
    if($relatedSticky):
  ?>
  <section class="artucle-bottom">
    <div class="container">
      <div class="row">
        <?php 
          foreach( $relatedSticky as $postSticky ):
          $postImg = wp_get_attachment_url( get_post_thumbnail_id($postSticky->ID, 'thumbnail') );
        ?>
          <div class="col-md-6 align-self-end">
            <a href="<?php echo $postSticky->guid; ?>">
              <h4><?php echo $postSticky->post_title; ?></h4>
              <p><?php echo $postSticky->post_content; ?></p>
              <span>Seguir leyendo ></span>
            </a>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="<?php echo $postImg; ?>">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
<?php get_footer(); ?>
