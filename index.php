<?php

get_header();

// Shows posts
if(have_posts()) :
	while (have_posts()) : the_post();?>
<div class="row">
	<div class="post">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<?php the_content();?>
	</div>
</div>
<?php
	endwhile;

	else :
		echo '<p>No content found</p>';
endif;

get_footer();
?>