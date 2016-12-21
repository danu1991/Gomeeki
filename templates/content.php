<div class="row">
	<div class="col-md-8 col-md-offset-2 posts-list">
		<?php global $post; 	
		echo "<a href='"; the_permalink(); echo "'><h2 class='post-title'>"; the_title(); echo "</h2></a>"; 						
		echo "<a href='"; the_permalink(); echo "'><h3 class='post-subtitle'>"; the_excerpt(); echo "</h3></a>";  
		echo "<p class='post-meta'>Posted by "; the_author(); echo " on "; echo get_the_date( 'F j, Y' ); echo "</p>";
		echo "<hr />";
		?> 
	</div>
</div>
