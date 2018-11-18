<body class="home">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<?php // if( current_user_can('administrator')) { ?>
		
		<style><!--
			.alert.christmas {
				background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2018/11/B1B9FD87-843C-4E71-9FBC-AEC7C784A27D.gif);
				color: #FFF;
				border-radius: 0;
				font-weight: bold;
			}
			.alert.christmas .get-started {
				float: right;
			}
			.alert.christmas a,
			.alert.christmas a:hover {
				color: #FFF;
				display: block;
				text-decoration: none;
			}
		--></style>
		
		<div class="alert christmas">
			
			<a href="<?php echo site_url(); ?>/wish-list/">Christmas Wish Lists are now open! Upload your wish list or browse others' lists now. <span class="get-started">Get Started <span class="glyphicon glyphicon-chevron-right"></span></span></a>
			
		</div> 
		
	<?php // } ?>
	
	<div class="container">
	
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; if(1 == $paged) { // Page 1 ?>
		
		    <?php query_posts(array('showposts', 'posts_per_page'=> '1', 'offset'=> '0')); while (have_posts()) { the_post(); ?>
		    
		        <?php include (TEMPLATEPATH . '/includes/post-marquee.php' ); ?>
		    
		    <?php } ?><?php wp_reset_query(); ?>
		    
		    <div class="group">
		    
    		    <?php query_posts(array('showposts', 'posts_per_page'=> '4', 'offset'=> '1')); while (have_posts()) { the_post(); ?>
    		    
    		        <?php include (TEMPLATEPATH . '/includes/post-text.php' ); ?>
    		    
    		    <?php } ?><?php wp_reset_query(); ?>
		    
		    </div>
		    
		    <?php query_posts(array('showposts', 'posts_per_page'=> '1', 'offset'=> '5')); while (have_posts()) { the_post(); ?>
		        
		        <div class="left">
		        	<?php include (TEMPLATEPATH . '/includes/post-marquee.php' ); ?>
		        </div>
		    
		    <?php } ?><?php wp_reset_query(); ?>
		    
		    <div class="group">
		    
    		    <?php query_posts(array('showposts', 'posts_per_page'=> '4', 'offset'=> '6')); while (have_posts()) { the_post(); ?>
    		    
    		        <?php include (TEMPLATEPATH . '/includes/post-text.php' ); ?>
    		    
    		    <?php } ?><?php wp_reset_query(); ?>
		    
		    </div>
		    
		    <?php query_posts(array('showposts', 'posts_per_page'=> '1', 'offset'=> '10')); while (have_posts()) { the_post(); ?>
		        
		        <?php include (TEMPLATEPATH . '/includes/post-marquee.php' ); ?>
		    
		    <?php } ?><?php wp_reset_query(); ?>
		    
		    <div class="group">
		    
    		    <?php query_posts(array('showposts', 'posts_per_page'=> '4', 'offset'=> '11')); while (have_posts()) { the_post(); ?>
    		    
    		        <?php include (TEMPLATEPATH . '/includes/post-text.php' ); ?>
    		    
    		    <?php } ?><?php wp_reset_query(); ?>
		    
		    </div>
		    
		    <?php query_posts(array('showposts', 'posts_per_page'=> '1', 'offset'=> '15')); while (have_posts()) { the_post(); ?>
		        
		        <div class="left">
		        	<?php include (TEMPLATEPATH . '/includes/post-marquee.php' ); ?>
		        </div>
		    
		    <?php } ?><?php wp_reset_query(); ?>
		    
		    <div class="group">
		    
    		    <?php query_posts(array('showposts', 'posts_per_page'=> '4', 'offset'=> '16')); while (have_posts()) { the_post(); ?>
    		    
    		        <?php include (TEMPLATEPATH . '/includes/post-text.php' ); ?>
    		    
    		    <?php } ?><?php wp_reset_query(); ?>
		    
		    </div>
	    
	    <?php } else { // Pages 2 - X ?>
	    
	        <?php while ( have_posts() ) : the_post(); get_template_part( 'content', 'page' ); ?>
	            <?php include (TEMPLATEPATH . '/includes/post-text.php' ); ?>
	        <?php endwhile; ?>
	    
	    <?php } ?>
	
	</div>
	
	<div class="col-xs-12 pagination text-center xl-padding--vertical">
    	
    	<?php if( get_previous_posts_link() ) { ?>
    	    <div class="btn btn-default xs-margin--horizontal">
    	        <?php previous_posts_link( '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Previous Page' ); ?>
    	    </div>
    	<?php } ?>
	
	    <?php if( get_next_posts_link() ) { ?>
	        <div class="btn btn-default xs-margin--horizontal">
	            <?php next_posts_link( 'Next Page <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>' ); ?>
	        </div>
    	<?php } ?>
	    
	</div>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>