<footer>
	<ul>
		<li><a href="index.php#top" class=""><img src="img/footer-home.png" alt="home"></a></li>
		<li><a href="nav.php" ><img src="img/footer-nav.png" alt="nav"></a></li>
		<li><a href="aprilFools.php"><img src="img/footer-photo.png" alt="photo"></a></li>
		<li><a href="notifications.php"><img src="img/footer-likes.png" alt="likes"></a></li>
		<li><a href="me.php"><img src="img/footer-me.png" alt="me"></a></li>
	</ul>
</footer>

<!-- Google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-53204481-3', 'auto');
  ga('send', 'pageview');
</script>

<!-- typekit -->
<script src="//use.typekit.net/kzs7fwr.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- fancybox -->
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

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