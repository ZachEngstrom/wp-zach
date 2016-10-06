<?php
/**
 * Template Name: Sitemap
 */

get_header(); ?>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
						<div class="no-bc-area"></div>
					<div class="content">
						<h1>Sitemap</h1>
							<ul>
								<?php
									wp_list_pages(array('title_li' => '',));
								?>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>