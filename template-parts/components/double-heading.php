<?php defined('ABSPATH') or die; ?>

<?php
  $heading_pt_1 = args['heading_1'];
  $heading_pt_2 = args['heading_2'];
?>

<div class="double-heading">
  <h2 class="double-heading__heading"><?php echo $heading_pt_1; ?></h2>
  <span class="double-heading__color">
    <h2 class="double-heading__heading">
      <?php echo $heading_pt_2; ?>
    </h2>
  </span>
</div>