<?php

get_header();

// Shows posts
if(have_posts()) :
	while (have_posts()) : the_post();?>
<section>
  <div class="row">
    <div class="medium-12 small-12 columns">
      <h3><?php the_title();?></h3>
      <?php the_content();?>
    </div>
  </div>
</section>
<?php
	endwhile;

	else :
		echo '<p>No content found</p>';
endif;

get_footer();
?>