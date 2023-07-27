<?php defined('ABSPATH') or die; ?>

<?php
  $heading_pt_1 = $args['heading_pt_1'] ? $args['heading_pt_1'] : NULL;
  $heading_pt_2 = $args['heading_pt_2'] ? $args['heading_pt_2'] : NULL;
  $align = $args['align'] ? $args['align'] : 'left';

  $class_align = $align ? ' double-heading--' . $align : '';
?>

<div class="double-heading<?php echo $class_align; ?>">
  <?php 
    echo $heading_pt_1 ? '<h2 class="double-heading__heading">' . $heading_pt_1 . '</h2>' : NULL;
  ?>

  <?php if ($heading_pt_2) : ?>
    <span class="double-heading__color">
        <h2 class="double-heading__heading">
          <?php echo $heading_pt_2; ?>
        </h2>
      </span>
  <?php endif; ?>
</div>