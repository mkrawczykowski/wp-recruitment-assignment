<?php defined('ABSPATH') or die; ?>    

<?php
  if (has_custom_logo()) : ?>
    <div class="header-logo">
      <?php the_custom_logo(); ?>
    </div>
  <?php endif;?>