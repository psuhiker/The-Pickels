<body class="splash vertical-align">
    <div class="wrapper">
    	<div class="content text-center">
    		<div class="box xl-padding--vertical col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
    			<div class="logo lg-padding--bottom col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
    			    <?php if ( get_theme_mod( 'themesimages_logo' ) ) : ?>
    			        <img src='<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
    			    <?php else : ?>
    			        <h1><?php bloginfo( 'name' ); ?></h1>
    			    <?php endif; ?>
    			</div>
    			<div class="clearfix"></div>
    			<?php if ( get_theme_mod( 'themessettings_welcometext' ) ) : ?>
    			    <p><?php echo get_theme_mod( 'themessettings_welcometext' ); ?></p>
    			<?php else : ?>
    			    <p>This website is password protected.<br> Please enter your username and password below.</p>
    			<?php endif; ?>
    			<form action="<?php echo site_url(); ?>/wp-login.php" method="post">
    				<div class="col-md-6 col-md-offset-3">
        				<p><input type="text" name="log" id="log" tabindex="1" value="" size="20" placeholder="username" class="form-control" /></p>
        				<p><input type="password" name="pwd" tabindex="110" id="pwd" size="20" placeholder="password" class="form-control" /></p>
        				<p class="text-left">
        				    <label class="text-nowrap text--unbold font-size--sm">
        				        <input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me
        				    </label>
        				</p>
        				<div class="col-sm-12 no-padding--horizontal text-right">
        					<input id="submit" type="submit" name="submit" tabindex="120" value="Login" class="btn btn-default lg-padding--horizontal" />
        					<?php $actual_link = $_SERVER['REQUEST_URI']; $URI=' . echo site_url() . '.$Path; ?>
        					<input type="hidden" name="redirect_to" value="<?php echo $actual_link; ?>" />
        				</div>
        				<div class="col-sm-12 no-padding--horizontal lg-padding--top font-size--sm text-left">
        					<a href="/wp-login.php?action=lostpassword">Lost your password?</a>
        				</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
</body>