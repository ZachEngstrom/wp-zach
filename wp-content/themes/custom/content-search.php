<?php
/**
 * The template part for displaying results in search pages
 */
?>

<li class="result-item">
	<div class="result-data">
		<?php the_title( sprintf( '<a href="%s" rel="bookmark" class="title">', esc_url( get_permalink() ) ), '</a>' ); ?>
		<?php the_excerpt(); ?>
	</div>
</li>