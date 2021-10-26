<?php get_header(); ?>

<div>
	<ul class="articleList">
		<?php
		if ( have_posts() ):
			while ( have_posts() ) : the_post();

			$thumbnail_id = get_post_thumbnail_id($post->ID);
		?>

		<li class="articleList_item"><a href="<?php the_permalink(); ?>">
			<?php echo wp_get_attachment_image($thumbnail_id, 'large'); ?>
		</a></li>

		<?php endwhile;
			global $wp_query; $count = $wp_query->found_posts;
		?>
	</ul>

	<ul class="load articleList" data-count="<?php echo $count; ?>"></ul>

	<?php endif; ?>
</div>


<?php get_footer(); ?>
