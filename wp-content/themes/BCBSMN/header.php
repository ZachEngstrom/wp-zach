<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/bcbsmn-logo.png' alt='Blue Cross and Blue Shield of Minnesota Logo'>
						</a>
					</div>
					<nav class="macro-nav pull-right" role="navigation">
						<?php 
							menu_header_secondary();
						?>
					</nav>
				</div>
				<div class="row">
					<nav class="primary-nav col-sm-12" role="navigation">
						<div class="navbar">
							<?php 
								menu_header_primary();
							?>
						</div>
						<div class="pull-right col-sm-3">
							<?php get_search_form(); ?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>