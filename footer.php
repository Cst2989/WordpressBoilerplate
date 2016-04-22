		<div id="footer">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src='//www.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
	
</body>

</html>
