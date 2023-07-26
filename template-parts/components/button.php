<?php defined('ABSPATH') or die; ?>

<?php
  $label = $args['label'] ? $args['label'] : NULL;
  $url = $args['url'] ? $args['url'] : NULL;
  $color = $args['color'] ? $args['color'] : NULL;
  $align = $args['align'] ? $args['align'] : NULL;
  $size = $args['size'] ? $args['size'] : NULL;

  $class__color = $color ? ' button__' . $color : 'button__gray';
  $class__align = $align ? ' button__' . $align : 'button__left';
  $class__size = $size ? ' button__' . $size : 'button__size1';

if ($url && $label) : ?>
  <div class="button<?php echo $class__color; ?><?php echo $class__align; ?><?php echo $class__size; ?>">
    <a href="" class="button__link">
      tekst
    </a>
  </div>
<?php endif; ?>
