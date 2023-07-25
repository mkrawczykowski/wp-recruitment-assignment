<?php defined('ABSPATH') or die; ?>

<?php
  $heading_pt_1 = get_field('heading_pt_1');
  $heading_pt_2 = get_field('heading_pt_2');
?>

<section class="heading-slider-button">
<div class="container">
    <div class="row">
      <div class="col">
        <?php
          get_template_part( array(
            'heading_pt_1' => $heading_pt_1,
            'heading_pt_2' => $heading_pt_2
          ))
        ?>

        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <?php echo wp_get_attachment_image($imageID, '597', '', array()); ?>
                <div class="splide__slide-content">
                  <h3 class="splide__slide-title"></h3>
                  <p class="splide__slide-info"></p>
                  <ul class="splide__slide-list">
                    <li class="splide__slide-list-item"></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>


        
      </div>
    </div>
  </div>
</section>