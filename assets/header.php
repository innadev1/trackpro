<!DOCTYPE>
<?php include 'assets/lang.php';?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="li-toggle.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
</head>

<body>
	<header class="flex">
	
		<div class="logo">
			<img src="img/logo/logo.png">
		</div>
		
		<div class="menu" id="menu-content">
			<ul id="my-menu" class="flex">
				<li><a><?php echo $language[$lang]['about'] ?></a></li>
				<li><a><?php echo $language[$lang]['posibillities'] ?></a></li>
				<li><a><?php echo $language[$lang]['tarif'] ?></a></li>
				<li><a><?php echo $language[$lang]['questions'] ?></a></li>
				<li class="collapsed"><a><?php echo $language[$lang]['text2'] ?><span class="label"></a></li>
					<ul class="sub s1">
						<li><a><?php echo $language[$lang]['more'] ?></a></li>
					</ul>
				<li class="collapsed"><a class="lang"><?php echo $language[$lang]['lan'] ?><span class="label"></a></li>
					<ul class="sub s2 lang_form">
						<form>
							<input type="submit" value="lv" name="lang" class="languages">
							<input type="submit" value="ru" name="lang" class="languages">
							<input type="submit" value="en" name="lang" class="languages">
						</form>
					</ul>
			</ul>
		</div>
		<script>
		$(document).ready(function() {
		  $('ul#my-menu ul').each(function(index) {
			$(this).prev().addClass('collapsible').click(function() {
			  if ($(this).next().css('display') == 'none') {
				$(this).next().slideDown(200, function () {
				  $(this).prev().removeClass('collapsed').addClass('expanded');
				});
			  }else {
				$(this).next().slideUp(200, function () {
				  $(this).prev().removeClass('expanded').addClass('collapsed');
				  $(this).find('ul').each(function() {
					$(this).hide().prev().removeClass('expanded').addClass('collapsed');
				  });
				});
			  }
			  return false;
			});
		  });
		});
		</script>
		<div class="main-info">
			<h1><?php echo $language[$lang]['uni'] ?></h1>
			<p><?php echo $language[$lang]['text1'] ?></p>
			<button><?php echo $language[$lang]['text2'] ?></button>
		</div>
	</header>
</body>
</html>