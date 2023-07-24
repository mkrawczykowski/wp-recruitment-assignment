<?php defined('ABSPATH') or die; ?>    
    
<!-- <footer class="footer">
  <div class="container">
    <div class="row row--footer">
      <?php 
        if (has_custom_logo()) : ?>
          <div class="col">
            <?php the_custom_logo(); ?>
          </div>
        <?php endif;?>
      
        <?php 
          $current_language = '';
          if (function_exists('pll_current_language')){
            $current_language = pll_current_language();
          }
          get_template_part('template-parts/sidebar', 'footer', array(
            'sidebar' => 'footer_column_one_' . $current_language
          ));
          get_template_part('template-parts/sidebar', 'footer', array(
            'sidebar' => 'footer_column_two_' . $current_language
          ));
          get_template_part('template-parts/sidebar', 'footer', array(
            'sidebar' => 'footer_column_three_' . $current_language
          ));
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="footer__copyright">Copyright © <?php echo date("Y"); ?>. All rights reserved.</p>
      </div>
    </div>
  </div>   
</footer> -->

  <?php wp_footer(); ?>

</body>
</html>