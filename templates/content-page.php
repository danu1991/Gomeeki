<div class="page-body container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 ">
			<?php the_content(); ?>
			<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
		</div>
	</div>
</div>