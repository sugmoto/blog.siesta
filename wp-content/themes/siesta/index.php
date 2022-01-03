<?php get_header(); ?>

<div class="contents">
	<ul class="articleList init">
		<?php
		if ( have_posts() ):
			while ( have_posts() ) : the_post();

			$thumbnail_id = get_post_thumbnail_id($post->ID);
		?>

		<li class="articleList_item"><a href="<?php the_permalink(); ?>">
			<?php
				$img = wp_get_attachment_image($thumbnail_id, 'large');
				if($img){
					echo $img;
				}else{
					echo '<img src="'.esc_url(get_template_directory_uri()).'/assets/img/logo.svg" alt="siesta" class="noimg">';
				}
			?>
		</a></li>

		<?php endwhile;
			global $wp_query; $count = $wp_query->found_posts;
		?>
	</ul>

	<ul class="load articleList" data-count="<?php echo $count; ?>"></ul>

	<?php endif; ?>

	<!-- <div class="info">
		<p class="info_adr">1540016 東京都世田谷区弦巻4-2-1</p>
		<p class="info_info">TEL：03-4362-0742 OPEN：12:00～20:00</p>
	</div> -->
</div>


<?php get_footer(); ?>
