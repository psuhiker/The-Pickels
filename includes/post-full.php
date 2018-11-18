<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
	
	<div class="text-center">
    	<h1 class="headline--shadow"><?php the_title(); ?></h1>
    	<div class="byline--wrapper">
        	<div class="byline no-margin--top">
        		<div class="bg-overlay--white"></div>
        		By <?php the_author(); ?> 
        		<span class="mobile-date">
            		<span class="sm-margin--horizontal">|</span> 
            		<span class="hidden-sm hidden-md hidden-lg">
            			<?php the_time('M jS'); ?>
            		</span>
        		</span>
        		<span class="hidden-xs">
        			<?php the_time('F jS, Y'); ?>
        		</span> 
        		<?php $comment_count = get_comment_count($post->ID); ?>
        		<?php if ($comment_count['approved'] > 0) { ?>
        			<span class="sm-margin--horizontal">|</span> 
        			<a href="#comments" class="text-nowrap">
        				<span class="hidden-xs">
        					<?php comments_number( '0', '1 Comment', '% Comments' ); ?>
        				</span>
        				<span class="hidden-sm hidden-md hidden-lg">
        					<?php comments_number( '0', '1', '%' ); ?>
        					<span class="glyphicon glyphicon-comment xs-margin--left" aria-hidden="true"></span>
        				</span>
        			</a>
        		<?php } ?>
        		<span class="add-comment">
        			<span class="sm-margin--horizontal">|</span> 
        			<a type="button" class="btn btn-default btn-sm activateComments" role="button" data-tracking="activateComments" data-label="byline">
        				<span class="glyphicon glyphicon-comment xs-margin--right" aria-hidden="true"></span> <span class="hidden-xs">Add a</span> Comment
        			</a>
        		</span>
        		<?php if(get_field('allow_social_sharing' )) { ?><?php } else { ?>
        		    <?php include (TEMPLATEPATH . '/includes/share-this.php' ); ?>
        		<?php } ?>
        	</div>
    	</div>
	</div>
	
	<div class="content">
		<?php the_content(); ?>
	</div>
	
	<?php include (TEMPLATEPATH . '/includes/comments.php' ); ?>
	
</div>

<script>
	$(document).ready(function() {
		var stickySidebar = $('.byline').offset().top;
		$(window).scroll(function() {  
			if ($(window).scrollTop() > stickySidebar) {
				$('.byline').addClass('affix');
			}
			else {
				$('.byline').removeClass('affix');
			}  
		});
	});
</script>
