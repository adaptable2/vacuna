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
    $args = array(
      'category__in' => wp_get_post_categories($post->ID), 
      'numberposts' => 6, 
      'post__not_in' => array($post->ID),
      'orderby'          => 'date',
      'order'            => 'DESC',
    );
    $related = get_posts($args);
    if($related):
  ?>
  <section class="exit-street">
    <div class="container">
      <div class="row justify-content-md-center">
        <?php 
          foreach( $related as $post ): 
          $categories = get_the_terms(get_the_ID(), 'category');
          $postImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'thumbnail') );
        ?>
          <div class="col-md-4 col">
            <a class="article" href="<?php the_permalink() ?>">
              <img class="img-fluid" src=" <?php echo $postImg; ?>">
              <div class="body">
              <?php  
                foreach ($categories as $category):
                $categoryName = $category->name;
                $categoryDesc = $category->description;
              ?>
                <span class="<?php echo $categoryDesc; ?> "><?php echo $categoryName; ?></span>
              <?php endforeach; ?>
                <h3><?php the_title(); ?></h3>
                <span><?php echo get_the_date('', get_the_ID()) ?></span>
              </div>
            </a>
          </div>
        <?php 
          endforeach;
          wp_reset_postdata();
        ?>
      </div>
      <div class="row justify-content-center">
        <div class="col text-center"><br><a class="button button-blue" href="#">Ver más artículos</a></div>
      </div>
    </div>
  </section>
  <?php endif; ?>
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
            <a href="article.html">
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
