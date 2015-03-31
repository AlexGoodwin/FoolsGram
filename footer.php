<footer>
	<ul>
		<li><a href="index.php#top" class=""><img src="img/footer-home.png" alt="home"></a></li>
		<li><a href="nav.php" ><img src="img/footer-nav.png" alt="nav"></a></li>
		<li><a href="aprilFools.php"><img src="img/footer-photo.png" alt="photo"></a></li>
		<li><a href="notifications.php"><img src="img/footer-likes.png" alt="likes"></a></li>
		<li><a href="me.php"><img src="img/footer-me.png" alt="me"></a></li>
	</ul>
</footer>

<!-- typekit -->
<script src="//use.typekit.net/kzs7fwr.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- fancybox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- stay in web app -->
<script type="text/javascript" src="js/jquery.stayInWebApp.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 400);
				return false;
			}
		}
		});
	});
	
	$(function() {
	    $.stayInWebApp();
	});
	
</script>

</body>
</html>