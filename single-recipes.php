<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
<?php $key = get_theme_mod( 'themessettings_password' ); ?>

<?php // if ( is_user_logged_in() ) { ?>

    <body class="secondary recipe">
    
    	<?php if ( is_user_logged_in() ) { ?>
    		<?php include (TEMPLATEPATH . '/header.php' ); ?>
    	<?php } else { ?>
    		<?php // include (TEMPLATEPATH . '/header.php' ); ?>
    		<div class="text-center">
    			<a href="/cookbook/" class="btn btn-default default-margin--top">
    				<i class="fa fa-chevron-left sm-margin--right" aria-hidden="true"></i>
    				Back to All Recipes
    			</a>
    		</div> 
    	<?php } ?>
    	
    	<?php include (TEMPLATEPATH . '/includes/recipe.php' ); ?>
    	
    	<?php if ( is_user_logged_in() ) { ?>
    		<?php get_footer(); ?>
    	<?php } else { ?>
    		<?php // get_footer(); ?>
    	<?php } ?>
    	
    	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    </body>
    
<?php // } elseif (false !== strpos($url,'?' . $key )) { ?>

    <!--<body class="secondary recipe public">-->
    	
    	<?php // include (TEMPLATEPATH . '/header.php' ); ?>
    	
    	<?php // include (TEMPLATEPATH . '/includes/recipe.php' ); ?>
    	
    	<?php // get_footer(); ?>
    	
    	<?php // include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    	
    <!--</body>-->

<?php // } else { ?>

    <?php // include( TEMPLATEPATH . '/page-login.php' ); ?>

<?php // } ?>