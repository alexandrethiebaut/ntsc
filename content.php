<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('loop-content'); ?>>
	<header>
		<?php the_category(); ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('loop-thumb'); ?></a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>	
	</div>
	<!-- <footer>
		<a href="<?php the_permalink(); ?>">Lire la suite <i class="fa fa-chevron-right"></i></a>
	</footer> -->
	<hr />
</article>
