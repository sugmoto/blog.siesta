<?php
get_header();
while ( have_posts() ) : the_post();
?>

<main class="main-single">

	<div class="single_inr">
		<div class="single_ttlArea">
			<div class="single_mv">
				<?php
					$thumbnail_id = get_post_thumbnail_id($post->ID);
					if(wp_get_attachment_image($thumbnail_id, 'large')){
						echo wp_get_attachment_image($thumbnail_id, 'large');
					}
				?>
			</div>
		
			<h1 class="single_ttl"><?php the_title(); ?></h1>
		</div>
	
		<div class="single_content">
			<?php the_content(); ?>
		</div>
	</div>

	<div class="single_recent">
		<ul class="recent_articleList">
			<?php
				$args = array(
					'posts_per_page' => 10
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post );
				$thumbnail_id = get_post_thumbnail_id($post->ID);
			?>
			<li class="recent_articleList_item">
				<a href="<?php the_permalink(); ?>">
					<?php
						$img = wp_get_attachment_image($thumbnail_id, 'large');
						if($img){
							echo $img;
						}else{
							echo '<img src="'.esc_url(get_template_directory_uri()).'/assets/img/logo.svg" alt="siesta" class="noimg">';
						}
					?>
				</a>
			</li>
			<?php
				endforeach;
				wp_reset_postdata();
			?>
		</ul>
	</div>
</main>

<?php
endwhile;
get_footer();
?>