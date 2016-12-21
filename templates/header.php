<header class="banner">
  <div class="container-fluid">
    
	
	<div class="navbar-header page-scroll">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			Menu <i class="fa fa-bars"></i>
		</button>
		<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a>
	</div>
	
    <div class="navbar navbar-default navbar-custom navbar-fixed-top collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </div>
  </div>
</header>
