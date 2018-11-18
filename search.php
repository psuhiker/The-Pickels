<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>

</head>

<body class="secondary search">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<div class="col-xs-12 marquee no-padding--horizontal">
	    <div class="stripes"></div>
	    <div class="container">
	    	<div class="col-lg-10 col-lg-offset-1">
	    	    <p class="no-margin--bottom lg-margin--top text-center">Search results for:</p>
	    	    <h1 class="text-center headline--shadow no-margin--top lg-margin--bottom sm-padding--bottom">
	    	        <?php printf( __( '%s' ), get_search_query() ); ?>
	    	    </h1>
	    	</div>
	    </div>
	    <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
	        <form id="filterForm" onsubmit="return false;">
	        	<input id="filter" type="text" name="keyword" class="form-control" placeholder="Filter by Keyword...">
	        	<div class="reset" style="display: none;">
	        	    <a id="resetBtn"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
	        	</div>
	        </form>
	    </div>
	</div>
	
	<div class="container xl-padding--bottom">
	
	    <div class="col-xs-12 searchable lg-padding--top">
	    			
	    	<?php $posts = query_posts($query_string . '&orderby=type&order=asc&showposts=-1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
	    	
	    	    <?php $postType = get_post_type( $post ); ?>
	    	    <div class="searchableItem <?php echo $postType; ?>">
	    	    	<?php include (TEMPLATEPATH . '/includes/post-text.php' ); ?>
	    	    	<div class="hidden">
	    	    		<?php echo strip_shortcodes(wp_trim_words( get_the_content(), 9999999999 )); ?>
	    	    	</div>
	    	    </div>
	    	
	    	<?php endwhile; ?>
	    	    
	    	    <?php else : ?>
	    	        
	    	        <p>Sorry, no posts were found matching your request.</p>
	    	    
	    	<?php endif; ?>
	    			
	    </div>
	    
	</div>
	
	<?php include (TEMPLATEPATH . '/includes/filter-js.php' ); ?>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>