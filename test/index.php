<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Store Name | Text</title>

    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicons/96x96.png">

	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<script src="https://embed.selly.gg"></script>
</head>
<body bgcolor="fff">
	<div class="main">
		<center>
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Twitter</a></li>
			</ul>
			<h1>Store Name / Logo</h1>
			<!-- <a href="/"><img src="logo.png"></a> -->
		</center>
		<center>
			<!-- product one -->
			<div class="one">
			<div class="accounts">
			<div class="header">
				<h2 style="font-size: 17.5px">Unmigrated Minecraft - $6</h2>
			</div>
			<div class="content">
				<img src="assets/images/mc1.png" alt="minecraft" style="width: 30%">
				<p>Description Description Description Description Description</p>
			</div>
			<div class="footer">
				<a data-selly-product="b9ca72b3" style="font-size:"100px">Buy Now</a>
			</div>
		</div>
	</div>
			<!-- product two -->
			<div class="two">
			<div class="accounts">
			<div class="header">
				<h2 style="font-size: 17.5px">Unmigrated Minecraft - $6</h2>
			</div>
			<div class="content">
				<img src="assets/images/mc1.png" alt="minecraft" style="width: 30%">
				<p>Description Description Description Description Description</p>
			</div>
			<div class="footer">
				<a data-selly-product="b9ca72b3" style="font-size:"100px">Buy Now</a>
			</div>
		</div>
		</div>
			<!-- product three -->
			<div class="three">
			<div class="accounts">
			<div class="header">
				<h2 style="font-size: 17.5px">Unmigrated Minecraft - $6</h2>
			</div>
			<div class="content">
				<img src="assets/images/mc1.png" alt="minecraft" style="width: 30%">
				<p>Description Description Description Description Description</p>
			</div>
			<div class="footer">
				<a data-selly-product="b9ca72b3" style="font-size:"100px">Buy Now</a>
			</div>
		</div>
	</div>
		</center>
	<script>
		document.querySelector('.pricing p').style.display="none";
		document.querySelector('.pricing a').style.display="none";
		document.querySelector('.pricing img').style.display="none";
		document.querySelector('.pricing h2').style.display="none";
		document.querySelector('.main p').style.display = "none";
		document.querySelector('.main h1').style.display = "none";
		document.querySelector('.main').classList.add('spinner-2');	

		setTimeout(() => {
			document.querySelector(".main").classList.remove("spinner-2");
	  		document.querySelector(".main p").style.display = "block";
	  		document.querySelector(".main h1").style.display = "block";
	  		document.querySelector('.pricing h2').style.display="block";
	  		document.querySelector('.pricing img').style.display="block";
	  		document.querySelector('.pricing a').style.display="block";
	  		document.querySelector('.pricing p').style.display="block";
		}, 2000);
	</script>
</body>
</html>