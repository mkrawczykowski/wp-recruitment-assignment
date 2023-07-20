<?php defined('ABSPATH') or die; ?>    
    
<footer class="footer">
  <div class="container">
    <hr>
    <div class="row">
      <?php 
        if (has_custom_logo()) : ?>
          <div class="col">
            <?php the_custom_logo(); ?>
          </div>
        <?php endif;?>
      
        <?php 
          get_template_part('template-parts/sidebar', 'footer', array(
            'sidebar' => 'footer_column_one'
          ));
          get_template_part('template-parts/sidebar', 'footer', array(
            'sidebar' => 'footer_column_two'
          ));
          get_template_part('template-parts/sidebar', 'footer', array(
            'sidebar' => 'footer_column_three'
          ));
        ?>
      </div>
    </div>
  </div>   
</footer>

  <?php wp_footer(); ?>

</body>
</html>