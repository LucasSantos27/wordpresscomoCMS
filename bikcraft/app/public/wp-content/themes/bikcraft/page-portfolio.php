<?php
// Template Name: Portfolio
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">
			<?php
				$quote_portfolio = get_field('quote_portfolio');
				if(isset($quote_portfolio)) { foreach($quote_portfolio as $quote) { ?>
				<li>
					<blockquote class="quote_clientes">
						<p><?php echo $quote['quote']; ?></p>
						<cite><?php echo $quote['nome_quote']; ?></cite>
					</blockquote>
				</li>
				<?php } } ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>
<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>