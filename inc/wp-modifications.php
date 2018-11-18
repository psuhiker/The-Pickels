<?php

// Changing the Admin Menu

require_once('wp-admin-menu-classes.php');
add_action('admin_menu','my_admin_menu');
function my_admin_menu() {

    // Removes Sections
    remove_admin_menu_section('Links');
    //remove_admin_menu_section('Appearance');
    remove_admin_menu_section('Tools');
    remove_admin_menu_section('Media');
    remove_admin_menu_section('edit-comments.php');
    //remove_admin_menu_section('plugins.php');
    remove_admin_menu_section('themes.php');
    remove_admin_menu_section('options-writing.php');
    remove_admin_menu_section('Profile');
    remove_admin_menu_section('embedly');
    remove_admin_menu_section('database-manager.php');
    remove_admin_menu_section('external_links_in_new_windows');
    
    // Adds Sections
    add_menu_page(
        __( 'Site Menu', 'textdomain' ),
            'Navigation',
            'manage_options',
            'nav-menus.php',
            '',
            'dashicons-menu',
            '40'
        );
    add_menu_page(
        __( 'Customize Theme', 'textdomain' ),
            'Customize Theme',
            'manage_options',
            'customize.php',
            '',
            'dashicons-art',
            '40'
        );
    add_menu_page(
        __( 'Profile', 'textdomain' ),
            'My Account',
            'read',
            'profile.php',
            '',
            'dashicons-admin-users',
            '100'
        );
    
}


// Removes Plugin Menu Links

add_action( 'admin_init', 'wpse_136058_remove_menu_pages' );

function wpse_136058_remove_menu_pages() {

    remove_menu_page( 'wp-user-avatar' );
    remove_menu_page( 'wp-dbmanager/database-manager.php' );
    remove_menu_page( 'email-users/email-users.php' );
    remove_menu_page( '' );
    
}


// Changes Footer Text

function remove_footer_admin () {
    echo "Powered by Wordpress &bull; Designed and Managed by <a href='http://www.pickelwebdesign.com/' target='_blank'>Pickel Web Design</a>";
    echo '<meta name="viewport" content="width=768, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">';
} 

add_filter('admin_footer_text', 'remove_footer_admin'); 
		

// Modifies Admin Bar

	// Adds Additional Menus on Admin Bar 
	
	function add_sumtips_admin_bar_link() {
		global $wp_admin_bar;
		
		    $site_url = site_url();
		
		    if ( ! is_admin() ) {
		        $wp_admin_bar->add_menu( array(
		        'id' => 'admin_bar_switch_view',
		        'title' => __( 'Go to Dashboard'),
		        'href' => __(''.$site_url.'/wp-admin/'),
		        ) );
		    } else  {
		        $wp_admin_bar->add_menu( array(
		        'id' => 'admin_bar_switch_view',
		        'title' => __( 'Go to Website'),
		        'href' => __(site_url()),
		        ) );
		    }
	
	}
	add_action('admin_bar_menu', 'add_sumtips_admin_bar_link',25);
	
	// Removes Some Default Links
	
	function remove_admin_bar_links() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('updates');
		$wp_admin_bar->remove_menu('site-name');
		$wp_admin_bar->remove_menu('new-content');
		$wp_admin_bar->remove_menu('comments');
		$wp_admin_bar->remove_menu('search');
	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
	
	// Modifies 'Howdy' Content
	
	add_filter( 'body_class', 'twentyeleven_body_classes' );
	add_filter('gettext', 'change_howdy', 10, 3);
	function change_howdy($translated, $text, $domain) {
	if (false !== strpos($translated, 'Howdy'))
	return str_replace('Howdy,', 'My Account:', $translated);
	return $translated;
	}
