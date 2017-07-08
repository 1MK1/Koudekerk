<?php

get_header();
?>
<?php
 if ( have_posts() ) : 
	while(have_posts()) : the_post(); ?>
<div class="posts">
	<div class="post_title"><h2><?php the_title();?></h2></div>
	<div class="post_content"><p><?php the_content();?></p></div>
</div>
	<?php endwhile;

	else :
		echo '<p>Einde berichten</p>';

	endif;

	?>