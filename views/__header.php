<head>
	<?php
	ipAddCss('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	ipAddCss(ipThemeUrl('assets/css/foundation.min.css')); // include default CSS for widgets
	ipAddCss(ipThemeUrl('assets/css/foundation.custom.css'));
	ipAddCss(ipThemeUrl('assets/css/app.css'));
	echo ipHead();
	?>
</head>
<body>
<?php echo ipView("__topbar.php", array("menu" => "top-bar", "menuClass" => "right")); ?>
