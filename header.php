<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="297">
		<meta property="og:image:height" content="110">
		<title><?php if ( is_category() ) {
			echo single_cat_title(); echo ' - '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			echo single_cat_title(); echo ' - '; bloginfo( 'name' );
		} elseif ( is_author() ) {
			echo the_author_meta('nickname'); echo ' - '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Résultats pour &quot;'.esc_html( $s ).'&quot; - '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' - '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			bloginfo( 'name' ); echo ' - '; bloginfo( 'description' );
		} elseif ( is_single() ) {
			wp_title( '' ); echo ' - '; bloginfo( 'name');
		} else {
			echo wp_title( ' - ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.png">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<header id="top">
		<div class="row padding20">
			<div class="logo small-4 columns">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo( get_header_image() ); ?>" alt="<?php bloginfo( 'title' ); ?>" />
				</a>
			</div>
		</div>
	</header>

	<nav class="main-menu">
		<div class="row padding20 padding-none">
			<!-- // -->	
			<div class="show-for-large-up">
				<div class="small-10 columns">
					<a class="home-button" href="<?php bloginfo('url') ?>" title="Accueil"><i class="fa fa-home"></i></a>
					<?php ntsc_main_menu(); ?>
				</div>
				<div class="social-networks show-for-large-up">
					<a href="https://www.facebook.com/AssociationNtsc" title="Page Facebook"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/AssociationNTSC" title="Twitter @AssociationNTSC"><i class="fa fa-twitter"></i></a>
					<a href="https://www.youtube.com/user/AssociationNTSC" title="Chaîne Youtube"><i class="fa fa-youtube-play"></i></a>
				</div>
			</div>
			<!-- // -->	
			<div class="hide-for-large-up">
				<div class="nav-mobile">
					<a class="home-button" href="#"><i class="fa fa-bars"></i></a>
					<div class="nav-mobile-slide">
						<?php ntsc_main_menu(); ?>
					</div>
				</div>
			</div>

		</div>
	</nav>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
