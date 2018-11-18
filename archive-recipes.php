<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php //if ( is_user_logged_in() ) { ?>

    <body class="secondary recipes">
    	
    	<?php if ( is_user_logged_in() ) { ?>
    		<?php include (TEMPLATEPATH . '/header.php' ); ?>
    	<?php } else { ?>
    		<?php // include (TEMPLATEPATH . '/header.php' ); ?>
    	<?php } ?>
    	
    	<div class="col-xs-12 marquee no-padding--horizontal">
    	    <div class="stripes"></div>
    	    <div class="container">
    	    	<div class="col-lg-10 col-lg-offset-1">
    	    	    <h1 class="text-center headline--shadow">Recipes</h1>
    	    	</div>
    	    </div>
    	    <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 lg-margin--top">
    	        <form id="filterForm" onsubmit="return false;">
    	        	<input id="filter" type="text" name="keyword" class="form-control" placeholder="Search Recipes...">
    	        	<div class="reset" style="display: none;">
    	        	    <a id="resetBtn"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
    	        	</div>
    	        </form>
    	    </div>
    	</div>
    		
    	<div class="container xl-padding--bottom">
    	
    	    <div class="col-xs-12 searchable">
    	    	
    	    	<div class="text-center">
    	    		<h2 class="headline--shadow headline--underline lg-margin--bottom">Meal Type</h2>
    	    	</div>
    	    	
    	    	<ul class="list list-unstyled">
    	    					
    	    		<?php $terms = get_terms('meal_type'); foreach( $terms as $term ): ?>
    	    		
    	    		    <li class="searchableItem"><h3 class="headline--sans-serif no-margin--top"><?php echo $term->name; ?></h3>
    	    		    	<ul class="list-unstyled font-size--sm lg-margin--bottom">
    	    		    		<?php                         
    	    		    		    $posts = get_posts(array(
    	    		    		      'post_type' => 'recipes',
    	    		    		      'taxonomy' => $term->taxonomy,
    	    		    		      'term' => $term->slug,                                  
    	    		    		      'nopaging' => true,
    	    		    		      'orderby' => title,
    	    		    		      'order' => 'ASC'
    	    		    		    ));
    	    		    		    foreach($posts as $post): setup_postdata($post);
    	    		    		?>
    	    		    		    <li class="searchableItem default-margin--left xs-margin--bottom">
    	    		    		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	    		    		        <div class="hidden">
    	    		    		        	<?php the_field('recipe_ingredients'); ?>
    	    		    		        	<?php the_field('recipe_cooking_instructions'); ?>
    	    		    		        	<?php the_field('recipe_variations'); ?>
    	    		    		        	<?php the_field('recipe_tips'); ?>
    	    		    		        	<?php the_field('recipe_nutritional_info'); ?>
    	    		    		        	<?php the_field('recipe_source'); ?>
    	    		    		        	<?php echo $term->name; ?>
    	    		    		        </div>
    	    		    		    </li>
    	    		    		<?php endforeach; ?>
    	    		    	</ul>
    	    		    </li>
    	    		
    	    		<?php endforeach; ?>
    	    					
    	    	</ul>  
    	    	
    	    	<div class="text-center">
    	    		<h2 class="headline--shadow headline--underline lg-margin--bottom">Ingredients</h2>
    	    	</div>
    	    	
    	    	<div class="clearfix"></div>
    	    	
    	    	<ul class="list list-unstyled">
    	    					
    	    		<?php $terms = get_terms('ingredients'); foreach( $terms as $term ): ?>
    	    		
    	    		    <li class="searchableItem"><h3 class="headline--sans-serif no-margin--top"><?php echo $term->name; ?></h3>
    	    		    	<ul class="list-unstyled font-size--sm lg-margin--bottom">
    	    		    		<?php                         
    	    		    		    $posts = get_posts(array(
    	    		    		      'post_type' => 'recipes',
    	    		    		      'taxonomy' => $term->taxonomy,
    	    		    		      'term' => $term->slug,                                  
    	    		    		      'nopaging' => true,
    	    		    		      'orderby' => title,
    	    		    		      'order' => 'ASC'
    	    		    		    ));
    	    		    		    foreach($posts as $post): setup_postdata($post);
    	    		    		?>
    	    		    		    <li class="searchableItem default-margin--left xs-margin--bottom">
    	    		    		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	    		    		        <div class="hidden">
    	    		    		        	<?php the_field('recipe_ingredients'); ?>
    	    		    		        	<?php the_field('recipe_cooking_instructions'); ?>
    	    		    		        	<?php the_field('recipe_variations'); ?>
    	    		    		        	<?php the_field('recipe_tips'); ?>
    	    		    		        	<?php the_field('recipe_nutritional_info'); ?>
    	    		    		        	<?php the_field('recipe_source'); ?>
    	    		    		        	<?php echo $term->name; ?>
    	    		    		        </div>
    	    		    		    </li>
    	    		    		<?php endforeach; ?>
    	    		    	</ul>
    	    		    </li>
    	    		
    	    		<?php endforeach; ?>
    	    					
    	    	</ul>
    	    
    	    </div>
    	    	
    	</div>
    	
    	<?php include (TEMPLATEPATH . '/includes/filter-js.php' ); ?>
    	
    	<?php if ( is_user_logged_in() ) { ?>
    		<?php get_footer(); ?>
    	<?php } else { ?>
    		<?php // get_footer(); ?>
    	<?php } ?>
    	
    	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    </body>
    
<?php // } else { ?>

    <?php // include( TEMPLATEPATH . '/page-login.php' ); ?>

<?php // } ?>