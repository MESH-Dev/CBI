<?php /*
* Template Name: Landing - Grid
*/
get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container">

      <div class="twelve columns">
        <h1><?php the_title(); ?></h1>
        <hr class="black">
        <div class="types">
          <?php

            $terms = get_terms("type");

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
              echo '<ul>';

              foreach ( $terms as $term ) {
               echo '<li data-filter=".' . $term->slug . '">' . $term->name . '</li>';
              }

              echo '<li data-filter="*" class="is-checked">All</li>';
              echo '</ul>';
            }

          ?>
        </div>
      </div>

  </div>



  <div class="container" id="container">

      <?php

        // check if the repeater field has rows of data
        if( have_rows('content_blocks') ):

         	// loop through the rows of data
            while ( have_rows('content_blocks') ) : the_row(); ?>

              <?php

              $filter_terms = '';

                if (get_sub_field('tags')) {
                  $tags = get_sub_field('tags');

                  if ( ! empty( $tags ) ) {
                  	if ( ! is_wp_error( $tags ) ) {
                			foreach( $tags as $tag ) {
                			     $filter_terms .= " " . $tag;
                			}
                  	}
                  }

                } else {
                  $tags = '';
                }

              ?>

              <div class="four columns item <?php echo $filter_terms; ?>">

                <div class="content-block">

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

                      <div class="image-full-overlay">

                        <div class="text-1">
                          <h1><?php echo get_sub_field('title'); ?></h1>
                          <h3><?php echo get_sub_field('tagline') ?></h3>
                        </div>

                        <div class="text-2">
                          <h3><?php echo get_sub_field('full_text'); ?></h3>
                          <?php if(get_sub_field('call_to_action_link')) { ?>
                          <h5><a href="<?php echo get_permalink(get_sub_field('call_to_action_link')->ID); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>
                          <?php } ?>
                        </div>

                      </div>

                      <?php

                    }
                    elseif (get_sub_field('content_block_type') == 'image-with-partial-overlay') {

                      $image = get_sub_field('image');
                      $thumb = $image['sizes']['grid-image'];

                      ?>

                      <img src="<?php echo $thumb; ?>" />

                      <div class="image-partial-overlay">

                        <div class="text-1">
                          <h3><?php echo get_sub_field('tagline') ?></h3>
                        </div>

                        <div class="text-2">

                          <h5><a href="<?php echo get_permalink(get_sub_field('call_to_action_link')->ID); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>
                        </div>

                      </div>

                      <?php

                    }
                    elseif (get_sub_field('content_block_type') == 'title-only') {

                      ?>

                      <div class="title">

                        <h1><?php echo get_sub_field('title') ?></h1>
                        <h5 class="hide">Hide</h5>
                        <h5 class="unhide"><a href="<?php echo get_permalink(get_sub_field('call_to_action_link')->ID); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>

                      </div>

                      <?php
                    }
                    elseif (get_sub_field('content_block_type') == 'quote') {

                      ?>

                      <div class="quote">

                        <h4>&ldquo;<?php the_sub_field('full_text'); ?>&rdquo;</h4>
                        <h5>&mdash; <?php the_sub_field('citation'); ?></h5>

                      </div>

                      <?php

                    }
                    elseif (get_sub_field('content_block_type') == 'v-card') {

                      ?>

                      <div class="v-card">

                        <div class="contact-info">

                          <span class="email"><?php echo get_sub_field('email'); ?></span><br/>
                          <span class="phone"><?php echo get_sub_field('phone'); ?></span><br/>
                          <span class="additional-info"><?php echo get_sub_field('additional_info'); ?></span>
                        </div>

                        <div class="download">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/vcard.png" />
                          <h5><a href="<?php echo get_sub_field('link'); ?>">Download V Card</a></h5>
                        </div>

                      </div>

                      <?php

                    }
                    else {

                    }

                  ?>

                </div>

              </div>

            <?php endwhile;

        else :

            // no rows found

        endif;

      ?>



  </div>

  <br/>
</main><!-- #main -->

<?php get_footer(); ?>
