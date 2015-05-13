<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1>Our Work</h1>
        <hr class="black">
        <?php

          $terms = get_terms("type");

          print_r($terms);

        ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="four columns">
          <?php if (get_sub_field('content_block_title')): ?>
            <h3><?php the_sub_field('content_block_title'); ?></h3>
          <?php endif ?>
          <?php if (get_sub_field('content_block_description')): ?>
            <p><?php the_sub_field('content_block_description'); ?></p>
          <?php endif ?>
        </div>

      <?php endwhile; ?>

    </div>
  </div>

</main><!-- #main -->

<?php get_footer(); ?>
