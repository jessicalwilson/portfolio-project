<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php echo get_bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="title" content="<?php wp_title('|', true, 'right'); ?>">

	<link rel="pingback" href="<?php echo get_bloginfo('pingback_url'); ?>">

	<!-- bof wp_head -->
	<?php wp_head(); ?>
	<!-- eof wp_head -->

</head>
<body class="<?php echo implode(' ', get_body_class()); ?>">

	<div id="top"><!-- Closes in footer.php -->
		<?php $hero_image = get_field('hero_image'); ?>

		<header class="header"<?php echo isset($hero_image) ? sprintf(' style="background-image: url(%s);"', $hero_image) : ''; ?>>
			<div class="header__wrapper">
				<h1 class="header__heading">
					<?php if (is_front_page()) : ?>
						<span>
							<?php bloginfo('name'); ?>
						</span>
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<?php bloginfo('name'); ?>
						</a>
					<?php endif; ?>
				</h1>

				<?php if (get_bloginfo('description')) : ?>
					<h2 class="header__description"><?php bloginfo('description'); ?></h2>
				<?php endif; ?>

				<?php
				if (has_nav_menu('header')) :
					wp_nav_menu(array(
						'container'       => 'nav',
						'theme_location'  => 'header',
						'container_id'    => 'header-menu',
						'container_class' => 'header-menu',
						'menu_id'         => 'header-menu-list',
						'menu_class'      => 'header__menu-list',
					));
				endif;
				?>
			</div>
		</header>
