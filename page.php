<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row padding20">
	
	<div class="small-12 columns section-title">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>

</div>

<div class="row padding20 maincontent">

	<div class="small-12 large-8 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'FoundationPress' ), 'after' => '</p></nav>' ) ); ?>
				<p class="tags"><?php the_tags(); ?></p>
			</footer>

		</article>

	<?php wp_reset_query(); ?>

<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
