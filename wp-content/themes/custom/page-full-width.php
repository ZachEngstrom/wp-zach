<?php
/**
 * Template Name: Full Width
 */

get_header(); ?>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php if (is_front_page()) { ?>
					<div class="no-bc-area"></div>
				<?php } else { ?>
					<div class="bc-area">
						<?php breadcrumbs(); ?>
					</div>
				<?php } ?>
					<div class="content">
						<h1><?php the_title(); ?></h1>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<p><?php the_tags(); ?></p>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>