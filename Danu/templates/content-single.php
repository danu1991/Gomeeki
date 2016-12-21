<?php while (have_posts()) : the_post(); ?>
<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
?>
	<div class="header-img" style="background-image:url('<?php echo $thumb_url;?>');">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="page-title-banner ">
						<div class="page-title-banner-head blog-banner"><?php echo get_the_title();?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <article <?php post_class(); ?>>
    <div class="container post-body">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
   
  </article>
<?php endwhile; ?>


