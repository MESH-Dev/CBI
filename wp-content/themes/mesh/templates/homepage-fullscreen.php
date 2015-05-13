<?php /*
* Template Name: Homepage - Fullscreen
*/
get_header(); ?>

<main id="main" class="site-main homepage-fullscreen" role="main">

  <?php if (get_field("callout_headline")): ?>
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <div class="callout">
            <h1><?php the_field("callout_headline"); ?></h1>
          </div>
          <div class="callout-button">
            <h3>Search or browse our properties <i class="fa fa-long-arrow-right"></i></h3>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>

</main><!-- #main -->

<?php get_footer(); ?>
