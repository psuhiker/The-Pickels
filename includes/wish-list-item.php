<?php 
	$current_user = wp_get_current_user();
    $postURL = get_post_type_archive_link( 'wish-list' ); 
    $processingURL = site_url() . '/processing/';
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
?>

<?php foreach( $posts as $post ):setup_postdata( $post ) ?>

	<div class="col-md-6 item item<?php the_id(); ?> row-eq-height <?php if(get_field('christmas_claimed_gift')) { ?>yes<?php } ?> <?php the_field('christmas_recipient'); ?> <?php if(get_field('christmas_claimed_removed')) { ?>hidden<?php } ?>">
	
		<div class="col-xs-1 text-center vertical-align">
			<div class="claim">
    		    
	    		<?php 
				    $recipient = get_field('christmas_recipient');
				    $current_user = wp_get_current_user();
				    if ( $current_user->display_name ==  $recipient ) {} else {
				?>
					<a href="<?php echo $processingURL; ?>?claimProcessing&id=<?php the_id(); ?>&item=<?php the_title(); ?>">
	        		    <span class="glyphicon glyphicon-unchecked unclaimed font-size--md unclaimed<?php the_id(); ?> <?php if(get_field('christmas_claimed_gift')) { ?>yes<?php } ?> <?php the_field('christmas_recipient'); ?> <?php if(get_field('christmas_claimed_removed')) { ?>removed<?php } ?>" aria-hidden="true"></span>
	        		    <span class="text unclaimed unclaimed<?php the_id(); ?> sm-margin--top <?php if(get_field('christmas_claimed_gift')) { ?>yes<?php } ?> <?php the_field('christmas_recipient'); ?> <?php if(get_field('christmas_claimed_removed')) { ?>removed<?php } ?>">Claim</span>
	        		</a>
				<?php } ?>
				
				<?php 
	        		$claimedPerson = get_field('christmas_claimed_gift');
	        		$current_user = wp_get_current_user();
	        		if (strpos($claimedPerson, $current_user->display_name) !== false) { 
	        	?>
	        		<a href="<?php echo $processingURL; ?>?unclaimProcessing&id=<?php the_id(); ?>&item=<?php the_title(); ?>">
        		    	<span class="glyphicon glyphicon-check claimed claimed<?php the_id(); ?> font-size--md <?php if(get_field('christmas_claimed_gift')) { ?>yes<?php } ?> <?php the_field('christmas_recipient'); ?> <?php if(get_field('christmas_claimed_removed')) { ?>removed<?php } ?>" aria-hidden="true"></span>
        		    	<span class="text claimed claimed<?php the_id(); ?> default-margin--top <?php if(get_field('christmas_claimed_gift')) { ?>yes<?php } ?> <?php the_field('christmas_recipient'); ?> <?php if(get_field('christmas_claimed_removed')) { ?>removed<?php } ?>">Unclaim</span>
        		    </a>
	        	<?php } ?>
    		    	
    		</div> 
    	</div> 
    	
    	<div class="col-xs-9 col-sm-10">
    		<p class="no-margin--bottom"><strong><?php the_title(); ?></strong></p>
    		<?php if(get_field('christmas_description')) { ?>
    		    <p class="sm-margin--bottom font-size--sm">
    		    	<?php the_field('christmas_description'); ?>
    		    </p>
    		<?php } ?>
    		<ul class="list-inline font-size--sm">
    			<?php if(get_field('christmas_size')) { ?>
        			<li class="list-inline-item">
        				<strong>Size/Color:</strong> 
        				<?php the_field('christmas_size'); ?>
        			</li>
        		<?php } ?>
    			<?php if(get_field('christmas_link')) { ?>
        			<li class="list-inline-item">
        				<strong>Link:</strong> 
        				<a href="<?php the_field('christmas_link'); ?>">
        				    <span class="hidden-md hidden-lg">
        				        View Online
        				    </span>
        				    <span class="hidden-xs hidden-sm">
        				        <!--<?php the_field('christmas_link'); ?>-->
								View Online
        				    </span>
        				</a>
        			</li>
        		<?php } ?>
    		</ul>
    		<?php 
    	    $recipient = get_field('christmas_recipient');
    	    //$current_username = wp_get_current_user();
    	    //$current_user = $current_username->display_name;
    	    //echo 'recipient'; echo $recipient; echo 'user'; echo $current_user
    	    //echo $recipient;
    	    //echo $current_user->display_name;
    	    if ( $current_user->display_name ==  $recipient ) { 
    	?>
    		<a href="<?php echo $processingURL; ?>?removeProcessing&id=<?php the_id(); ?>&item=<?php the_title() ; ?>" class="btn btn-sm btn-default">
        		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        		<span class="text">Remove</span>
        	</a>
    	
    	<?php } ?>
    	
    		<div class="parent">
    			<a href="<?php echo $processingURL; ?>?removeProcessing&id=<?php the_id(); ?>&item=<?php the_title() ; ?>" class="btn btn-sm btn-default">
	        		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	        		<span class="text">Remove</span>
	        	</a>
    		</div> 
    	
    	</div>
    	
    	<div class="clear clearfix"></div> 
	
	</div>
	
	<!-- Pop Up Alerts -->

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>