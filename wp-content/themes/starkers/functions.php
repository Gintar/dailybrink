<?php
if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widgettitle">',
       'after_title' => '</h2>',
   ));
}

function fb_change_mce_buttons( $initArray ) {
	//@see http://wiki.moxiecode.com/index.php/TinyMCE:Control_reference
	$initArray['theme_advanced_blockformats'] = 'p,address,pre,code,h3,h4,h5,h6,p.question';
	$initArray['theme_advanced_disable'] = 'forecolor';
	//$initArray['theme_advanced_styles'] = 'question=question';
 
	return $initArray;
}
add_filter('tiny_mce_before_init', 'fb_change_mce_buttons');


/**
 * puplish the content in the feed later
 * $where ist default-var in WordPress (wp-includes/query.php)
 * This function an a SQL-syntax
 */
function publish_later_on_feed($where) {
	global $wpdb;

	if ( is_feed() ) {
		// timestamp in WP-format
		$now = gmdate('Y-m-d H:i:s');
		
		$wait = '5'; // integer
		// value for wait; + device
		
		if ( is_category('Monday')){
		$wait = '0'; // integer
		}
		if ( is_category('Tuesday')){
		$wait = '1'; // integer
		}
		if ( is_category('Wednesday')){
		$wait = '2'; // integer
		}
		if ( is_category('Thursday')){
		$wait = '3'; // integer
		}
		if ( is_category('Friday')){
		$wait = '4'; // integer
		}

		// http://dev.mysql.com/doc/refman/5.0/en/date-and-time-functions.html#function_timestampdiff
		$device = 'DAY'; //MINUTE, HOUR, DAY, WEEK, MONTH, YEAR

		// add SQL-sytax to default $where
		$where .= " AND TIMESTAMPDIFF($device, $wpdb->posts.post_date_gmt, '$now') > $wait ";
	}
	return $where;
}

add_filter('posts_where', 'publish_later_on_feed');



// THE BELOW CODE IS FOR TABLET

add_theme_support( 'post-thumbnails' ); 			// This theme uses post thumbnails
add_theme_support('post-formats');					// Posts can now be formatted as aside, chat, gallery, link, image, quote, status, video, audio

add_image_size('cover', 1024, 1024);				// Image size for cover

add_action( 'init', 'create_post_types' );	 		//action to create post types 
add_action('init', 'create_taxonomies');		//action to add any custom taxonomies

function create_post_types(){
	//iPad Post Type
	$labels = array(
		'name' => __( 'Tablet' ),
		'singular_name' => __( 'tablet' ),
		'add_new' => __( 'Add New' ),
		'add_new_item' => __( 'Add New' ),
		'edit' => __( 'Edit' ),
		'edit_item' => __( 'Edit' ),
		'new_item' => __( 'New' ),
		'view' => __( 'View' ),
		'view_item' => __( 'View' ),
		'search_items' => __( 'Search Tablet' ),
		'not_found' => __( 'Nothing found' ),
		'not_found_in_trash' => __( 'Nothing found in Trash' )
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','excerpt'),
		'has_archive' => 'tablet',
	); 
	register_post_type( 'tablet' , $args );
}

function create_taxonomies(){
	register_taxonomy("day_of_the_week", array("tablet"), array("hierarchical" => true, "label" => "Day of the Week", "singular_label" => "Day of the Week", "rewrite" => true));
}




?>
<?php
function custom_login() { 
echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/custom-login/custom-login.css" />'; 
}
add_action('login_head', 'custom_login');

// Add the Style selectbox to the second row of MCE buttons
function my_mce_buttons_2($buttons)
{
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

function my_mce_before_init($init_array)
{
	// add classes using a ; separated values
	$init_array['theme_advanced_styles'] = "a1=a1;a2=a2;a3=a3";
	return $init_array;
}
add_filter('tiny_mce_before_init', 'my_mce_before_init');

add_editor_style('editor-style.css');

?>