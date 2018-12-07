<!-- Activate Comment Form -->
<script>
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$(".comment-form-comment").addClass("short");
	}
	$(".activateComments").on("click", function() {
	    $(".comments-form").addClass("active");
	    $("body").addClass("modal-open");
	    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	    	$(".comments-form").removeClass("lg-padding--all");
	    	$(".comments-form").addClass("no-padding--all");
	    } else {
	    	$("#comment").focus();
	    }
	});
	$(".hideComments").on("click", function() {
	    $(".comments-form").removeClass("active");
	    $("body").removeClass("modal-open");
	});
</script>


<!-- Activate Search Form -->
<script>
	$(".activateSearch").on("click", function() {
	    $(".search").addClass("active");
	    $(".toggleSearchOff").addClass("hidden");
	    $(".toggleSearchOn").removeClass("hidden");
	    $(".logo").addClass("opacity-none");
	    $(".menu--main").addClass("opacity-none");
	});
	$(".hideSearch").on("click", function() {
	    $(".search").removeClass("active");
	    $(".toggleSearchOff").removeClass("hidden");
	    $(".toggleSearchOn").addClass("hidden");
	    $(".logo").removeClass("opacity-none");
	    $(".menu--main").removeClass("opacity-none");
	});
</script>


<!-- Activate Menu -->
<script>
	$(".activateMenu").on("click", function() {
	    $(".menu-container").addClass("active");
	    $("body").addClass("modal-open");
	});
	$(".hideMenu").on("click", function() {
	    $(".menu-container").removeClass("active");
	    $("body").removeClass("modal-open");
	});
	$(".mainMenu").on("click", function() {
	    $(".mainMenuContainer").toggleClass("open");
	});
</script>


<!-- Activate Share Link -->
<script>
	$(".activateShareLink").on("click", function() {
	    $(".share-link").addClass("active");
	    $("body").addClass("modal-open");
	});
	$(".hideShareLink").on("click", function() {
	    $(".share-link").removeClass("active");
	    $("body").removeClass("modal-open");
	});
</script>


<!-- Weather 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/monkeecreate/jquery.simpleWeather/master/jquery.simpleWeather.min.js"></script>-->