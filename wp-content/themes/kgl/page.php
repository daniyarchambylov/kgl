<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<section class="content">
	<div class="container kgl-page-content">
		<div class="row">
			<div class="col-xs-12">
				<?php
				if (is_front_page()) {
					echo '<h1>front</h1>';
				}
				?>
				<?php custom_breadcrumbs(); ?>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					// End the loop.
				endwhile;
				?>

			</div>
		</div>

	</div>
</section>



<?php get_footer(); ?>
