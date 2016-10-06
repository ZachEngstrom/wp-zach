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
						<p>&copy;<?php echo date('Y'); ?> Blue Cross and Blue Shield of Minnesota. All rights reserved.</p>
						<p>Blue Cross<sup>&reg;</sup> and Blue Shield<sup>&reg;</sup> of Minnesota and Blue Plus<sup>&reg;</sup> are nonprofit independent licensees of the Blue Cross and Blue Shield Association.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>