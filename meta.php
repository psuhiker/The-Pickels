<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --><head id="<?php echo get_option('home'); ?>" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Meta Data -->
	<?php if ( is_home() ) { ?>
		<!-- Home Page -->
	    <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { bloginfo('name'); } ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { bloginfo('description'); } ?>">
	    <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
	<?php } else if ( is_archive() ) { ?>
		<!-- Blog Archive Page -->
	    <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { bloginfo('name'); } ?> | <?php single_cat_title() ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { bloginfo('description'); } ?>">
	    <meta name="keywords" content="<?php single_cat_title() ?>, <?php bloginfo('name'); ?>">
	<?php } else if ( is_single() ) { ?>
		<!-- Blog Posts -->
	    <title><?php if(get_field('seo_title_tag')) { echo get_field('seo_title_tag'); } else { the_title(); } ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { setup_postdata( $post ); $excerpt = get_the_excerpt(); 
	    // echo get_the_excerpt(); 
	    } ?>">
	    <meta name="keywords" content="<?php if(get_field('seo_keywords')) { echo get_field('seo_keywords'); } else { $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ', '; } }; } ?>">
	<?php } else { ?>
		<!-- All Other Items -- Uses SEO Content in CMS -->
	    <title><?php if(get_field('seo_title_tag' )) { echo get_field('seo_title_tag' ); } else { bloginfo('name'); } ?></title>
	    <meta name="description" content="<?php if(get_field('seo_description')) { echo get_field('seo_description'); } else { bloginfo('description'); } ?>">
	    <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
	<?php } ?>
    
    <!-- iPhone & iPad Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Main Style Sheets -->
    <link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    	
    <!-- Framework JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
    
    <!-- Facebook -->
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
    
    <!-- Custom Theme Styles -->
    <?php
        $background_one = get_theme_mod('themesimages_backgroundone');
            $background_one_opacity = get_theme_mod('themesimages_backgroundoneopacity');
            $background_one_size = get_theme_mod('themesimages_backgroundonesize');
        $background_two = get_theme_mod('themesimages_backgroundtwo');
            $background_two_opacity = get_theme_mod('themesimages_backgroundtwoopacity');
            $background_two_size = get_theme_mod('themesimages_backgroundtwosize');
        $background_wallpaper = get_theme_mod('themesimages_wallpaperbg');
        $background_pattern = get_theme_mod('themesimages_backgroundpattern');
        $primary_color = get_theme_mod('themescolors_primary');
            $primary_font_color = get_theme_mod('themescolors_primaryfont');
        $secondary_color = get_theme_mod('themescolors_secondary');
            $secondary_font_color = get_theme_mod('themescolors_secondaryfont');
        $tertiary_color = get_theme_mod('themescolors_tertiary');
            $tertiary_font_color = get_theme_mod('themescolors_tertiaryfont');
    ?>
    
    <style><!--
    	a {
    		color: <?php echo $primary_color; ?>;
    	}
    		a:hover {
    			color: <?php echo $secondary_color; ?>;
    		}
    	.alert-box {
    		background-color: <?php echo $tertiary_color; ?> !important;
    		color: <?php echo $tertiary_font_color; ?>;
    	}
		body {
    		background-color: <?php echo $tertiary_color; ?>;
    	}
        .button--flip, 
        .btn-default,
        .btn-default:hover,
        .btn-default:active,
        .btn-default:focus,
        .btn-default:active:hover,
        .btn-default:active:focus,
        .button--flip:focus,
        .button--flip span.flip, 
        .button--flip:hover span.flip {
        	background-color: <?php echo $secondary_color; ?>;
        	color: <?php echo $secondary_font_color; ?>;
        }
            .button--inverse {
            	border: 1px solid <?php echo $secondary_color; ?> !important;
            }
                .button--inverse:hover {
                    background-color: <?php echo $secondary_font_color; ?>;
                	border-color: <?php echo $secondary_color; ?> !important;
                	color: <?php echo $secondary_color; ?>;
                }
        .byline {
        	border-color: <?php echo $tertiary_color; ?>;
        }
            .byline.affix {
            	background-color: <?php echo $tertiary_color; ?>;
            }
            .no-border .byline.affix {
            	border-color: <?php echo $tertiary_color; ?>;
            }
        .christmas .items .item .claim .claimed.yes {
        	color: <?php echo $primary_color; ?> !important;
        }
            .christmas .items .item .claim a:hover .claimed.yes {
            	color: <?php echo $secondary_color; ?> !important;
            }
        .panelSlide--top,
        .panelSlide--right,
        .panelSlide--bottom,
        .panelSlide--left {
            background-color: <?php echo $tertiary_color; ?>;
        }
        #footer {
        	background-color: <?php echo $primary_color; ?>;
        	color: <?php echo $primary_font_color; ?>;
        	background-image: url(<?php echo $background_pattern; ?>);
        }
        h1, h2, h3, h4, h5, h6 {
        	color: <?php echo $primary_color; ?>;
        }
		#header {
	    	background-color: <?php echo $primary_color; ?>;
	    	color: <?php echo $primary_font_color; ?>;
	    	background-image: url(<?php echo $background_pattern; ?>);
	    }
    		#header .search--main .hamburger, 
    		#header .navigation--main .hamburger {
    			 color: <?php echo $tertiary_color; ?>;
    		}
    		#header .menu--main .menu-container.active {
    			background-color: <?php echo $tertiary_color; ?>;
    		}
    		#header .dropdown-menu {
    			background-color: <?php echo $primary_color; ?>;
    			color: <?php echo $primary_font_color; ?>;
    		}
        .headline--underline {
    	    border-color: <?php echo $tertiary_color; ?>;
    	}
    	.hideComments {
    		color: <?php echo $tertiary_font_color; ?>;
    	}
    	    .hideComments:hover {
    	    	color: <?php echo $tertiary_font_color; ?>;
    	    	opacity: 0.5;
    	    }
    	hr {
    		border-color: <?php echo $tertiary_color; ?>;
    	}
    	.marquee--post .marquee--text .content > div {
    		background-color: <?php echo $tertiary_color; ?>;
    		color: <?php echo $tertiary_font_color; ?>;
    	}
        	.marquee--post .background--pattern {
        		background-image: url(<?php echo $background_one; ?>);
        		background-size: <?php echo $background_one_size ?>;
        	}
        	    .marquee--post .background--pattern .overlay {
        	    	background-color: <?php echo $secondary_color; ?>;
        	    	opacity: <?php echo $background_one_opacity ?>;
        	    }
        .modal-header {
	    	background-color: <?php echo $primary_color; ?>;
	    	color: <?php echo $primary_font_color; ?>;
	    }
        	.modal-header .modal-title {
        		color: <?php echo $primary_font_color; ?>;
        	}
        .shareCopyMessage {
        	background-color: <?php echo $secondary_color; ?>;
        	color: <?php echo $secondary_font_color; ?>;
        }
        .share-this ul li.icon a {
    		background-color: <?php echo $secondary_color; ?>;
    		color: <?php echo $secondary_font_color; ?>;
    	}
		.splash .wrapper {
            background-image: url(<?php echo $background_wallpaper; ?>);
        }
	        .splash .box {
	        	background-color: <?php echo $tertiary_color; ?>;
	        }
	    .stripes {
	    	background: repeating-linear-gradient(45deg, transparent, transparent 4px, <?php echo $tertiary_color; ?> 4px, <?php echo $tertiary_color; ?> 8px) !important;
	    	border-bottom-color: <?php echo $tertiary_color; ?> !important;
	    }
		.timeline .item .content {
            background-color: <?php echo $tertiary_color; ?>;
        }
    --></style>
        
	<?php wp_head(); ?>
	
	<!-- WP Admin Bar Relocated to Bottom -->
	<style><!-- 
		html {
			margin-top:  0px !important;
		}
		.recaptcha-wrap label {
		    display: none !important;
		}
	--></style>
	
</head>