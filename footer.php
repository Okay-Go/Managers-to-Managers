<footer class="footer">
	<p>
		<?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
	</p>

	<nav class="footer-nav"> <!-- Delete if not neccessary -->
		<?php 

		$args = array(
			'theme_location' => 'footer'
		);
		
		?>
	</nav>
</footer>
<?php wp_footer(); ?>
</div>  <!-- End of wrapper -->
</body>
</html>