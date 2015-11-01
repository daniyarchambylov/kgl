<?php
/**
 * The template used for displaying page content
 *
 */
?>
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php the_content(); ?>
<?php
wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'kgl' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'kgl' ) . ' </span>%',
	'separator'   => '<span class="screen-reader-text">, </span>',
) );
?>
