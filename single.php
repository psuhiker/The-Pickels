<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<?php $key = get_theme_mod( 'themessettings_password' ); ?>

<?php if ( is_user_logged_in() ) { ?>

    <body class="secondary post">
    
    	<?php include (TEMPLATEPATH . '/header.php' ); ?>
    		
    	<div class="container">	
    	
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		
    		    <?php include (TEMPLATEPATH . '/includes/post-full.php' ); ?>
    		
    		<?php endwhile; ?>
    		    
    		    <?php else : ?>
    		        
    		        <p>Sorry, no posts were found matching your request.</p>
    		    
    		<?php endif; ?>
    	
    	</div>
    	
    	<?php get_footer(); ?>
    	
    	<?php include (TEMPLATEPATH . '/includes/js-tiled-gallery.php' ); ?>
    	
    	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    </body>
    
<?php } elseif (false !== strpos($url,'?' . $key )) { ?>

    <body class="secondary post public">
    
    	<?php include (TEMPLATEPATH . '/header.php' ); ?>
    		
    	<div class="container">	
    	
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		
    		    <?php include (TEMPLATEPATH . '/includes/post-full.php' ); ?>
    		
    		<?php endwhile; ?>
    		    
    		    <?php else : ?>
    		        
    		        <p>Sorry, no posts were found matching your request.</p>
    		    
    		<?php endif; ?>
    	
    	</div>
    	
    	<?php get_footer(); ?>
    	
    	<?php include (TEMPLATEPATH . '/includes/js-tiled-gallery.php' ); ?>
    	
    	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    </body>

<?php } else { ?>

    <?php include( TEMPLATEPATH . '/page-login.php' ); ?>

<?php } ?>