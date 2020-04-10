<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package author KanG
 * @subpackage KanG
 * @since KanG 1.0
 */
?>
	<div id="secondary" class="widget-area" role="complementary">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php } ?>
<!--side bar-->
	</div><!-- #secondary -->