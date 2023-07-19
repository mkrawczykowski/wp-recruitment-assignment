<?php defined('ABSPATH') or die; ?>

<?php
  $text = get_field('text');

  echo $text ? '<p>' . $text . '</p>' : NULL;