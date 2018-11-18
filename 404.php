<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

<?php if ( is_user_logged_in() ) { ?>

    <body class="secondary error">
    
    	<?php include (TEMPLATEPATH . '/header.php' ); ?>
    	
    	<div class="container text-center vertical-align">
    	
    	    <div class="wrapper">
    	        <div class="content">
    	    
    	            <div class="col-md-8 col-md-offset-2">
    	            	
    	                <h1>Whoops... this page cannot be found</h1>
    	                	    
    	            </div>
    	            	    
    	        </div>
    	    </div>
    	    <!-- Test -->    	    
    	
    	</div>
    	
    	<?php get_footer(); ?>
    	
    	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    </body>
    
<?php } else { ?>

    <?php include( TEMPLATEPATH . '/page-login.php' ); ?>

<?php } ?>