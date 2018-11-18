<?php /* 
Template Name: Processing Page
*/ ?>

<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/queryString.js"></script>
</head>

<?php 
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
	$postURL = get_post_type_archive_link( 'wish-list' );
	$current_user = wp_get_current_user();
	$itemID = $_GET['id'];
    $title = $_GET['item'];
?>

<body class="secondary recipe">
	
	<!-- Processing -->
    
    <?php if (false !== strpos($url,'?claimProcessing' )) { ?>
    
    	<div class="panelSlide--bottom active vertical-align">
    		<div class="wrapper">
    			<div class="content text-center">
    
    				<p>Updating</p>
    				<p><img src="<?php bloginfo('template_directory'); ?>/images/loading-black.gif" width="100"></p>
    
    			</div>
    		</div>
    	</div>
        
        <?php 
            //$pageURL =  $_GET['pageurl'];
            update_metadata ( 'post', $itemID, 'christmas_claimed_gift', 'claimed (' . $current_user->display_name . ')');
        ?>
        
        <meta http-equiv="refresh" content="0;URL='<?php echo $postURL; ?>?message=claimed&item=<?php echo $title; ?>&itemID=<?php echo $itemID; ?>'" />
    
    <?php } ?>
    
    <?php if (false !== strpos($url,'?unclaimProcessing' )) { ?>
    
    	<div class="panelSlide--bottom active vertical-align">
    		<div class="wrapper">
    			<div class="content text-center">
    
    				<p>Updating</p>
    				<p><img src="<?php bloginfo('template_directory'); ?>/images/loading-black.gif" width="100"></p>
    
    			</div>
    		</div>
    	</div>
        
        <?php 
            //$pageURL =  $_GET['pageurl'];
            update_metadata ( 'post', $itemID, 'christmas_claimed_gift', '');
        ?>
        
        <meta http-equiv="refresh" content="0;URL='<?php echo $postURL; ?>?message=unclaimed&item=<?php echo $title; ?>'" />
    
    <?php } ?>
    
    <?php if (false !== strpos($url,'?removeProcessing' )) { ?>
    
    	<div class="panelSlide--bottom active vertical-align">
			<div class="wrapper">
				<div class="content text-center">
	
					<p>Updating</p>
					<p><img src="<?php bloginfo('template_directory'); ?>/images/loading-black.gif" width="100"></p>
	
				</div>
			</div>
		</div>
        
        <?php 
            //$pageURL =  $_GET['pageurl'];
            update_metadata ( 'post', $itemID, 'christmas_claimed_removed', 'removed');
        ?>
        
        <meta http-equiv="refresh" content="0;URL='<?php echo $postURL; ?>?message=removed&item=<?php echo $title; ?>&itemID=<?php echo $itemID; ?>'" />
    
    <?php } ?>
    
    <?php if (false !== strpos($url,'?unremoveProcessing' )) { ?>
    
    	<div class="panelSlide--bottom active vertical-align">
			<div class="wrapper">
				<div class="content text-center">
	
					<p>Updating</p>
					<p><img src="<?php bloginfo('template_directory'); ?>/images/loading-black.gif" width="100"></p>
	
				</div>
			</div>
		</div>
        
        <?php 
            //$pageURL =  $_GET['pageurl'];
            update_metadata ( 'post', $itemID, 'christmas_claimed_removed', '');
        ?>
        
        <meta http-equiv="refresh" content="0;URL='<?php echo $postURL; ?>?message=confirmed&item=<?php echo $title; ?>'" />
    
    <?php } ?>
    
</body>
    
    