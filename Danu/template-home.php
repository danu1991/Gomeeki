<?php
/*
Template Name: Home
*/
?>

<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	
	while (have_posts()) : the_post(); 	
		
	endwhile; 	
?>
	<div class="header-img" style="background-image:url('<?php echo $thumb_url;?>');">
			<div class="page-title-banner">
				<div class="page-title-banner-head">
					<?php echo get_the_title();?><hr class="page-title-banner-hr" />
					<div class="sm"><?php get_template_part('templates/content', 'page'); ?></div>
				</div>			
			</div>
	</div>
	
	<div class="page-body container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 posts-list">
				<?php global $post; 	
				$custom_posts = get_posts();
				foreach($custom_posts as $post) : setup_postdata($post);
						echo "<a href='"; the_permalink(); echo "'><h2 class='post-title'>"; the_title(); echo "</h2></a>"; 						
						echo "<a href='"; the_permalink(); echo "'><h3 class='post-subtitle'>"; the_excerpt(); echo "</h3></a>";  
						echo "<p class='post-meta'>Posted by "; the_author(); echo " on "; echo get_the_date( 'F j, Y' ); echo "</p>";
						echo "<hr />";
				endforeach;  ?> 
			</div>
		</div>
	</div>

