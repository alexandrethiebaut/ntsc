<?php
if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Barre latérale', 'FoundationPress' ),
	  'description' => __( 'Déposer les widgets que vous souhaitez afficher et hiérarchiser les à votre convenance.', 'FoundationPress' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns sidebar-widget">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
