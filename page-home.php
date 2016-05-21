<?php
/*
Template Name: Home Page Template
*/
get_header();

// Shows posts
if(have_posts()) :
	while (have_posts()) : the_post();?>

<?php
	endwhile;

	else :
		echo '<section>
  <div class="row">
    <div class="medium-12 columns">
      <h1>No content found.</h1>
    </div>
  </div>
</section>';
endif;

get_footer();
?>