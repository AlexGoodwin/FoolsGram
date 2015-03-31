<? include('head.php');?>

<? $photos = array();
	for($i=1;$i<=16;$i++){
		$photos[] = 'img/butts/butt'.$i.'.jpg';
	}
		?>

<section class="me wrapper">
	
	<header>
		<h2>Instafool <span class="fa fa-gear"></span></h2>
	</header>
	
	<section class="stats">
		<span class="prof">
			<img src="img/butts/butt1.jpg">
		</span>
		<ul>
			<li><span>227</span><span>posts</span></li>
			<li><span>1146</span><span>followers</span></li>
			<li><span>335</span><span>following</span></li>
			<div>
				<a href="#">Edit Your Profile</a>
			</div>
		</ul>
	</section>
	
	<div class="about">
		<h4>Instafool</h4>
		<p>April Fools Bitch<br>
			<a href="aprilFools.php">www.foolsgram.com/aprilFools</a>
		</p>
</p>
	</div>
	
	<ul class="options">
		<li><img src="img/me-option-1.png"></li>
		<li><img src="img/me-option-2.png"></li>
		<li><img src="img/me-option-3.png"></li>
		<li><img src="img/me-option-4.png"></li>
	</ul>
	
	<ul class="photos">
		
		<? foreach($photos as $key => $value): ?>
			<li><img src="<?echo $value;?>" alt=""></li>
		<? endforeach; ?>
	</ul>
	
</section>

<? include('footer.php');?>