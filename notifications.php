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
		
		for($i=1;$i<=16;$i++){
			$notifs[] = array(
				'username' => 'thecolt',
				'profile' => 'img/profiles/'.$i.'.jpg',
				'message' => 'took a photo of you.',
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