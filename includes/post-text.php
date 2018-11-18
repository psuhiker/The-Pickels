<?php $postType = get_post_type( $post ); ?>

<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 post--text <?php echo $postType; ?>">
	
	<div class="text-center">
    	<h2 class="font--sans-serif"><?php the_title(); ?></h2>
    	<div class="clearfix"></div>
    	<div class="byline default-margin--top">
    		By <?php the_author(); ?> 
    		<span class="sm-margin--horizontal">|</span> 
    		<?php the_time('F jS'); ?>
    		<span class="hidden-xs">
    			<?php the_time(', Y'); ?>
    		</span>
    		<?php $comment_count = get_comment_count($post->ID); ?>
    		<?php if ($comment_count['approved'] > 0) { ?>
    			<span class="sm-margin--horizontal">|</span> 
    			<a href="<?php the_permalink(); ?>#comments" class="text-nowrap">
    				<span class="hidden-xs">
    					<?php comments_number( '0', '1 Comment', '% Comments' ); ?>
    				</span>
    				<span class="hidden-sm hidden-md hidden-lg">
    					<?php comments_number( '0', '1', '%' ); ?>
    					<span class="glyphicon glyphicon-comment xs-margin--left" aria-hidden="true"></span>
    				</span>
    			</a>
    		<?php } ?>
    	</div>
	</div>
	<div class="clearfix"></div>
	<div class="content">
		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>
		<div class="text-center lg-margin--top">
			<?php include (TEMPLATEPATH . '/includes/read-more.php' ); ?>
		</div>
	</div>
	
</div>
<div class="clearfix"></div>

<hr class="<?php echo $postType; ?>">