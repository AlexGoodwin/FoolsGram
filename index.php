<? include('head.php'); ?>
<a name="top"></a>
<div class="wrapper">
	<header>
		<a href="#" class="home">
			<i></i>
		</a>
		<div class="logo">
		</div>
		
		<div class="profile">
			<img src="img/wuddupdokProf.jpg">
		</div>
	</header>
	
	<!-- timeline -->
	<div class="timelineContainer">
		
		<?
		$images = array(
			'bananaGirl.JPG',			
			'',
			'feet.JPG',
		);
		
		
		$posts = array(
			array(
				'username' => 'ClawDays',
				'photo' => 'hotDogStand.JPG',
				'caption' => 'Larry\'s dogs always has the best meat.',
				'likes' => 33,
				'comments' => array(
					array(
						'author' => 'Commenter',
						'comment' => 'testing testing testing'
					),
					array(
						'author' => 'CornRowHiggins',
						'comment' => 'something incredible'
					)
				)
			),
			array(
				'username' => '2freeYellow',
				'photo' => 'belfie.JPG',
				'caption' => 'Photo comments goes here.',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'LexTargetGive',
				'photo' => 'bum-shorts.jpg',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'Briendon',
				'photo' => 'bananaInflatable.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'Heraldensp',
				'photo' => 'nipples.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'Nearlyzeno',
				'photo' => 'ginger.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'Fortuness',
				'photo' => 'dressButt.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'MoPopAmerica',
				'photo' => 'dogMakeOut.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'MrZenaRappa',
				'photo' => 'pipe.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			),
			array(
				'username' => 'GurlZapRae',
				'photo' => 'puke.JPG',
				'caption' => '',
				'likes' => 0, 
				'comments' => array()
			)
		);
		
		for($i=0;$i<count($posts);$i++): ?>
			<section class="timelineItem">
				<div class="timelineSidebar">
					<div class="profilePic">
						<img src="img/wuddupdokProf.jpg">
					</div>
					<a href="#" class="username"><? echo($posts[$i]['username']); ?></a>
					<span class="timestamp"><? echo(rand(0,60));?>m</span>
				</div> <!-- /timelineSidebar -->
				<div class="timelineCenter">
					<div class="card">
						<img src="img/<? echo $posts[$i]['photo'];?>"> <!-- photo -->
						<div class="likesBar">
							<a href="#" class="like"> <!-- like button -->
							<a href="#" class="more"> <!-- more button -->
							<div class="likeList">
								<a href="#">TannDobbins</a>, <a href="#">TimPhry</a>, <a href="#">2freeYellow</a>...
							</div>
						</div> <!-- /likesBar -->
						<div class="commentArea">
							<div class="caption">
								<a class="username" href="#" ><? echo($posts[$i]['username']); ?></a>
								<span class="captionText" >
									<? echo $posts[$i]['caption'];?>
								</span>
							</div>
							<div class="comments">
								<? foreach($posts[$i]['comments'] as $key => $value): ?>
									<div class="comment">
										<a href="#" class="commentAuthor"><? echo $value['author'];?></a>
										<span class="commentText"><? echo $value['comment'];?></span>
									</div>
								<? endforeach; ?>
							</div> <!-- /comments -->
							
							<form class="composer">
								<input type="text" placeholder="Write a comment...">
							</form> <!-- /composer -->
						</div> <!-- /commentArea -->
					</div>
				</div><!-- /timelineCenter -->
			</section> <!-- /timelineItem -->
		<? endfor; ?>
		
	</div> <!-- /timelineContainer -->
</div> <!-- /wrapper -->

<footer>
	<ul>
		<li><a href="#top" class=""><img src="img/footer-home.png" alt="home"></a></li>
		<li><a href="#" class="fancybox"><img src="img/footer-nav.png" alt="nav"></a></li>
		<li><a href="#" class="fancybox"><img src="img/footer-photo.png" alt="photo"></a></li>
		<li><a href="#" class="fancybox"><img src="img/footer-likes.png" alt="likes"></a></li>
		<li><a href="#" class="fancybox"><img src="img/footer-me.png" alt="me"></a></li>
	</ul>
</footer>

<? include('footer.php'); ?>