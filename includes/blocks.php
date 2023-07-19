<?php defined('ABSPATH') or die; ?>

<?php
// Register ACF blocks via block.json 
function register_acf_blocks() {
    register_block_type( get_template_directory() . '/build/blocks/block-1');
}
add_action( 'init', 'register_acf_blocks', 5 );
?>