</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<?php if( get_field('quote') ) { ?>

	<div class="testimonial">
		<div class="container">
			<div class="twelve columns">
				<h3>What our clients say</h3>
			</div>
		</div>
		<hr class="white">
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

<div id="sidr">
	<nav>
		<?php if(has_nav_menu('main_nav')){
					$defaults = array(
						'theme_location'  => 'main_nav',
						'menu'            => 'main_nav',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					); wp_nav_menu( $defaults );
				}else{
					echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
				} ?>
	</nav>
</div>


<?php wp_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri('/'); ?>/js/jquery.sidr.js"></script>

<script>
	jQuery(document).ready(function() {
	  jQuery('.menu-toggle').sidr();
	});
</script>

</body>
</html>
