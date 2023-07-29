<?php defined('ABSPATH') or die; ?>



<section class="hero-slider splide" role="group" aria-label="slider">
  <?php
  if( have_rows('slides') ): ?>
    <div class="splide__track">
		  <ul class="splide__list">

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

          <li class="splide-slide">
            <div class="splide-slide__background-image">
							<?php echo wp_get_attachment_image($slide_image, '', '', array( 
                'class' => 'img-responsive', 
                'loading' => 'eager', 
                'sizes' => "(max-width: 576px) 597px, 100vw"
              ));
                ?>
						</div>
            <div class="splide-slide__content">
              <?php
                echo $heading_1 ? '<h3 class="splide-slide__heading-small">' . $heading_1 . '</h3>' : NULL;
                echo $heading_2 ? '<h3 class="splide-slide__heading-big">' . $heading_2 . '</h3>' : NULL;
                echo $text ? '<div class="splide-slide__text">' . $text . '</div>' : NULL;
                if ($link_label && $button){
                  echo '
                    <div class="button">
                      <a class="button__link" href="' . $button .'">' . $link_label . '</a>
                    </div>
                  ';
                }
              ?>              
            </div>
          </li>
        <?php  
        endwhile; ?>

      </ul>
    </div>
  <?php
  endif; ?>
</section>