<?php
remove_action('wp_head', 'wp_generator');

//サムネイル
add_theme_support('post-thumbnails');
set_post_thumbnail_size('478','250',true);
  // アップロード時に生成される画像のサイズを増やす
 add_image_size( 'myOriginalSizeA', 341, 228, true );
 add_image_size( 'myOriginalSizeB', 354, 250, true );   

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//functions.php
add_theme_support( 'title-tag' );




//ショートコード

function getPrice() {
    $price = get_post_meta(get_the_ID(), 'price', true);
    return $price;
}
add_shortcode('viewPrice', 'getPrice');

function pankuzu(){
$postcate = get_the_category();
$postbg = get_category_parents($postcate[0]->term_id,TRUE,'>' );
 return $postbg;
}

add_shortcode('viewlink', 'pankuzu');

//jQueryを使用する
function new_scripts() {
	wp_enqueue_script('jquery');

	wp_enqueue_script(
	'base',
	get_template_directory_uri() . '/base.js',
	array('jquery')
	);

wp_enqueue_script('bxSlider', get_template_directory_uri() .'/bootstrap.bundle.js', true);

}
add_action('wp_enqueue_scripts', 'new_scripts');


/*	Register navigation
/*---------------------------------------------------------*/

register_nav_menus(	array(
	"footer"=>"footer",
    "footer2"=>"footer2",
	"sidebar"=>"sidebar",
) );



//ショートコードを使ったphpファイルの呼び出し方法

//ここから
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
 
add_shortcode('myphp', 'Include_my_php');
//ここまで


function custom_excerpt_length( $length ) {
     return 20;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>