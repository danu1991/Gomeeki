<header class="banner">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav>
  </div>
</header>
