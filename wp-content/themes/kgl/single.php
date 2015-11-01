<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 */

get_header(); ?>
<section class="content">
	<div class="container kgl-page-content">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );

//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

			// Previous/next post navigation.
//			the_post_navigation( array(
//				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
//					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
//					'<span class="post-title">%title</span>',
//				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
//					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
//					'<span class="post-title">%title</span>',
//			) );

			// End the loop.
		endwhile;
		?>
	</div>
</section>
<?php get_footer(); ?>
