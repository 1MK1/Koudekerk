<?php

get_header();
?>


<?php
 if ( have_posts() ) : 
	while(have_posts()) : the_post(); ?>
<div class="posts" >
	<a href="<?php the_permalink();?>"><div class="post_title"><h2><?php the_title();?></h2></div></a>
	<div class="post_content"><p><?php the_content();?><a href="<?php the_permalink();?>">Lees verder..</a></p></div>
</div>
	<?php endwhile;

	else :
		echo '<p>Einde berichten</p>';

	endif;

	?>