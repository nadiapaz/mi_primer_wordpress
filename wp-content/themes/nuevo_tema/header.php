<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Item - Start Bootstrap Template</title>
    <?php wp_head() ?> 
  </head>

  <body>



    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mi primer tema <img src=" <?php echo $logo[0]; ?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
       <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
        <?php wp_nav_menu( array( 
          'theme_location'  => 'header-menu',
          'container_id'    => 'navbarResponsive',
          'container_class'   => 'collapse navbar-collapse',
          'menu_class'      => 'navbar-nav ml-auto'
          )
        ); ?>
      <?php } ?>
      </div>
    </nav>