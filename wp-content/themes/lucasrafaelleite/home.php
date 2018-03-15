<?php
/* Template name: Home */
get_header();
?>
	<div class="col-md-8 conteudo">
		<?php
		global $wp_query;
		query_posts(
			array_merge(
				array(
					'post_type' => 'post',
					'posts_per_page' => 4
				),
				$wp_query->query
			)
		);
		//var_dump($wp_query);
		while (have_posts() ) : the_post(); ?>
			<article>
				<h1><?= get_the_title(); ?></h1>
				<p><?= get_the_excerpt(); ?></p>
				<?= '<a class="btn btn-default btn-success" href="'.get_permalink().'">continue lendo</a>'; ?>
			</article>
		<?php
			endwhile;
			pagination_funtion();
		?>
		
<?php
get_footer();
?>