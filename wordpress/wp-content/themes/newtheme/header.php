
<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
<!-- 	<link rel="stylesheet" href="wp-content/themes/newtheme/style.css"> -->
</head>
<body <?php body_class(); ?> >

	<header class="sticky-top">


<div class="container">
		<?php wp_nav_menu(

			array(

				'theme-location' => 'top-menu',
				'menu-class' => 'navigation'

			)
	);	 ?>

	</div>
		
	</header>

