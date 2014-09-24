<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test layout</title>
	<style>
		html, body, div{
			margin: 0;
			padding: 0;
		}
		.outer-container{
			min-width: 960px;
			/*position: absolute;*/
			overflow-x: hidden;
			/*top: 0;
			left: 0;
			right: 0;
			bottom: 0;*/
			/*width: auto !important;*/
			/*margin: 0 auto;*/
		}
		.inner-container{
			/*position: relative;*/
			width: 960px;
			margin: 0 auto;
		}
		img{
			margin-left: -480px;
			/*position: relative;*/
		}
	</style>
</head>
<body>
	<div class="outer-container">
		<div class="inner-container">
			<!-- <div class="block"> -->
				<header style="background: url(img/header_bg.png) 0 0 no-repeat; height: 103px; width: 1920px">
					<!-- <img src="img/header_bg.png" height="103" width="1920" alt=""> -->
				</header>
				<img src="img/offer_bg.jpg" height="1127" width="1920" alt="">
			<!-- </div> -->
		</div>
	</div>
</body>
</html>