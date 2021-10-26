<?php

add_filter('show_admin_bar', '__return_false'); // 上のバーを消す
add_theme_support('post-thumbnails'); // アイキャッチを使用する

/* ajax処理 */
function my_ajax(){
	global $post;
	$args = array(
		'posts_per_page' => $_POST["get_post_num"], // 追加で表示する件数
		'offset' => $_POST["now_post_num"],         //既に表示済みの件数は除外 
		'orderby' => 'date', //日付で並び替え
		'order' => 'DESC',
	);
	$my_posts = get_posts($args);
	foreach ($my_posts as $post) : setup_postdata($post);
	$thumbnail_id = get_post_thumbnail_id($post->ID);
	echo '<li class="articleList_item"><a href="'.get_the_permalink().'">';
	echo wp_get_attachment_image($thumbnail_id, 'large');
	echo '</a></li>';
	endforeach; wp_reset_postdata();
	wp_die();
}
add_action( 'wp_ajax_my_ajax_action', 'my_ajax' );
add_action( 'wp_ajax_nopriv_my_ajax_action', 'my_ajax' );

?>
