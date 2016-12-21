<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
	<?php if(is_home()) { echo "<div class='header-img header-img-home'";?> style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/home-bg.jpg');">
		<div class="page-title-banner-head"><?php echo get_bloginfo();?>
		<span class="subheading"><?php bloginfo( 'description' ); ?></span>
		</div>
		
	</div> <?php  } ?>
    <div class="container-fluid header-height" role="document">  
      <div class="content row">
        <main class="main">
			<?php if(is_home()) { echo "<div class='page-body container page-top'>"; } ?>
			<?php include Wrapper\template_path(); ?>
			<?php if(is_home()) { echo "<ul class='pager'><li class='next'><a href='#'>Older Posts →</a></li></ul></div>"; } ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
