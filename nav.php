<? include('head.php');?>

<section class="nav wrapper">
	
	<header>
		<form>
			<input type="text" placeholder="&#xF002;  Search">
		</form>
	</header>
	
	<nav>
		<a href="#" class="active">Photos</a>
		<a href="#">People</a>
	</nav>
	
	<ul>
		<? $photos = array();
			
			for($i=1;$i<=33;$i++){
				$photos[] = 'img/discover/'.$i.'.jpg';
			}
		?>
		<? foreach($photos as $key => $value): ?>
			<li><img src="<?echo $value;?>" alt=""></li>
		<? endforeach; ?>
	</ul>
	
</section>

<? include('footer.php');?>