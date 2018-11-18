<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
<div class="container default lg-margin--top xl-margin--bottom">	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	    <?php include (TEMPLATEPATH . '/includes/page-full.php' ); ?>
	
	<?php endwhile; ?>
	    
	    <?php else : ?>
	        
	        <p>Sorry, no posts were found matching your request.</p>
	    
	<?php endif; ?>

</div>

<?php get_footer(); ?>

<?php include (TEMPLATEPATH . '/includes/js-tiled-gallery.php' ); ?>

<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>