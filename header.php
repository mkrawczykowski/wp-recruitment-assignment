<?php defined('ABSPATH') or die; ?>

<?php
  global $post;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Async Google Fonts from https://pagespeedchecklist.com/asynchronous-google-fonts -->
  <!-- connect to domain of font files -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- optionally increase loading priority -->
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,800;1,800&display=swap">

  <!-- async CSS -->
  <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,800;1,800&display=swap">

  <!-- no-JS fallback -->
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,800;1,800&display=swap">
  </noscript>

  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="main-nav">
          <?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
          <?php get_template_part( 'template-parts/header/header', 'main-menu' ); ?>
          <?php get_template_part( 'template-parts/header/header', 'language-switcher' ); ?>
          <?php get_template_part( 'template-parts/header/header', 'hamburger' ); ?>
        </nav>
      </div>
    </div>
  </div>
</header>