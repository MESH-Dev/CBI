<?php get_header(); ?>

<main id="content">

	<div class="container">

    <div class="row">
      <div class="twelve columns">
        <h1><?php the_title(); ?></h1>
        <hr class="black">
      </div>
    </div>

		<div class="row">
			<div class="three columns">

				

			</div>
			<div class="nine columns">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
