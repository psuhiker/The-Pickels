<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/queryString.js"></script>
</head>

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<?php if ( is_user_logged_in() ) { ?>

	<style>
		.wish-list .item {
			margin-bottom: 10px;
		}
		.wish-list .item:nth-child(odd) {
			clear: both;
		}
		.wish-list .nf-form-fields-required {
			display: none;
		}
		.wish-list input[type=text], .wish-list textarea {
			border: none;
			font-family: 'Waiting for the Sunrise', cursive;
			background: transparent;
		    -webkit-appearance: none;
		    border-bottom: 1px solid rgba(0,0,0, 0.15);
		    resize: none;
		    margin-top: 0;
		    border-radius: 0;
		    background-color: transparent;
		    -webkit-box-shadow: none;
			-moz-box-shadow: none;
			-ms-box-shadow: none;
			box-shadow: none;
		}
		.wish-list textarea {
			height: 100px !important;
		}
		.wish-list input.ninja-forms-field.btn.btn-default.nf-element:focus,
		.wish-list input.ninja-forms-field.btn.btn-default.nf-element:active {
			background-color: #000 !important;
		}
		.wish-list .nf-field-container, .wish-list .textbox-container {
			clear: none !important;
		}
		.wish-list input#nf-field-4 {
		    background-color: red !important;
		}
		.wish-list .items .item .claim .claimed {
			margin-top: 0px !important;
		}
		#user6 #recipient44 .claim,
		#user7 #recipient44 .claim,
		#user5 #recipient13 .claim,
		#user5 #recipient47 .claim,
		#user12 #recipient13 .claim,
		#user12 #recipient47 .claim,
		#user8 #recipient46 .claim,
		#user8 #recipient45 .claim,
		#user2 #recipient46 .claim,
		#user2 #recipient45 .claim {
			display: none;
		}
		#user6 #recipient44 .yes,
		#user7 #recipient44 .yes,
		#user5 #recipient13 .yes,
		#user5 #recipient47 .yes,
		#user12 #recipient13 .yes,
		#user12 #recipient47 .yes,
		#user8 #recipient46 .yes,
		#user8 #recipient45 .yes,
		#user2 #recipient46 .yes,
		#user2 #recipient45 .yes {
			color: #000;
		}
		.parent {
			display: none;
		}
		.parent a {
			color: #fff !important;
		}
		#user6 #recipient44 .parent,
		#user7 #recipient44 .parent,
		#user5 #recipient13 .parent,
		#user5 #recipient47 .parent,
		#user12 #recipient13 .parent,
		#user12 #recipient47 .parent,
		#user8 #recipient46 .parent,
		#user8 #recipient45 .parent,
		#user2 #recipient46 .parent,
		#user2 #recipient45 .parent {
			display: block;
		}
	</style>

    <body class="secondary wish-list">
    
    	<?php include (TEMPLATEPATH . '/header.php' ); ?>
    	
    	<?php include (TEMPLATEPATH . '/includes/wish-list.php' ); ?>
    	
    	<!-- Add Form -->
    	<div class="wish-list-form lg-padding--all panelSlide--bottom _active">
    		<div class="col-xs-12">
        		<div class="float--right lg-margin--top">
        			<a class="hideWishListForm" role="button">
        				<span class="glyphicon glyphicon-remove font-size--md" aria-hidden="true"></span>
        			</a>
        		</div>
				<h3 class="headline--shadow text-center xl-margin--top lg-padding--top">What do you want to add?</h3>
				<div class="col-sm-8 col-sm-offset-2">
					<?php ninja_forms_display_form(1); ?>
				</div>
			</div>
		</div>
	
		<!-- Sticky for Byline -->
    	<script>
    		$(document).ready(function() {
    			var stickySidebar = $('.byline').offset().top;
    			$(window).scroll(function() {  
    				if ($(window).scrollTop() > stickySidebar) {
    					$('.byline').addClass('affix');
    				}
    				else {
    					$('.byline').removeClass('affix');
    				}  
    			});
    		});
    	</script>

		<script>
			$(".activateWishListForm").on("click", function() {
    			$(".wish-list-form").addClass("active");
    			$("body").addClass("modal-open");
	    	});
	    	$(".hideWishListForm").on("click", function() {
	    		$(".wish-list-form").removeClass("active");
	    		$("body").removeClass("modal-open");
	    	});
	    	$(".hideWishListMessage").on("click", function() {
	    		$(".wishListMessage").removeClass("active");
	    		$("body").removeClass("modal-open");
	    	});
	    	$(".hideMessageAlert").on("click", function() {
	    	    $("#messageAlert").removeClass("active");
	    	    $("body").removeClass("modal-open");
	    	});
	    </script>
    	
    	<?php get_footer(); ?>
    	
    	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>
    
    </body>
    
<?php } else { ?>

    <?php include( TEMPLATEPATH . '/page-login.php' ); ?>

<?php } ?>