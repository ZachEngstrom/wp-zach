<?php
/**
 * Template Name: Simple Article (No Breadcrumb)
 */

get_header(); ?>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="no-bc-area"></div>
					<div class="content">
						<h1><?php the_title(); ?></h1>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<p><?php the_tags(); ?></p>
						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="no-bc-area"></div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>