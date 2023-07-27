<?php defined('ABSPATH') or die; ?>

<?php
  $label = $args['label'] ? $args['label'] : NULL;
  $url = $args['url'] ? $args['url'] : NULL;
  $color = $args['color'] ? $args['color'] : NULL;
  $align = $args['align'] ? $args['align'] : NULL;
  $size = $args['size'] ? $args['size'] : NULL;

  $class__color = $color ? ' simple-button__' . $color : 'simple-button__gray';
  $class__align = $align ? ' simple-button__' . $align : 'simple-button__left';
  $class__size = $size ? ' simple-button__' . $size : 'simple-button__size1';

if ($url && $label) : ?>
  <div class="simple-button<?php echo $class__color; ?><?php echo $class__align; ?><?php echo $class__size; ?>">
    <a href="<?php echo $url; ?>" class="simple-button__link">
      <?php echo $label; ?>
    </a>
  </div>
<?php endif; ?>
