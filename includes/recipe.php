<div class="col-xs-12 marquee no-padding--horizontal">
    <div class="stripes"></div>
    <div class="container">
    	<div class="col-lg-10 col-lg-offset-1">
		    <h1 class="text-center headline--shadow"><?php the_title(); ?></h1>
    	</div>
    </div>
</div>

<div class="clearfix"></div>
	
<div class="container">	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	    <div class="col-sm-5 col-sm-push-7 col-md-4 col-md-push-8 col-lg-3 col-lg-push-8 lg-margin--vertical ingredients">
	    	<h2 class="headline--shadow">Ingredients</h2>
	    	<?php the_field('recipe_ingredients'); ?>
	    </div>
	
	    <div class="recipe col-sm-7 col-sm-pull-5 col-md-6 col-md-offset-1 col-md-pull-4 col-lg-offset-1 col-lg-pull-3 lg-margin--vertical">
	    	
	    	<div class="content">
	    		
	    		<?php if(get_field('recipe_tips' )) { ?>
	    		    <div class="comment-bubble">
	    		    	<div class="wrapper">
	    		    		<?php the_field('recipe_tips'); ?>
	    		    	</div>
	    		    	<div class="author">
	    		    		<?php the_author(); ?>
	    		    	</div>
	    		    </div>
	    		<?php } elseif(get_field('recipe_variations' )) { ?>
	    		    <div class="comment-bubble">
	    		    	<div class="wrapper">
	    		    		<?php the_field('recipe_variations'); ?>
	    		    	</div>
	    		    	<div class="author">
	    		    		<?php the_author(); ?>
	    		    	</div>
	    		    </div>
	    		<?php } ?>
	    		
	    		<?php if(get_field('recipe_photo' )) { ?>
	    			<div class="photo" id="polaroid">
	    				<figure>
	    					<img src="<?php the_field('recipe_photo'); ?>" />
	    			    </figure>
	    			</div>
	    		<?php } ?>
	    		
	    		<div class="instructions">
	    			<h2 class="headline--shadow">Cooking Instructions</h2>
	    			<?php the_field('recipe_cooking_instructions'); ?>
	    		</div>
	    		
	    		<?php if(get_field('recipe_tips' )) { ?>
	    		    <?php if(get_field('recipe_variations' )) { ?>
	    		    	<?php if(get_field('recipe_variations' )) { ?>
	    		    		<div class="variations">
	    		    			<h2 class="headline--shadow">Variations</h2>
	    		    		    <?php the_field('recipe_variations'); ?>
	    		    		</div>
	    		    	<?php } ?>
	    		    <?php } ?>
	    		<?php } elseif(get_field('recipe_variations' )) { ?>
	    		    <?php if(get_field('recipe_tips' )) { ?>
	    		    	<?php if(get_field('recipe_tips' )) { ?>
	    		    		<div class="tips">
	    		    			<h2 class="headline--shadow">Tips</h2>
	    		    		    <?php the_field('recipe_tips'); ?>
	    		    		</div>
	    		    	<?php } ?>
	    		    <?php } ?>
	    		<?php } ?>
	    		
	    		<!--<?php if(get_field('recipe_variations' )) { ?>
	    			<?php if(get_field('recipe_variations' )) { ?>
	    				<div class="variations">
	    					<h2 class="headline--shadow">Variations</h2>
	    				    <?php the_field('recipe_variations'); ?>
	    				</div>
	    			<?php } ?>
	    		<?php } ?>
	    		
	    		<?php if(get_field('recipe_tips' )) { ?>
	    			<?php if(get_field('recipe_tips' )) { ?>
	    				<div class="tips">
	    					<h2 class="headline--shadow">Tips</h2>
	    				    <?php the_field('recipe_tips'); ?>
	    				</div>
	    			<?php } ?>
	    		<?php } ?>-->
	    		
	    		<?php if(get_field('recipe_nutritional_info' )) { ?>
	    		    <div class="nutrition">
	    		        <h2 class="headline--shadow">Nutritional Info</h2>
	    		        <?php the_field('recipe_nutritional_info'); ?>
	    		    </div>
	    		<?php } ?>
	    		
	    		<?php if(get_field('recipe_source' )) { ?>
	    		    <p class="font-size--sm"><strong>Credit:</strong><br /> <?php the_field('recipe_source'); ?></p>
	    		<?php } ?>
	    		
	    	</div>
	    	
	    </div>
	
	<?php endwhile; ?>
	    
	    <?php else : ?>
	        
	        <p>Sorry, no posts were found matching your request.</p>
	    
	<?php endif; ?>

</div>