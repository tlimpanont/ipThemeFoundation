<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h1><?php echo ipSlot('logo'); ?></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>
	<section class="top-bar-section">
		<?php
		$options = array(
			'items' => esc($menu),
			'attributes' => array ('class' => esc($menuClass)),
			'parent' => 'has-dropdown',
			'children' => 'dropdown'
		);
		?>
		<?php echo ipSlot('menu', $options); ?>
	</section>
</nav>