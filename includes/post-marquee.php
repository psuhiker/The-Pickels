<?php if ( has_post_thumbnail()) { ?><?php } else { ?>
    <div class="center">
<?php } ?>

    <div class="marquee--post">
    	<?php if ( has_post_thumbnail()) { ?>
    	    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', 'single-post-thumbnail' ); ?>
    	    <div class="background--photo" style="background-image: url(<?php echo $image[0]; ?>)">
    	    	
    	    </div>
    	<?php } else { ?>
    	    <div class="background--pattern">
    	    	<div class="overlay"></div>
    	    </div>
    	<?php } ?>
    	<div class="marquee--text vertical-align">
    		<div class="wrapper">
    			<div class="content">
    				<div class="col-xs-12 default-padding--bottom">
    					<div class="background"></div>
    					<div class="text">
        		    		<h2 class="headline--shadow default-margin--top"><?php the_title(); ?></h2>
        		    		<?php the_excerpt(); ?>
        		    		<?php include (TEMPLATEPATH . '/includes/read-more.php' ); ?>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="clearfix"></div>
    </div>
    
<?php if ( has_post_thumbnail()) { ?><?php } else { ?>
    </div>
<?php } ?>