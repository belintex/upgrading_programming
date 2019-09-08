<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Kelompok 3</title>
	<script src="parallaxxxx.js"></script>
	<link rel="stylesheet" type="text/css" href="styleeee.css">
</head>
<body>

	<!-- cek apakah sudah login -->
<?php
 
session_start();
if($_SESSION['status']!="login")
{
	header("location:../index.php?pesan=belum_login");
?>
	<div class="container">
		<h1 class="neon" data-text="Home Berita">Halaman Admin</h1>

		<ul id="scene">
			<li class="layer" data-depth=".1"><img src="text.png"></li>
			<li class="layer" data-depth="1"><img src="planet1.png"></li>
			<li class="layer" data-depth="-1"><img src="planet2.png"></li>
			<li class="layer" data-depth="2"><img src="astronaut.png"></li>
			<li class="layer" data-depth="0.5"><img src="rocket.png"></li>
		</ul>
	</div>
	<div class="box">
			<div>

 
				<nav>
					<ul class="menu">	
						<li><a href="#">Home</a></li>
						<li><a href="#">Berita</a>
							<ul>
								<li><a href="olahraga.php">Olahraga</a></li>
								<li><a href="seni.php">Seni</a></li>
								<li><a href="politik.php">Politik</a></li>
							</ul>
						</li>
						<li><a href="#">About</a></li>
						<li><a href="Logout.php">Logout</a></li>
					</ul>		
				</nav>
			</div>	
	</div>
	<script type='text/javascript'>
//<![CDATA[
$(document).ready(function(){ 
 var touch  = $('#resp-menu');
 var menu  = $('.menu');
 
 $(touch).on('click', function(e) {
  e.preventDefault();
  menu.slideToggle();
 });
 
 $(window).resize(function(){
  var w = $(window).width();
  if(w > 767 && menu.is(':hidden')) {
   menu.removeAttr('style');
  }
 });
 
});
//]]>
</script>
<script>
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>
</body>
</html>

<?php

}

?>