<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/pages.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>	
		
		<style>
		@media screen and (max-width: 900px){
			.second{display:none !important}
		}
		</style>
		
	</head>

	<body>
	
		<?php include 'assets/header.php'; ?>
		
		<div id="header">
			<div class="info-inside">
				<img src="img/icons/6.png">
				<h2>Люди</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object8.png">
				<p>
					TrackPro - это современная система для упрaавления автопарком. TrackPro позволяет хранить и обрабатывать всю 
					информацию о работе автопарка в одном, удобном месте, и помогает принимать оперативные и обоснованные 
					решения для успешного роста вашего бизнеса.
				</p>
			</div>
			
			<div class="second yellow flex">
			
				<h2>Системы слежения</h2>
				<div class="content-second">
					<div class="images-second"><img src="img/icons/18.png"></div>
					<div><p>Отслеживайте местонахождения в режиме Online</p></div>
					<div class="images-second"><img src="img/icons/19.png"></div>
					<div><p>Совершайте и принимайте экстренные звонки</p></div>
					<div class="images-second"><img src="img/icons/17.png"></div>
					<div><p>Получайте уведомление в случае падения</p></div>
					<div class="images-second"><img src="img/icons/30.png"></div>
					<div><p>Тревожная кнопка ‘SOS’ с указанием местонахождения</p></div>
					<div class="images-second"><img src="img/icons/51.png"></div>
					<div><p>Простое и понятное использование</p></div>
				</div>
		
			</div>
			
		</div>
		
		<div class="flex column first-height">
			<div class="col yellow" id="first-add">
				<div><img src="img/icons/72.png"></div>
				<h3>iBeacons</h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
						Решение для учёта времени работы сотрудников и контроля проделанной работы.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="second-add">
				<div><img src="img/icons/73.png"></div>
				<h3>Подсчет посетителей </h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 white">
					<p>
						Подсчет посетителей - узнавайте сколько человек посетили ваш магазин, торговую точку или компанию за любой период времени. Анализируйте тенденций посещаемости, эффективность маркетинговых кампаний и выводите конверсию, определяя наиболее хороших продавцов.
					</p>
				</div>
			</div>
			<div class="col grey yellow-t" id="third-add">
				<div><img src="img/icons/74.png"></div>
				<h3>Мобильные сотрудники </h3>
				<a><h3 class="col-cursor3 coll-1"></h3></a>
				<div class="col-expanded3 grey">
					<p>
						Мобильные сотрудники - решение для контроля и учёта работы мобильных сотрудников - разносчиков рекламы, выездных техников, охранников, почтальонов и многих других. Отслеживайте перемещение сотрудников и выполнение поставленных задач, получайте информацию о посещенных местах и анализируйте эффективность их работы. Удобное приложение позволит отправлять задания сотруднику прямо на телефон. Вы будете уверены в том, что задача не затеряется и будет выполнена согласно плану, а удобный планировщик позволит вам убедиться в том, что время работников используется максимально эффективно.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
		</div>
		
		<style>
		.element-2{display:none !important}
		</style>
		
		<script>
		$(document).ready(function(){	
			var button = document.getElementById('first-add');
			var actions = {
				1: function() {
					$( ".col-expanded1" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor1" ).removeClass( "coll-1" );
					$( ".col-cursor1" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded1" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor1" ).removeClass( "expa" );
					$( ".col-cursor1" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('second-add');
			var actions = {
				1: function() {
					$( ".col-expanded2" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor2" ).removeClass( "coll-1" );
					$( ".col-cursor2" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded2" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor2" ).removeClass( "expa" );
					$( ".col-cursor2" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('third-add');
			var actions = {
				1: function() {
					$( ".col-expanded3" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor3" ).removeClass( "coll-1" );
					$( ".col-cursor3" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded3" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor3" ).removeClass( "expa" );
					$( ".col-cursor3" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		</script>

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
