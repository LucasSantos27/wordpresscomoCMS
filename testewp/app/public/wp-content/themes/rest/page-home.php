<?php
//Template Name: Menu da Semana
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="menu-prato grid-8">
				<h2><?php the_field('comida'); ?></h2>
				<ul>
					<?php
							$pratos = get_field('pratos');
							if (isset($pratos)) {
								foreach ($pratos as $prato) {
									?>
							<li>
								<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
								<div>
									<h3><?php echo $prato['nome']; ?></h3>
									<p><?php echo $prato['descricao']; ?></p>
								</div>
							</li>
					<?php }
							} ?>
				</ul>
			</div>

			<div class="menu-prato grid-8">
				<h2><?php the_field('comida2'); ?></h2>
				<ul>
					<?php
							$pratos = get_field('pratos2');
							if (isset($pratos)) {
								foreach ($pratos as $prato) {
									?>
							<li>
								<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
								<div>
									<h3><?php echo $prato['nome']; ?></h3>
									<p><?php echo $prato['descricao']; ?></p>
								</div>
							</li>
					<?php }
							} ?>
				</ul>
			</div>

		</section>
<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>