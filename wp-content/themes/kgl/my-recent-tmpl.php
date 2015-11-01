<article class=news--item>
	<span class=news--item-date><?php the_date('d.m.Y'); ?></span>
	<a href="<?php the_permalink(); ?>" class=news--item-title><?php the_title(); ?></a>
	<p class=news--item-body><?php the_excerpt(); ?></p>
</article>

