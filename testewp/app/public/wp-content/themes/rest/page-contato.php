<?php
//Template Name: Contato
?>
<?php get_header(); ?>
<section class="container contato">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-16">
		<a href="<?php the_field('link_maps'); ?>" target="_blank"><img src="<?php the_field('mapa_rest'); ?>" alt="Mapa para Rest"></a>
	</div>


	<?php
	$infos = get_field('info');
	if (isset($infos)) {
		foreach ($infos as $info) {
			?>
			<div class="grid-1-3 contato-item">
				<h2><?php echo $info['title']; ?></h2>
				<p><?php echo $info['text1']; ?></p>
				<p><?php echo $info['text2']; ?></p>
				<p><?php echo $info['text3']; ?></p>
			</div>
	<?php }
	} ?>
</section>
<?php get_footer(); ?>