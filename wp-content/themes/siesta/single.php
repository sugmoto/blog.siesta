<?php
get_header();
while ( have_posts() ) : the_post();
?>

<div class="single_mv">
	<?php
		$thumbnail_id = get_post_thumbnail_id($post->ID);
		if(wp_get_attachment_image($thumbnail_id, 'large')){
			echo wp_get_attachment_image($thumbnail_id, 'large');
		}
	?>
</div>

<main class="main-single">
	<h1 class="single_ttl"><?php the_title(); ?></h1>

	<div class="single_content">
		<?php the_content(); ?>
	</div>
</main>

<div class="single_recent swiper-container">
	<ul class="recent_articleList swiper-wrapper">
	<?php
		$args = array(
			'posts_per_page' => 10
		);
		$posts = get_posts( $args );
		foreach ( $posts as $post ):
		setup_postdata( $post );
		$thumbnail_id = get_post_thumbnail_id($post->ID);
	?>
		<li class="recent_articleList_item swiper-slide">
			<a href="<?php the_permalink(); ?>">
				<?php
					if(wp_get_attachment_image($thumbnail_id, 'large')):
						echo wp_get_attachment_image($thumbnail_id, 'large');
					else:
						echo "<img src='".esc_url(get_template_directory_uri())."/assets/img/logo.png' alt='SIESTA'>";
					endif;
				?>
			</a>
		</li>
	<?php
		endforeach;
		wp_reset_postdata();
	?>
	</ul>
</div>

<?php
endwhile;
get_footer();
?>