<? include('head.php'); ?>
<a name="top"></a>
<div class="wrapper">
	
	<header>
		<div class="blueTop"></div>
		<div class="logo">
			<img src="img/whiteLogo.png">
		</div>
		
		<div class="mailbox">
			<img src="img/mailbox.png">
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
				'likes' => 3,
				'likers' => array(
					'mashmellow',
					'smellyman',
					'gorriiza',
				),
				'comments' => array(
					array(
						'author' => 'mashmellow',
						'comment' => 'I would put that whole thing in my mouth'
					),
					array(
						'author' => 'CornRowHiggins',
						'comment' => 'Who\'s in for some hot doggy style?' 
					)
				)
			),
			array(
				'username' => '2freeYellow',
				'photo' => 'belfie.JPG',
				'caption' => 'I put my but in the microwave now it looks weird. #bigbutts #room #waterbottle #big #butt #roomwithlight on #biggerbutt #idaho #youdaho #weshouldgetafish #letsallgoonacruise #picture #phone #noodles #hairdoo',
				'likes' => 99,
				'likers' => array(
					'',
					''
				),
				'comments' => array(
					array(
						'author' => 'buttwhat' ,
						'comment' => 'dat booty is putting of gamma rays!'
					),
					array(
						'author' => 'joowi',
						'comment' => 'I\'m soft.'
					)
				)
			),
			array(
				'username' => 'LexTargetGive',
				'photo' => 'bum-shorts.jpg',
				'caption' => 'Solid purchase.',
				'likes' => 0,
				'likers' => array(
					'',
					''
				),
				'comments' => array()
			),
			array(
				'username' => 'Briendon',
				'photo' => 'bananaInflatable.JPG',
				'caption' => 'I knew it would fit. #lubedup',
				'likes' => 3 , 
				'likers' => array(
					'jamama', 
					'imadick', 
					'yourdick' , 
					'wealldicks', 
					'yousmelllikedick'
				),
				'comments' => array(
					array(
						'author' => 'youweirdfriend',
						'comment' => 'Where were you last night? I could of helped you jam that thing in there. #friendjam'
					)
				)
			),
			array(
				'username' => 'Heraldensp',
				'photo' => 'nipples.JPG',
				'caption' => 'My first 5K! #letsdoitagain #i #knew #i #could #do #it#nipples',
				'likes' => 12, 
				'likers' => array(
					'ilovenipples', 
					'nycrunners', 
					'iruntitby'
				),
				'comments' => array(
					array(
						'author' => 'boomsquad111',
						'comment' => 'I ran that same race and bleed out my vagina'
					)
				)
			),
			array(
				'username' => 'Nearlyzeno',
				'photo' => 'ginger.JPG',
				'caption' => 'I like Ginger farts. #carrotfarts',
				'likes' => 13, 
				'likers' => array(
					'',
					''
				),
				'comments' => array()
			),
			array(
				'username' => 'Fortuness',
				'photo' => 'dressButt.JPG',
				'caption' => 'I LOVE MY OWN ASS',
				'likes' => 52, 
				'likers' => array(
					'',
					''
				),
				'comments' => array()
			),
			array(
				'username' => 'MoPopAmerica',
				'photo' => 'dogMakeOut.JPG',
				'caption' => '#Ifuckyourdog',
				'likes' => 3, 
				'likers' => array(
					'Ifuckmyowndog', 
					'ifuckyourdog', 
					'whosdogdidijustfuck'
				),
				'comments' => array()
			),
			array(
				'username' => 'MrZenaRappa',
				'photo' => 'pipe.JPG',
				'caption' => 'Just bought this awesome new pipe! #awesome #new #pipe #awesomenewpipe',
				'likes' => 16, 
				'likers' => array(
					'',
					''
				),
				'comments' => array()
			),
			array(
				'username' => 'GurlZapRae',
				'photo' => 'puke.JPG',
				'caption' => 'I puked my friend.. weird shit happened next.',
				'likes' => 22, 
				'likers' => array(
					'',
					''
				),
				'comments' => array()
			),
			array(
				'username' => 'dildo12',
				'photo' => 'dildo1.jpg',
				'caption' => 'now for sale! real plastic dicks! Check the link in my bio.',
				'likes' => 3, 
				'likers' => array(
					'jerrydildo',
					'smeeeruuf363',
					'cakedup'
				),
				'comments' => array()
			),
			array(
				'username' => 'smellslikepoop',
				'photo' => 'dildo2.JPG',
				'caption' => 'just working on my dildo shrine #johnnydepp',
				'likes' => 29, 
				'likers' => array(
					'',
					''
				),
				'comments' => array(
					array(
						'author' => 'tooogle22',
						'comment' => 'damn that dildo shrine is strait FIRE!'
					),
					array(
						'author' => 'alaskababe44',
						'comment' => 'I\'m hard.'
					)
				)
			)
		);
		
		for($i=0;$i<count($posts);$i++): ?>
			<section class="timelineItem">
				
				<!-- header -->
				<div class="timelineSidebar">
					<div class="profilePic">
						<img src="img/profiles/<? echo $i+1;?>.jpg">
					</div>
					<a href="#" class="username"><? echo($posts[$i]['username']); ?></a>
					<span class="timestamp"><img src="img/clock.png"><? echo(rand(0,60));?>m</span>
				</div>
				
				<!-- photo & comments -->
				<div class="timelineCenter">
					<div class="card">
						<!-- photo -->
						<!-- NOTE butts have replaced old images -->
						<img src="<? echo 'img/bigButts/butt'.($i+1).'.jpg';?>">
						
						<!-- likes -->
						<div class="likes">
							<div><img src="img/heart.png" alt=""></div>
							<div><a href="#"><? echo $posts[$i]['likes']; ?> likes</a></div>
						</div>
						
						<!-- caption -->
						<div class="caption">
							<div><img src="img/chat.png" alt=""></div>
							<div>
								<p><a href="#"><? echo($posts[$i]['username']); ?></a> <?// echo $posts[$i]['caption'];?></p>
							</div>
						</div>
						
						<!-- comments -->
						<!-- <? foreach($posts[$i]['comments'] as $key => $value): ?>
							<div class="comment">
								<a href="#" class="commentAuthor"><? echo $value['author'];?></a>
								<span class="commentText"><? echo $value['comment'];?></span>
							</div>
						<? endforeach; ?> -->
						
						<!-- options -->
						<div class="options">
							<a href="#"><img src="img/heart.png" alt=""> Like</a>
							<a href="#"><img src="img/chat.png" alt=""> Comment</a>
							<a href="#" class="pull-right"><img src="img/more.png" alt=""></a>
						</div>
						
					</div> <!-- /card -->
				</div><!-- /timelineCenter -->
			</section> <!-- /timelineItem -->
		<? endfor; ?>
		
	</div> <!-- /timelineContainer -->
</div> <!-- /wrapper -->

<? include('footer.php'); ?>