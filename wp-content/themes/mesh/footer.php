</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<?php if( get_field('quote') ) { ?>

	<div class="testimonial">
		<div class="container">
			<div class="twelve columns">
				<h3>What our clients say</h3>
			</div>
		</div>
		<hr/>
		<div class="container">
			<div class="twelve columns">

				<blockquote>
					<p><?php the_field('quote'); ?></p>
					<footer>
						&mdash; <cite><?php the_field('cite'); ?></cite>
					</footer>
				</blockquote>

			</div>
		</div>
	</div>

	<?php } ?>

	<div class="container">

			<div class="eight columns">
				<div class="icons">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri('/'); ?>/img/ccim.png" />
					</div>
					<div class="icon">
						<img src="<?php echo get_template_directory_uri('/'); ?>/img/grm.png" />
					</div>
					<div class="icon">
						<img src="<?php echo get_template_directory_uri('/'); ?>/img/aicp.png" />
					</div>
					<div class="icon">
						<img src="<?php echo get_template_directory_uri('/'); ?>/img/micsc.png" />
					</div>
					<div class="icon">
						<img src="<?php echo get_template_directory_uri('/'); ?>/img/uli.png" />
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="attribution">
					<span>Site by <a href="http://meshfresh.com" target="_blank">MESH</a></span>
				</div>
			</div><!-- End of Footer -->
		
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
