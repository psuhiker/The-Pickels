<?php 

// Adds Custom Post Types

add_action( 'init', 'create_post_type' );
    function create_post_type() {
    
    // Adds for Recipes
    	
    register_post_type( 'recipes',
        array(
            'labels' => array(
                'name' => __( 'Recipes' ),
                'singular_name' => __( 'Recipe' ),
    			'add_new_item' => __( 'Add New Recipe' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'cookbook', 'with_front' => false),
    		'supports' => array('title','editor','comments', 'author'),
    		'menu_icon' => 'dashicons-carrot',
            )
        );
    
    // Adds for Question of the Month
    			
//    register_post_type( 'question',
//    	array(
//    		'labels' => array(
//    			'name' => __( 'Question of the Month' ),
//    			'singular_name' => __( 'Question of the Month' ),
//    			'add_new_item' => __( 'Add New Question' ),
//                ),
//    		'public' => true,
//    		'comments' => true,
//            'has_archive' => true,
//    		'rewrite' => array('slug' => 'conversations', 'with_front' => false),
//    		'supports' => array('title','editor','comments'),
//    		'menu_icon' => 'dashicons-megaphone',
//            )
//        );
        
    // Adds for Events
    	
    register_post_type( 'birthdays',
        array(
            'labels' => array(
                'name' => __( 'Birthdays' ),
                'singular_name' => __( 'Birthday' )
                ),
            'public' => true,
            'has_archive' => true,
    			'supports' => array( 'title', 'author' ),
    			'menu_icon' => 'dashicons-admin-users',
            )
        );
        
    register_post_type( 'anniversaries',
        array(
            'labels' => array(
                'name' => __( 'Anniversaries' ),
                'singular_name' => __( 'Anniversary' )
                ),
            'public' => true,
            'has_archive' => true,
    			'supports' => array( 'title', 'author' ),
    			'menu_icon' => 'dashicons-heart',
            )
        );
        
    register_post_type( 'holidays',
        array(
            'labels' => array(
                'name' => __( 'Holidays' ),
                'singular_name' => __( 'Holidays' )
                ),
            'public' => true,
            'has_archive' => true,
    			'supports' => array( 'title', 'author' ),
    			'menu_icon' => 'dashicons-calendar',
            )
        );
    
    // Adds for Wish List
		
    register_post_type( 'wish-list',
        array(
            'labels' => array(
                'name' => __( 'Wish List' ),
                'singular_name' => __( 'Wish List Item' )
                ),
            'public' => true,
            'has_archive' => true,
  			'supports' => array( 'title', 'author' ),
  			'rewrite' => array('slug' => 'wish-list', 'with_front' => false),
  			'menu_icon' => 'dashicons-format-status'
            )
        );
        		
    }
    


// Adds Custom Taxonomies

function add_custom_taxonomies() {
	
	// Add new Meal Types taxonomy to Recipes
	
	register_taxonomy('meal_type', 'recipes', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Category', 'taxonomy general name' ),
			'singular_name' => _x( 'Meal', 'taxonomy singular name' ),
			'all_items' => __( 'All Meal Types' ),
			'edit_item' => __( 'Edit Meal Type' ),
			'update_item' => __( 'Update Meal Type' ),
			'add_new_item' => __( 'Add New Meal Type' ),
			'new_item_name' => __( 'New Meal Name' ),
			'menu_name' => __( 'Meal Types' ),
		),
		'rewrite' => array(
			'slug' => 'meals', 
			'with_front' => false, 
			'hierarchical' => true 
		),
	));
	
	// Add new Ingredient taxonomy to Recipes
	
	register_taxonomy('ingredients', 'recipes', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Ingredients', 'taxonomy general name' ),
			'singular_name' => _x( 'Ingredient', 'taxonomy singular name' ),
			'all_items' => __( 'All Ingredients' ),
			'edit_item' => __( 'Edit Ingredient' ),
			'update_item' => __( 'Update Ingredient' ),
			'add_new_item' => __( 'Add New Ingredient' ),
			'new_item_name' => __( 'New Ingredient' ),
			'menu_name' => __( 'Ingredients' ),
		),
		'rewrite' => array(
			'slug' => 'ingredients', 
			'with_front' => false, 
			'hierarchical' => true 
		),
	));
	
}
add_action( 'init', 'add_custom_taxonomies', 0 );