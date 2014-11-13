<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
	<?php echo ipView('views/__header.php')->render(); ?>
	<div class="row">
		<div class="large-9 push-3 columns">
			<?php echo ipBlock('main')->render(); ?>
		</div>
		<div class="large-3 pull-9 columns">
			<?php
				$options = array(
					'items' => 'side-nav',
					'attributes' => array ('class' => 'side-nav')
				);
			?>
			<?php echo ipSlot('menu', $options); ?>
			<?php echo ipBlock('advertisement')->render(); ?>
		</div>
	</div>
	<div class="row">
		<?php echo ipBlock('news-block')->render(); ?>
	</div>
	<?php echo ipView('views/__footer.php')->render(); ?>
</body>
</html>