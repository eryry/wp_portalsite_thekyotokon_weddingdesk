<?php
function custom_theme_setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(230,140,true);
	add_theme_support('responsive-embeds'); // 埋め込みコンテンツをレスポンシブに対応
	remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
	remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function post_has_archive($args, $post_type){
	if('post'== $post_type) {
		$args['rewrite'] =true;
		$args['has_archive']='news';
		$args['label']='NEWS投稿';
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);

function new_excerpt_mblength($length){
	return 5; //抜粋する文字数を5設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');