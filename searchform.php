<?php do_action( 'foundationpress_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="row collapse">
		<?php do_action( 'foundationpress_searchform_top' ); ?>
		<input type="text" value="" name="s" id="s" placeholder="rechercher...">
		<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>
		<input type="submit" id="searchsubmit" value="&#xf002;" class="prefix button fa fa-search">
		<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>
	</div>
</form>
<?php do_action( 'foundationpress_after_searchform' ); ?>
