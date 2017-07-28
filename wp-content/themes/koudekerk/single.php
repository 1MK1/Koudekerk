<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage koudekerk
 * @since koudekerk 1.0
 */

get_header(); ?>


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<div class="posts">
				<div class="post_title"><h2><?php the_title();?></h2></div>
				<div class="post_content"><p><?php the_content();?></p></div>
			</div><?php
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="screen-reader-text">' . __( 'Volgende artikel', 'koudekerk' ) . '</span> ' ,
				'prev_text' => '<span class="screen-reader-text">' . __( 'Vorige artikel', 'koudekerk' ) . '</span> ' ,
			) );

		// End the loop.
		endwhile;
		?>

		

