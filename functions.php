<?php

require_once('inc/wp-modifications.php');
require_once('inc/post-types.php');
require_once('inc/theme-options.php');


// Adds Sidebars

function magazino_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'sidebar' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );

}
add_action( 'widgets_init', 'magazino_widgets_init' );


// Adds Support for Menus

add_theme_support( 'menus' );

register_nav_menus( array(  
    'primary' => __( 'Primary Navigation' ), 
    'footer' => __( 'Footer Navigation' ), 
) );

	
// Adds Style to Admin

add_action('admin_head', 'my_custom_logo');

function my_custom_logo() {
echo '<link href="'.get_bloginfo('template_directory').'/css/dashboard.css" type="text/css" rel="stylesheet"><meta name="viewport" content="width=1100, initial-scale=0.5">';
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (false !== strpos($url,'?frontEnd=true')) {
    	echo '
    	<link href="'.get_bloginfo('template_directory').'/css/front-end-editor.css" type="text/css" rel="stylesheet">
    	<script>
    	    $(function () {
    	        $("#title").attr("placeholder", "Your post title");
    	    });
    	</script>
    	';
    };
    $user = wp_get_current_user();
    if ( in_array( 'administrator', (array) $user->roles ) ) {
    	echo '
    	<link href="'.get_bloginfo('template_directory').'/css/admin.css" type="text/css" rel="stylesheet">
    	';
    };
}


// Changes Login Logo

function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; width: 300px !important; height: 83px !important; background-size: 100% !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// Defines Content Width for Gallery - Sized bigger than the container

if ( ! isset( $content_width ) ) {
	$content_width = 1024;
}


// Comments Output

function mytheme_comment($comment, $args, $depth) {
	echo '<div class="comment">';
		echo '<div class="comment-wrapper">';
    		echo comment_text();
    	echo '</div>';
    	echo '<div class="comment-author">';
    		printf( __( '%s' ), get_comment_author_link() );
    		echo '<span class="float--right font-size--sm xs-margin--all"><em>';
    			printf( __('%1$s'), get_comment_date("F jS") );
    		echo '</em></span>';
    	echo '</div>';
    echo '</div>';
}


// Changes Excerpt Ending

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Changes Excerpt Length

function custom_excerpt_length( $length ) {
    return 75;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Overrides Photo's "Link to" Option 

update_option('image_default_link_type','file');


?>