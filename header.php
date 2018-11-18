<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZW34H3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="bg-overlay--white"></div>

<header id="header">

	<div class="search--main vertical-align">
		<div class="wrapper">
		    <div class="content">
        		<div class="hamburger">
        			<span class="glyphicon glyphicon-search activateSearch toggleSearchOff" aria-hidden="true"></span>
        			<span class="glyphicon glyphicon-search hideSearch toggleSearchOn hidden" aria-hidden="true"></span>
        		</div>
        		<div class="search">
        			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        			
        			    <div class="input-group">
        			    	<input type="text" class="form-control" placeholder="Search <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" value="" name="s" id="s">
        			    	<span class="input-group-btn">
        			    		<button class="btn btn-default" type="submit" id="searchsubmit" value="Search">Search</button>
        			    	</span>
        			    </div>
        			    
        			</form>
        		</div>
		    </div>
		</div>
	</div>

    <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5">
    	<?php if ( get_theme_mod( 'themesimages_logo' ) ) : ?>
    	    <div class="logo sm-margin--top">
    	    	<a href="<?php echo site_url(); ?>">
    	    		<img src='<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
    	    	</a>
    	    </div>
    	    <div class="name text-center">
        	    <h1>
        	        <span>
        	            <?php bloginfo( 'name' ); ?>
        	        </span>
        	    </h1>
        	    <h2>
        	        <span>
        	            <?php bloginfo( 'description' ); ?>
        	        </span>
        	    </h2>
    	    </div>
    	<?php else : ?>
    	    <div class="name text-center">
    	        <h1 class="font-size--lg text-color--white text--unbold">
    	            <?php bloginfo( 'name' ); ?>
    	        </h1>
    	        <h2>
    	            <span>
    	                <?php bloginfo( 'description' ); ?>
    	            </span>
    	        </h2>
    	    </div>
    	<?php endif; ?>	
    </div>
    
    <div class="menu--main vertical-align">
    	<div class="wrapper">
    	    <div class="content">
    	    	<div class="btn-group" role="group">
    	    		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	    			Menu <span class="caret"></span>
    	    		</button>
    	    		<ul class="dropdown-menu">
    	    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'list-unstyled text-left no-padding--left' ) ); ?>
    	    			<li role="separator" class="divider"></li>
    	    			<li>
    	    			    <a href="<?php echo site_url(); ?>/wp-admin/post-new.php" class="default-padding--left">
    	    			        <span class="glyphicon glyphicon-plus xs-margin--right" aria-hidden="true"></span> 
    	    			        Add a Post
    	    			    </a>
    	    			</li>
    	    			<li>
    	    			    <a href="<?php echo site_url(); ?>/wp-admin/post-new.php?post_type=recipes" class="default-padding--left">
    	    			        <span class="glyphicon glyphicon-plus xs-margin--right" aria-hidden="true"></span> 
    	    			        Add a Recipe
    	    			    </a>
    	    			</li>
    	    			<li>
    	    			    <a href="<?php echo site_url(); ?>/wp-admin/" class="default-padding--left">
    	    			        <span class="glyphicon glyphicon-list-alt xs-margin--right" aria-hidden="true"></span> 
    	    			        Go to Dashboard
    	    			    </a>
    	    			</li>
    	    			<li role="separator" class="divider"></li>
    	    			<li>
    	    			    <a href="<?php echo wp_logout_url( home_url() ); ?>" class="default-padding--left">
    	    			        <span class="glyphicon glyphicon-log-out xs-margin--right" aria-hidden="true"></span> 
    	    			        Log Out
    	    			    </a>
    	    			</li>
    	    		</ul>
    	    	</div>
    	    </div>
    	</div>
    </div>
    
    <div class="clearfix"></div>

</header>
