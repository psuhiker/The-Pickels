<div class="col-xs-12 marquee no-padding--horizontal">
    <div class="stripes"></div>
    <div class="container">
    	<div class="col-lg-10 col-lg-offset-1">
		    <h1 class="text-center headline--shadow">Pickel Wish Lists</h1>
    		<div class="text-center">
    			<div class="byline--wrapper no-border">
    		    	<div class="byline no-margin--top">
    		    		<div class="bg-overlay--white"></div>
    		    		<a type="button" class="btn btn-default button--inverse xs-margin--bottom activateWishListForm" role="button">
    		    		    <span class="glyphicon glyphicon-comment xs-margin--right" aria-hidden="true"></span>
    		    		    Add to the Wishlist
    		    		</a>
    		    	</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<div class="clearfix"></div>
	
<div class="container xl-padding--vertical">	

    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    	
    	<?php wp_reset_query(); ?>
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	
    	    <div class="font-size--sm">
    	    	<?php the_content(); ?>
    	    </div>
    	
    	<?php endwhile; ?>
    	    
    	    <?php else : ?>
    	    
    	<?php endif; ?>
    	
    </div>
</div>

<?php if (false !== strpos($url,'?message=' )) { ?>

	<?php
		$processingURL = site_url() . '/processing/';
	?>

	<div class="popUpAlert vertical-align text-center active" id="messageAlert">
        <div class="wrapper">
            <div class="content">
            	<div class="alert-box">
            		<div class="bg-overlay"></div>
            		<div class="content">
                		<?php 
                			$item = $_GET['item']; 
                			$itemID = $_GET['itemID'];
                		?>
		        		<?php if (false !== strpos($url,'?message=claimed' )) { ?>
		        		    <h2 class="headline--shadow">
		        		        You have claimed:
		        		    </h2>
		        		    <p class="font-size--lg no-margin--bottom"><?php echo $item; ?></p>
		        		    <p><a href="<?php echo $processingURL; ?>?unclaimProcessing&id=<?php echo $itemID; ?>&item=<?php echo $item; ?>">Undo</a></p>
		        		<?php } elseif (false !== strpos($url,'?message=unclaimed' )) { ?>
		        		    <h2 class="headline--shadow">
		        		        You have unclaimed:
		        		    </h2>
		        		    <p class="font-size--lg"><?php echo $item; ?></p>
		                <?php } elseif (false !== strpos($url,'?message=removed' )) { ?> 
		        		    <h2 class="headline--shadow">
		        		        You have removed:
		        		    </h2>
		        		    <p class="font-size--lg no-margin--bottom"><?php echo $item; ?></p>
		        		    <a href="<?php echo $processingURL; ?>?unremoveProcessing&id=<?php echo $itemID; ?>&item=<?php the_title(); ?>">
        						Undo
        					</a>
		        		<?php } elseif (false !== strpos($url,'?message=confirmed' )) { ?>
		        		    <h2 class="headline--shadow">
		        		        Your item has been added
		        		    </h2>
		        		<?php } ?>
		        		<p class="default-margin--top">
		        			<a class="font-size--sm default-margin--left btn btn-sm btn-default hideMessageAlert">
		        				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		        				<span class="text">
		        					Close this Window
		        				</span>
		        			</a>
		        		</p>
            		</div>
            	</div>
            </div>
        </div>
    </div>

<?php } ?>

<?php 
	$user = wp_get_current_user();
?>

<div class="container xl-padding--bottom" id="user<?php echo $user->ID; ?>">	

    <div class="col-xs-12">

		<?php
    	    $blogusers = get_users( 'blog_id=1&orderby=display_name&exclude=11,10' );
    	    foreach ( $blogusers as $user ) { 
    	?>
    	
    		<div class="col-xs-12 xl-margin--bottom" id="recipient<?php echo $user->ID; ?>">
    	
	    	    <h2 class="headline--shadow no-margin--top font-size--lg text-center xl-margin--bottom">
	    	        <?php echo $user->display_name; ?>'s<br> Wish List
	    	    </h2>
	    	    
	    	    <div class="items">
	    	    	
	    	    	<?php 
	    	    	    $posts = get_posts(array(
	    	    		    'post_type' => 'wish-list',
	    	    		    'posts_per_page' => -1,
	    	    		    'orderby' => 'title',
	    	    		    'order' => 'ASC',
	    	    		    'meta_key' => 'christmas_recipient',
	    	    		    'meta_value' => $user->display_name
	    	    	    ));
	    	    	if( $posts ): ?>
	    	    		    	   	    	    	
	    	    	    <?php include( TEMPLATEPATH . '/includes/wish-list-item.php' ); ?>
	    	    	    
	    	    	<?php else : ?>
	    	    	
	    	    		<p class="text-center"><em><?php echo $user->display_name; ?> hasn't created a wish list yet</em></p>
	    	    	
	    	    	<?php endif; ?>
	    	    	
	    	    </div>
	    	    
	    	</div>
    	
    	<?php } ?>
    	
    </div>
</div>