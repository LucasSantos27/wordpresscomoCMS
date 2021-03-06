<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
	<meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> <?php the_field('description_seo'); ?>">

	<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">7

	<!--Header Wordpress -->
	<?php wp_head(); ?>
</head>

<body>

	<header>
		<nav>
			<?php
			$args = array(
				'menu' => 'principal',
				'container' => false
			);
			wp_nav_menu($args);
			?>
		</nav>

		<h1><img src="https://i.ibb.co/sFRBny5/rest.png" alt="rest"></h1>

		<p><?php
			$contato_id = 11;
			the_field('endereco', $contato_id);
			?></p>
		<p class="telefone"><?php
							$contato_id = 11;
							the_field('telefone', $contato_id); ?></p>
	</header>