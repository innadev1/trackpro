<html>
    <head>     
		<link rel="stylesheet" type="text/css" href="style/pages.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
		
		<div id="header">
			<div class="info-inside">
				<img src="img/icons/personals.png">
				<h2>Для частных лиц</h2 >
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
			
				<div class="triangle" id="triangle">
					<img src="img/icons/asset1.png">
					<p class="label1 collapsed1"></p>
				</div>
			
				<h2>Системы слежения</h2>
				<div class="content-second">
					<div class="images-second"><img src="img/icons/39.png"></div>
					<div><p>Слежение онлайн</p></div>
					<div class="images-second"><img src="img/icons/82.png"></div>
					<div><p>Оповещение при эвакуации или ударе автомобиля</p></div>
					<div class="images-second"><img src="img/icons/83.png"></div>
					<div><p>Подключение к сигнализации</p></div>
					<div class="images-second"><img src="img/icons/31.png"></div>
					<div><p>Низкое потребление энергии</p></div>
					<div class="images-second"><img src="img/icons/42.png"></div>
					<div><p>Уведомления</p></div>
					<div class="images-second"><img src="img/icons/43.png"></div>
					<div><p>Органайзер</p></div>
					
					
				</div>

				<div class="additional-1">
				<div class="content-third">
					<div class="c-3">
						<div>
							<img src="img/icons/39.png">
							<h3>Слежение онлайн</h3>
						</div>
						<p>
							B любой момент времени узнайте где находится авто. Просматривайте проделанные маршруты, получайте детальную информацию о местах и 
							времени стоянок и скорости передвижения.
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/82.png">
							<h3>Оповещение при эвакуации или ударе автомобиля</h3>
						</div>
						<p>
							
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/83.png">
							<h3>Подключение к сигнализации</h3>
						</div>
						<p>Отправка оповещения о срабатывании сигнализации на телефон.</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/31.png">
							<h3>Низкое потребление энергии</h3>
						</div>
						<p>
							При отключении зажигания, устройство уходит в режим глубокого сна и практически не расходует заряд аккумулятора
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/42.png">
							<h3>Уведомления</h3>
						</div>
						<p>
							Bыезд авто из определенной территории, заправка/слив топлива отключение устройства от питания, превышение скорости, чрезмерный 
							расход топлива на холостом ходу и многое другое.
						</p>	
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/43.png">
							<h3>Органайзер</h3>
						</div>
						<p>
							Получайте уведомления о событиях связанных с автомобилем - техосмотр, страховка, замена масла и т.д.. Ведите учет затрат на содержание 
							автопарка. 
						</p>
					</div>
				</div>
				</div>
				
			</div>
			
		</div>
		
		<script>
		$(document).ready(function(){	
			var button = document.getElementById('triangle');
			var actions = {
				1: function() {
					$( ".additional-1" ).show("slow");
					$( ".content-second" ).hide( "slow");
					
					$( ".label1" ).removeClass( "collapsed1" );
					$( ".label1" ).addClass( "expanded1" );
				},
				2: function() {
					$( ".additional-1" ).hide( "slow");
					$( ".content-second" ).show("slow");

					$( ".label1" ).removeClass( "expanded1" );
					$( ".label1" ).addClass( "collapsed1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		</script>
		
		<div class="header-line flex">
			<h3>Радиомаяк (GLONASS / GPS)</h3>
		</div>
		
		<div class="benefits flex">
			<div class="ag-st">
				<img src="img/ag-st_header.jpg">
			</div>
			<div>
				<div><img src="img/icons/26.png"></div>
				<p>Автономная работа до 2 лет</p>
			</div>
			<div>
				<div><img src="img/icons/27.png"></div>
				<p>Передача данных о местонахождении 
				объекта до 10 раз в сутки</p>
			</div>
			<div>
				<div><img src="img/icons/28.png"></div>
				<p>Защита от обнаружения в случае 
				считывания частот</p>
			</div>
			<div>
				<div><img src="img/icons/29.png"></div>
				<p>Оповещение в случае 
				несанкционированного движения</p>
			</div>
			<div>
				<div><img src="img/icons/30.png"></div>
				<p>Миниатюрный размер и простое использование</p>
			</div>
		</div>
		
		<div class="header-line flex yellow black-t">
			<h3>Персональный трекер</h3>
		</div>
		
		<div class="benefits flex yellow black-t">
			<div class="ag-st">
				<img src="img/Capture.jpg">
			</div>
			<div>
				<div><img src="img/icons/18.png"></div>
				<p>Отслеживайте местонахождения в режиме Online</p>
			</div>
			<div>
				<div><img src="img/icons/19.png"></div>
				<p>Совершайте и принимайте экстренные звонки</p>
			</div>
			<div>
				<div><img src="img/icons/17.png"></div>
				<p>Получайте уведомление в случае падения</p>
			</div>
			<div>
				<div><img src="img/icons/30.png"></div>
				<p>Тревожная кнопка ‘SOS’ с указанием местонахождения</p>
			</div>
			<div>
				<div><img src="img/icons/75.png"></div>
				<p>Простое и понятное использование</p>
			</div>
		</div>
		
		<div class="header-line flex">
			<h3>GPS-ошейник для собак, кошек и сельскохозяйственного скота</h3>
		</div>
		
		<div class="benefits flex">
			<div>
				<div><img src="img/icons/13.png"></div>
				<p>Питомца GPS-ошейником вы никогда не потеряете - его местоположение всегда видно в системе</p>
			</div>
			<div>
				<div><img src="img/icons/84.png"></div>
				<p>Устройство подбирается индивидуально под каждый тип животного - исходя из его размеров</p>
			</div>
			<div>
				<div><img src="img/icons/85.png"></div>
				<p>Получайте уведомления, если Ваш питомец вышел за пределы определенной территории</p>
			</div>
			<div>
				<div><img src="img/icons/86.png"></div>
				<p>Устройство имеет встроенный аккумулятор и не боится воды и пыли</p>
			</div>
		</div>
		
		<div class="header-line flex white black-t">
			<h3>Велосипедный GPS трекер </h3>
		</div>
		
		<div class="benefits flex white black-t enter">
			<div class="ag-st">
				<img src="img/29adfcf52cef.jpg">
			</div>
			<div class="ag-st">
				<img src="img/tracker-handlebar.jpg">
			</div>
			<div>
				<div><img src="img/icons/76.png"></div>
				<p>В любое время определите местонахождение велосипеда, отправив простое SMS сообщение</p>
			</div>
			<div>
				<div><img src="img/icons/77.png"></div>
				<p>Встроенный аккумулятор с возможностью перезарядки. Время работы от 1 до 3 месяцев</p>
			</div>
			<div>
				<div><img src="img/icons/78.png"></div>
				<p>Оповещение в случае несанкционированного движения</p>
			</div>
			<div>
				<div><img src="img/icons/79.png"></div>
				<p>Удобная установка и простое использование</p>
			</div>
			<div>
				<div><img src="img/icons/80.png"></div>
				<p>Сигнал СОС и датчик падения</p>
			</div>
		</div>
		

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
