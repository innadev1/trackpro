<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
		<div class="header">
			<div class="main-info">
				<h1><?php echo $language[$lang]['uni'] ?></h1>
				<p><?php echo $language[$lang]['text1'] ?></p>
				<button><?php echo $language[$lang]['text2'] ?></button>
			</div>
		</div>
		
		<div class="main flex">
			
			<div class="col-1">
				<h1><?php echo $language[$lang]['text3'] ?></h1>
				<h2><?php echo $language[$lang]['text4'] ?></h2>

				<div class="flex functions">
					<div class="block bl1">
						<img src="img/icons/6.png">
						<h3><?php echo $language[$lang]['text5'] ?></h3>
					</div>
					<div class="block bl2">
						<a href="motorcycle.php">
							<img src="img/icons/5.png">
							<h3><?php echo $language[$lang]['text6'] ?></h3>
						</a>
					</div>
					<div class="block bl3">
						<a href="cars.php">
							<img src="img/icons/1.png">
							<h3><?php echo $language[$lang]['text7'] ?></h3>
						</a>
					</div>
					<div class="block bl4">
						<a href="freight.php">
							<img src="img/icons/4.png">
							<h3><?php echo $language[$lang]['text8'] ?></h3>
						</a>
					</div>
					<div class="block bl5">
						<img src="img/icons/7.png">
						<h3><?php echo $language[$lang]['text9'] ?></h3>
					</div>
					<div class="block bl6">
						<img src="img/icons/3.png">
						<h3><?php echo $language[$lang]['text10'] ?></h3>
					</div>
					<div class="block bl7">
						<a href="building.php">
							<img src="img/icons/20.png">
							<h3><?php echo $language[$lang]['text11'] ?></h3>
						</a>
					</div>
					<div class="block bl8">
						<img src="img/icons/2.png">
						<h3><?php echo $language[$lang]['text12'] ?></h3>
					</div>
					<div class="block bl8">
						<img src="img/icons/personals.png">
						<h3><?php echo $language[$lang]['text40'] ?></h3>
					</div>
				</div>
				
				<div class="button"><button><?php echo $language[$lang]['text13'] ?></button></div>
			</div>
			
			<div class="col col-2">
			
				<div class="in-2">
					<h1><?php echo $language[$lang]['text14'] ?></h1>
					<h2><?php echo $language[$lang]['text15'] ?></h2>

					<div class="click flex">
						<div id="left"><img src="img/icons/left.png"></div>
						<div id="right"><img src="img/icons/right.png"></div>
					</div>
					<script>
					var productnow = 0
					$(document).ready(function(){
						
						count = $('#click .next-div').length
						
						$("#left").click(function () {
							if(productnow>0){
							productnow-=1
							}else{productnow=count-1}
							$('#click .next-div').css('display','none')
							$('#click .next-div:eq('+productnow+')').fadeIn(200)
							console.log($('#click .next-div:eq('+productnow+')'))
							
						});
						
						$("#right").click(function () {
						if(productnow<count-1){
							productnow+=1
							}else{productnow=0}
							$('#click .next-div').css('display','none')
							$('#click .next-div:eq('+productnow+')').fadeIn(200)
							console.log($('#click .next-div:eq('+productnow+')'))
						
						});
					});
					</script>

					<div id="click">
						<div class="next-div n1">
							<h5><?php echo $language[$lang]['text16'] ?></h5>
							<div class="flex side">
								<img src="img/icons/8.png">
								<p><?php echo $language[$lang]['text17'] ?></p>
							</div>
						</div>
						<div class="next-div n2">
							<h5><?php echo $language[$lang]['text16-1'] ?></h5>
							<div class="flex side">
								<img src="img/icons/22.png">
								<p><?php echo $language[$lang]['text17-1'] ?></p>
							</div>
						</div>
						<div class="next-div n3">
							<h5><?php echo $language[$lang]['text16-2'] ?></h5>
							<div class="flex side">
								<img src="img/icons/23.png">
								<p><?php echo $language[$lang]['text17-2'] ?></p>
							</div>
						</div>
						<div class="next-div n4">
							<h5><?php echo $language[$lang]['text16-3'] ?></h5>
							<div class="flex side">
								<img src="img/icons/24.png">
								<p><?php echo $language[$lang]['text17-3'] ?></p>
							</div>
						</div>
						<div class="next-div n5">
							<h5><?php echo $language[$lang]['text16-4'] ?></h5>
							<div class="flex side">
								<img src="img/icons/25.png">
								<p><?php echo $language[$lang]['text17-4'] ?></p>
							</div>
						</div>
					</div>
					
					<button class="but"><?php echo $language[$lang]['text18'] ?></button>
				</div>
				
				<div class="in-3">
					<h1><?php echo $language[$lang]['text19'] ?></h1>
					<h2><?php echo $language[$lang]['text20'] ?></h2>
					
					<div class="list">
						<div class="flex side-block">
							<img src="img/icons/13.png">
							<p><?php echo $language[$lang]['text21'] ?></p>
						</div>
						<div class="flex side-block">
							<img src="img/icons/10.png">
							<p><?php echo $language[$lang]['text22'] ?></p>
						</div>
						<div class="flex side-block">
							<img src="img/icons/12.png">
							<p><?php echo $language[$lang]['text23'] ?></p>
						</div>
						<div class="flex side-block">
							<img src="img/icons/11.png">
							<p><?php echo $language[$lang]['text24'] ?></p>
						</div>
						<div class="flex side-block">
							<img src="img/icons/9.png">
							<p><?php echo $language[$lang]['text25'] ?></p>
						</div>
					</div>
					
					<button class="but"><?php echo $language[$lang]['text18'] ?></button>
				</div>
				
			</div>
			
		</div>
		
		<!--<div class="main additional">
		
		</div>
		-->
		
		<div class="yellow-div flex">
			
			<h3><?php echo $language[$lang]['text26'] ?></h3>
			
			<div class="element-1">
				<img src="img/icons/element.png">
			</div>

		</div>
		
		<div class="main flex">
			
			<div class="col col-10">
			
				<div class="in-4 flex">
				
					<h2><?php echo $language[$lang]['text27'] ?></h2>
					
					<p><?php echo $language[$lang]['text28'] ?></p>
				
					<div class="element-3">
						<img src="img/icons/element2.png">
					</div>
				</div>
				
				<div class="in-5 flex">
				
					<div class="first-in-5">
						<h5><?php echo $language[$lang]['text29'] ?></h5>
						<p><?php echo $language[$lang]['text30'] ?></p>
					</div>
					
					<div class="second-in-5">
						<h5><?php echo $language[$lang]['text31'] ?></h5>
						<p><?php echo $language[$lang]['text32'] ?></p>
					</div>
				
				</div>
			
			</div>
			
			<div class="col-squares col-2 flex">
			
				<div class="in-6 flex">
				
					<div class="flex time">
						<img src="img/icons/14.png">
						<h4>38 h</h4>
					</div>
					
					<p><?php echo $language[$lang]['text33'] ?></p>
				
				</div>
				
				<div class="in-7 flex">
					
					<img src="img/icons/15.png">
					
					<h4>67</h4>
					
					<h3><?php echo $language[$lang]['text34'] ?></h3>
					
				</div>
				
				<div class="in-8 flex">
					
					<h4>99%</h4>
					
					<h3><?php echo $language[$lang]['text35'] ?></h3>
				
				</div>
				
				<div class="in-9 flex">
				
					<div class="in-9-div"><h4>26</h4><h3><?php echo $language[$lang]['text36'] ?></h3></div>
					<div class="in-9-div"><div class="line"></div></div>
					<div class="in-9-div"><div class="line"></div></div>
					<div class="in-9-div"><h4>365</h4><h3><?php echo $language[$lang]['text37'] ?></h3></div>
					<div class="in-9-div"><h4>9</h4><h3><?php echo $language[$lang]['text38'] ?></h3></div>
					<div class="in-9-div"><div class="line"></div></div>
					<div class="in-9-div"><div class="line"></div></div>
					<div class="in-9-div"><h4>112</h4><h3><?php echo $language[$lang]['text39'] ?></h3></div>
				
				</div>
				
			</div>
		
		</div>
	
		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
