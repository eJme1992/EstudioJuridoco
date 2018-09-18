<?php
/**
 * @package WordPress
 * @subpackage ID-Peru-Theme-Wordpress
 * @since HTML5 ID 2.0
 */
?>
<footer id="footer">		
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-12">		
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in yuor CSS files -->
<script src="<?php echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>

<!-- This is an un-minified, complete version of Modernizr.
	 Before you move to production, you should generate a custom build that only has the detects you need. -->
<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/bootstrap.min.js"></script>

</body>

</html>
