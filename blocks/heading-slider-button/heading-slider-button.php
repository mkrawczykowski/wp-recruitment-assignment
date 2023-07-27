<?php defined('ABSPATH') or die; ?>

<?php
  $heading_pt_1 = get_field('heading_pt_1');
  $heading_pt_2 = get_field('heading_pt_2');
?>

<section class="heading-slider-button">

        <?php
          get_template_part('template-parts/components/double-heading', '', array(
            'heading_pt_1' => $heading_pt_1,
            'heading_pt_2' => $heading_pt_2,
            'align'        => 'center'
          ))
        ?>


        <?php
        $args = array(
          'post_type' => 'tune',
          'posts_per_page' => 2,
          'order' => 'ASC',
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <div class="splide" id="splide-slider" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li class="splide__slide">

                      <?php
                        $field_1 = get_field('field_1', get_the_ID());
                        $field_2 = get_field('field_2', get_the_ID());
                        $characteristics = get_field('characteristics', get_the_ID());
                        $final_fields_content = '';
                        $final_fields_content .= $field_1;
                        $final_fields_content .= ($field_1 && $field_2) ? ' | ' : NULL;
                        $final_fields_content .= $field_2 ? $field_2 : NULL;
                      ?>
                      
                      <?php if ( get_the_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('smallest'); ?>
                      <?php endif; ?>

                      <div class="splide__slide-content">
                      <a class="splide__slide-link-title" href="<?php the_title(); ?>">
                        <h3 class="splide__slide-title"><?php the_title(); ?></h3>
                      </a>  
                        <?php
                          echo $final_fields_content ? '<p class="splide__slide-info">' . $final_fields_content . '</p>' : NULL;

                          if($characteristics) : ?>
                            <ul class="splide__slide-list">
                            <?php foreach( $characteristics as $characteristic ) : ?>
                              <li class="splide__slide-list-item">
                                <?php echo $characteristic['characteristic']; ?>
                              </li>  
                            <?php endforeach; ?>
                            </ul>
                          <?php endif; ?>

                      </div>
                    </li>
                <?php endwhile; ?>
            </ul>
          </div>
        </div>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php
          get_template_part('template-parts/components/simple-button', '', array(
            'label' => 'More',
            'url' => get_post_type_archive_link('tune'),
            'color'        => 'gray',
            'align'        => 'center',
            'size'        => 'size2'
          ))
        ?>

</section>