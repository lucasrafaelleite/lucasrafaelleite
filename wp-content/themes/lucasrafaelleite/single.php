<?php
/* Template name: Home */
get_header();
?>
	<div class="col-md-8 conteudo">
		<?php
		while (have_posts() ) : the_post(); ?>
			<article>
				<h1><?= get_the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php
			endwhile;
		?>
		
<?php
get_footer();
?>