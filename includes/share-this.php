<span class="share-this">
	<span class="sm-margin--horizontal">|</span> 
	<span class="hidden-xs">Share This Page:</span>
	<span class="text-nowrap">
    	<span class="xs-margin--horizontal">
        	<a href="mailto:?subject=@thePickels:%20<?php the_title(); ?>&body=I%20thought%20you%20might%20like%20this:%0d%0a%0d%0a<?php the_permalink(); ?>?<?php echo get_theme_mod( 'themessettings_password' ); ?>%0d%0a%0d%0a" data-tracking="shareThisEmail" data-label="<?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?>">
        		<span class="glyphicon glyphicon-envelope" aria-hidden="true" data-tracking="shareThisEmail" data-label="<?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?>"></span>
        	</a>
    	</span>
    	<span class="xs-margin--horizontal">
    		<a class="copyLinkButton activateShareLink" data-toggle="modal" data-target="#modalShareLink" data-tracking="shareThisLink" data-label="<?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?>" onclick="copyToClipboard('#shareURL')">
    			<span class="glyphicon glyphicon-link copyLinkButton" aria-hidden="true" data-tracking="shareThisLink" data-label="<?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?>"></span>
    		</a>
    	</span>
	</span>
	<div class="share-link lg-padding--all panelSlide--top vertical-align font--sans-serif font-size--default">
		<div class="wrapper">
			<div class="content">
				<div class="share-link--close">
					<a class="hideShareLink" role="button">
						<span class="glyphicon glyphicon-remove font-size--md" aria-hidden="true"></span>
					</a>
				</div>
				<p class="headline font-size--md default-margin--bottom">Copy and Paste this URL to Share:</p>
				<p class="no-margin--vertical font-size--md force-wrap" id="shareURL"><?php the_permalink(); ?>?<?php echo get_theme_mod( 'themessettings_password' ); ?></p>
				<div class="clearfix"></div>
                <div class="text-center lg-margin--top font-size--sm">
					<span class="alert alert-success shareCopyMessage">
						<strong>Copied to your clipboard!</strong>
					</span>
				</div>
			</div>
		</div>
	</div>
</span>

<script>
	function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
	}
	$(".activateShareLink").click(function(){
	    $(".shareCopyMessage").fadeToggle(3000);
	});
</script>
