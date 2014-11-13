<footer class="row">
	<div class="large-12 columns">
		<hr/>
		<div class="row">
			<div class="large-6 columns">
				<?php echo ipBlock('copyright')->asStatic()->render(); ?>
			</div>
			<div class="large-6 columns">
				<?php
					$options = array(
						'items' => 'footer-nav',
						'attributes' => array ('class' => 'inline-list right')
					);
				?>
				<?php echo ipSlot('menu', $options); ?>
			</div>
		</div>
	</div>
</footer>

<?php
	ipAddJs(ipThemeUrl('assets/js/foundation.min.js'));
	ipAddJs(ipThemeUrl('assets/js/override_tinymce_config.js'));
	ipAddJs(ipThemeUrl('assets/js/app.js'));
	echo ipJs();
?>
</body>
</html>