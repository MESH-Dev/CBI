<?php /*
* Template Name: Landing - Grid - No Banner
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h1><?php the_title(); ?></h1>
        <hr class="black">
        <div class="types">
          <?php

            $terms = get_terms("type");

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
              echo '<ul>';

              foreach ( $terms as $term ) {
               echo '<li>' . $term->name . '</li>';
              }

              echo '</ul>';
            }

          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">




      <?php

        // check if the repeater field has rows of data
        if( have_rows('content_blocks') ):

         	// loop through the rows of data
            while ( have_rows('content_blocks') ) : the_row(); ?>

              <div class="four columns">

                <?php

                  // display a sub field value
                  if (get_sub_field('content_block_type') == 'image-only') {

                    $image = get_sub_field('image');
                    $thumb = $image['sizes']['grid-image'];

                    ?>

                    <img src="<?php echo $thumb; ?>" />

                    <?php

                  }
                  elseif (get_sub_field('content_block_type') == 'image-with-full-overlay') {

                    $image = get_sub_field('image');
                    $thumb = $image['sizes']['grid-image'];

                    ?>

                    <img src="<?php echo $thumb; ?>" />

                    <h1><?php echo get_sub_field('title'); ?></h1>

                    <h3><?php echo get_sub_field('tagline') ?></h3>

                    <h3><?php echo get_sub_field('full_text'); ?></h3>

                    <h5><a href="<?php echo get_sub_field('call_to_action_link'); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>

                    <?php

                  }
                  elseif (get_sub_field('content_block_type') == 'image-with-partial-overlay') {

                    $image = get_sub_field('image');
                    $thumb = $image['sizes']['grid-image'];

                    ?>

                    <img src="<?php echo $thumb; ?>" />

                    <h5><a href="<?php echo get_sub_field('call_to_action_link'); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>

                    <?php

                  }
                  elseif (get_sub_field('content_block_type') == 'title-only') {

                    ?>

                    <h1><?php echo get_sub_field('title') ?></h1>

                    <h5><a href="<?php echo get_sub_field('call_to_action_link'); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>

                    <?php
                  }
                  elseif (get_sub_field('content_block_type') == 'quote') {

                    ?>

                    <h4><?php the_sub_field('full_text'); ?></h4>

                    <h5>&mdash; <?php the_sub_field('cite'); ?></h5>

                    <?php

                  }
                  else {

                  }

                ?>

              </div>

            <?php endwhile;

        else :

            // no rows found

        endif;

      ?>

    </div>
  </div>

</main><!-- #main -->

<?php get_footer(); ?>
