<?php
/**
 * The template for displaying the footer
 */
?>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="menu-footer-primary">
						<?php menu_footer_primary(); ?>
					</div>
					<div class="menu-footer-secondary">
						<?php menu_footer_secondary(); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<?php menu_footer_social(); ?>
				</div>
				<div class="col-sm-12">
					<div class="copyright">
						<p>&copy;<?php echo date('Y'); ?> Zach Engstrom. All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>