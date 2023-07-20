<?php defined('ABSPATH') or die; ?>

<?php
  $sidebar_id = $args['sidebar'];
?>

<?php if ( is_active_sidebar( $sidebar_id ) ) : ?>
	<div class="col">
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( $sidebar_id ); ?>
		</div>
	</div>
<?php endif; ?>