<?php get_header(); ?>

<!-- Affichage prochain event NTSC -->
<?php $next_event_query = new WP_Query( array( 'cat' => CAT_NEXT_EVENT, 'posts_per_page' => 1 )); ?>

	<?php if ( $next_event_query->have_posts() ) : ?>

		<?php while ( $next_event_query->have_posts() ) : $next_event_query->the_post(); ?>

			<div class="row padding20">
				<div class="small-12 columns next-event">
					<div class="row collapse">
					<?php if (has_post_thumbnail() ): ?>
						<a href="<?php the_permalink(); ?>" class="small-4 columns">
							<?php has_post_thumbnail() ? the_post_thumbnail('event-thumb') : ''; ?>
						</a>
						<div class="bloc-txt small-8 columns">
							<span>Prochain événement :</span>
							<h3><?php $meta_date = get_post_custom_values('Date'); echo $meta_date[0]; ?></h3>
							<h2><?php the_title(); ?></h2>
							<a href="<?php the_permalink(); ?>">En savoir plus <i class="fa fa-chevron-right"></i></a>
						</div>
					<?php else : ?>
						<div class="bloc-txt small-12 columns">
							<span>Prochain événement :</span>
							<h3><?php $meta_date = get_post_custom_values('Date'); echo $meta_date[0]; ?></h3>
							<h2><?php the_title(); ?></h2>
							<a href="<?php the_permalink(); ?>">En savoir plus <i class="fa fa-chevron-right"></i></a>
						</div>
					<?php endif ?>
					</div>
				</div>
			</div>

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

	<?php else : ?>

<?php endif; ?>
<!-- // -->

<div class="row padding20 maincontent">
	<div class="small-12 large-8 columns" role="main">

	<!-- Emplacement présentation - PAGE D'ACCUEIL -->
	<?php $welcome_query = new WP_Query( array( 'page_id' => WELCOME_PAGE, ) ); ?>

		<?php if ( $welcome_query->have_posts() ) : ?>
		
			<?php while ( $welcome_query->have_posts() ) : $welcome_query->the_post(); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>

			<?php else : ?>
		
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>
	<!-- // -->

	<hr>

	<!-- Main loop -->
	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>
	<!-- // -->

	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
