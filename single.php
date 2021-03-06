<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row padding20">
	
	<div class="small-12 columns section-title">

		<h1 class="entry-title"><?php the_title(); ?></h1>
		<span class="post-meta">
			le <?php echo get_the_date(); ?>, par 
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
		</span>

	</div>

</div>

<div class="row padding20 maincontent">

	<div class="small-12 large-8 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<?php the_category(); ?>
			<div class="entry-content">
				<?php the_post_thumbnail('loop-thumb', array('class' => 'content-thumbnail')); ?>
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'FoundationPress' ), 'after' => '</p></nav>' ) ); ?>
				<p class="tags"><?php the_tags('Tags : '); ?></p>
			</footer>

		</article>
		<hr>

		<aside class="bloc-author">
			<!-- Emplacement avatar -->
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<?php echo get_wp_user_avatar(get_the_author_meta( 'ID' ), 'thumbnail'); ?>
			</a>
			<div class="about">
				<h3><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></h3>
				<p><?php the_author_meta('description'); ?></p>
			</div>
		</aside>

	<?php wp_reset_query(); ?>

<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
