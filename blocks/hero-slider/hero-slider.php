<?php defined('ABSPATH') or die; ?>
<!--
<section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">Slide 01</li>
			<li class="splide__slide">Slide 02</li>
			<li class="splide__slide">Slide 03</li>
		</ul>
  </div>
</section>



<section class="hero-slider">
  <?php
  if( have_rows('slides') ): ?>
    <div class="swiper">
      <div class="swiper-wrapper">

        <?php    
        while( have_rows('slides') ) : the_row();
          $content = get_sub_field('content');
          $image = get_sub_field('image');
          $heading_1 = $content['heading_1'];
          $heading_2 = $content['heading_2'];
          $text = $content['text'];
          $link_label = $content['link_label'];
          $button = $content['button'];
          $slide_image = $image['slide_image']; ?>

          <div class="swiper-slide">
            <div class="swiper-slide__background-image">
							<?php echo wp_get_attachment_image($slide_image, '', "", array( 
                'class' => 'img-responsive', 
                'loading' => 'eager', 
                'sizes' => "(max-width: 576px) 597px, 100vw"
              ));
                ?>
						</div>
            <div class="swiper-slide__content">
              <?php
                echo $heading_1 ? '<h3 class="swiper-slide__heading-small">' . $heading_1 . '</h3>' : NULL;
                echo $heading_2 ? '<h3 class="swiper-slide__heading-big">' . $heading_2 . '</h3>' : NULL;
                echo $text ? '<div class="swiper-slide__text">' . $text . '</div>' : NULL;
                if ($link_label && $button){
                  echo '
                    <div class="button">
                      <a class="button__link" href="' . $button .'">' . $link_label . '</a>
                    </div>
                  ';
                }
              ?>              
            </div>
          </div>
        <?php  
        endwhile; ?>

      </div>
    </div>
  <?php
  endif; ?>
</section>
-->