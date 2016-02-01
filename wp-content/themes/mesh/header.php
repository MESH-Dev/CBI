<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php

	if( is_page_template('templates/homepage-fullscreen.php') ) {

		$ctr = 0;

		if( have_rows('background_images') ):

	    while ( have_rows('background_images') ) : the_row();

				$ctr++;

				$imageArray[$ctr] = get_sub_field('background_image')['sizes']['background-fullscreen'];

	    endwhile;

		endif;

		$rand_pic = rand(1,$ctr);

	}




	while(has_sub_field('photographs'))
	{
		$ctr++;
		$text_color[$ctr] = get_sub_field('text_color');
        $imageArray  = get_sub_field('photograph');
	    $imageAlt[$ctr]  = $imageArray['alt'];
	    $imageURL[$ctr]  = $imageArray['sizes']['home-bg'];
	}
	$rand_pic = rand(1,$ctr);

?>

<html>

<head>


<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS (* with Edge Inspect Fix)
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri('/'); ?>/styles/jquery.sidr.dark.css">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>' <?php if( is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo $imageArray[$rand_pic]; ?>') no-repeat center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;" class="background-fullscreen" <?php } ?>>

		<header <?php if( !is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo get_template_directory_uri('/'); ?>/img/image004.jpg'); background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-position: center;" class="background-fullscreen" <?php } ?>>
			<div class="container">
				<div class="five columns">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri('/'); ?>/img/logo.png" /></a>
					</div>
				</div>
			</div>
			<hr class="white">
			<div class="container">
				<div class="twelve columns">
					<nav class="main-navigation">
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
					<a class="menu-toggle" href="#sidr">

						<i class="fa fa-bars fa-2x"></i>

					</a>
				</div>

			</div>

		</header>
