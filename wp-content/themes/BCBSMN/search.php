<?php
/**
 * The template for displaying search results pages.
 */

global $wp_query;
$total_results = $wp_query->found_posts;

get_header(); ?>

	<section class="section search-page-results">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="no-bc-area"></div>
					<div class="content">
						<div class="row">
							<div class="col-sm-9">
								<form role="search" method="get" id="searchform" class="form-inline searchform search-page-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Site Search">
									<button type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'BCBSMN' ); ?>" class="btn btn-primary btn-call-to-action">Search</button>
								</form>
							</div>
						</div>
						<hr class="hidden-xs">
						<div id="search-results-list" class="col-md-9 col-sm-12 col-xs-12">
						<?php if ( have_posts() ) : ?>
							<h2 class="page-title"><?php printf( __( 'Results for <em>%s</em>', 'BCBSMN' ), get_search_query() ); ?></h2>
							<p class="lead">Found <strong><?php echo $total_results; ?></strong> matches</p>
							<ul class="list-unstyled main-results-without-dn clearfix">
							<?php
							while ( have_posts() ) : the_post(); ?>
								<?php
								get_template_part( 'content', 'search' );
							endwhile;
							echo '</ul>';
						else :
							get_template_part( 'content', 'none' );

						endif;
							// Pagination (from pagination.php)
							if (function_exists("wp_bs_pagination")) {
								wp_bs_pagination();
							}
						?>
						</div>
					</div>
        		</div>
    		</div>
		</div>
	</section>

<?php get_footer(); ?>