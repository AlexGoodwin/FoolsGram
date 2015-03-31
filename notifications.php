<? include('head.php');?>

<section class="notifications wrapper">
	
	<header>
		<h2>Activity</h2>
	</header>
	
	<nav>
		<a href="#">Following</a>
		<a href="#" class="active">You</a>
	</nav>
	
	<?
		$notifs = array();
		
		$usernames = array(
			'yourmomsdick',
			'Ilikecheese36',
			'poopi',
			'heytherbanana',
			'wegotobutt',
			'coloradoslut49',
			'whhhaadam',
			'1douchbag',
			'_smellme',
			'apples_andpussy',
			'mynameiscunt33',
			'jerrybitch0',
			'ilikemypics82',
			'steve',
			'adam_croo9',
			'rileyissmart',
			'meeee881',
			'imabasicbitch',
			'foolsgram'
		);
		
		$messages = array(
			'took a photo of you.',
			'liked your photo',
			'started following you'
		);

		for($i=1;$i<=16;$i++){
			$notifs[] = array(
				'username' => $usernames[$i],
				'profile' => 'img/profiles/'.$i.'.jpg',
				'message' => $messages[rand(0,sizeof($messages)-1)],
				'time' => round($i * rand(0,20)/3) . 'm',
				'preview' => 'img/butts/butt'.$i.'.jpg'
			);
		}
		
	?>
	
	<ul class="notifs">
		<? foreach($notifs as $key => $value): ?>
		<li>
			<img src="<? echo $value['profile'];?>" class="prof">
			<span><a href="#"><? echo $value['username'];?></a> <? echo $value['message'];?> <i><? echo $value['time'];?></i></span>
			<img src="<? echo $value['preview'];?>" class="preview">
		</li>
		<? endforeach; ?>
	
</section>

<? include('footer.php');?>