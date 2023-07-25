<?php defined('ABSPATH') or die; ?>

<?php
  $imageID = get_field('image'); //required in ACF
  $heading_pt_1 = get_field('heading_pt_1');
  $heading_pt_2 = get_field('heading_pt_2');
  $text = get_field('text'); //required in ACF
  $background_color = get_field('background_color');

  $color_styles_inline = $background_color ? 'style="background-color:' . $background_color . ';" ' : NULL;
?>

<section class="columns-image-text" <?php echo $color_styles_inline; ?>>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php echo wp_get_attachment_image($imageID, '597', '', array());
      ?>
      </div>
      <div class="col">
        <?php
          if ($heading_pt_1 && $heading_pt_2)  : ?>

            <?php
              get_template_part( array(
                'heading_pt_1' => $heading_pt_1,
                'heading_pt_2' => $heading_pt_2
              ))
            ?>

            <?php
            echo $text;
            ?>

          <?php endif; ?>
      </div>
    </div>
  </div>
</section>