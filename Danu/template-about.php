<?php
/*
Template Name: About
*/
?>

<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
?>
	<div class="header-img" style="background-image:url('<?php echo $thumb_url;?>');">
			<div class="page-title-banner">
				<div class="page-title-banner-head"><?php echo get_the_title();?><hr class="page-title-banner-hr" /></div>
			</div>
	</div>

	<?php while (have_posts()) : the_post(); 	
		get_template_part('templates/content', 'page'); 	
	endwhile; ?>