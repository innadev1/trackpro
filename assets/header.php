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
	<header id="logo">
	
		<div class="logo">
			<a href="index.php"><img src="img/logo/logo.png"></a>
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
		
		
		
		
	<div id="menu-mob"><img src="img/menu.png"></div>
	<ul id="my-menu-mob">
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
	<script>
	$(document).ready(function() {
	  if ($('body').width() <= 900) {
	  $('ul#my-menu-mob ul').each(function(index) {
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
	  }
	});
	</script>
	<script>
	$(document).ready(function(){
	if ($('body').width() <= 900) {		
		var button = document.getElementById('menu-mob');
		var actions = {
			1: function() {
				$( "#my-menu-mob" ).slideToggle( "slow", function() {
				});
			},
			2: function() {
				$( "#my-menu-mob" ).slideToggle( "slow", function() {
				});
			}
		};
		var counter = 0;
		button.onclick = function() {
			actions[counter = (counter % 2) + 1]();
		}
	}
	});
	</script>

	</header>
</body>
</html>