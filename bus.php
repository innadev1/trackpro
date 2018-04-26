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
				<img src="img/icons/7.png">
				<h2>Общественный транспорт</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object7.png">
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
					<div class="images-second"><img src="img/icons/40.png"></div>
					<div><p>Отчёты</p></div>
					<div class="images-second"><img src="img/icons/41.png"></div>
					<div><p>Пользователи</p></div>
					<div class="images-second"><img src="img/icons/31.png"></div>
					<div><p>Отклонения от маршрута </p></div>
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
							<img src="img/icons/40.png">
							<h3>Отчёты</h3>
						</div>
						<p>
							Загружайте различные отчеты в соответствии с нуждами предприятия. В TrackPro доступно более 30 видов отчётов, однако, если вы не 
							найдёте то, что нужно вашей компании - мы готовы разработать отчет индивидуально под вас.
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/41.png">
							<h3>Пользователи</h3>
						</div>
						<p>Cоздавайте новых пользователей и настраивайте доступные им функции.Кроме того, вы можете добавлять и убирать объекты, которые будет видеть пользователь.</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/31.png">
							<h3>Отклонения от маршрута </h3>
						</div>
						<p>
							Получайте уведомления о любых отклонениях от маршрута и оперативно узнавайте об отставаниях от запланированного графика
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
				<p>Миниатюрный размер и простое 
				использование</p>
			</div>
		</div>
		
		<div class="flex column first-height motorcycles">
			<div class="col yellow" id="first-add">
				<div class="flex icon-f">
					<div><img src="img/icons/.png"></div>
					<div><img src="img/icons/.png"></div>
					<div><img src="img/icons/.png"></div>
				</div>
				<h3>Контроль топлива</h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
						- <b>CAN</b> - подключение к бортовому компьютеру автомобиля. Удалённо получайте информацию о расходе топлива, заправках и сливах, показателях одометра, оборотах двигателя и многом другом<br>
						- <b>Контроль уровня топлива</b> - узнайте точное количество заправленного топлива, получайте оперативное оповещение в случае краж и просматривайте детальную статистику о расходе топлива. Гарантированная точность - от 98%. Экономьте на топливе более 20% ежемесячно!<br>
						- <b>Контроль расхода топлива</b> - расходомер (счетчик топлива) - получайте детальную информацию о расходе и моточасах на каждом из потребителей топлива. Гарантированная точность - от 99%. Все счетчики имеют метрологические сертификаты.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col grey yellow-t" id="second-add">
				<div class="flex icon-f">
					<div><img src="img/icons/.png"></div>
					<div><img src="img/icons/.png"></div>
					<div><img src="img/icons/.png"></div>
				</div>
				<h3>Видеонаблюдение</h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 grey">
					<p>
						Комплексное решение для предоставления непрерывного online видеонаблюдения в общественном транспорте. Данное решение способствует осуществлению безопасности пассажиров, повышает контроль над водителями, помогает предотвращать порчу имущества и упрощает урегулирование спорных ситуаций.
						<br>- <b>IP видеокамеры</b> с возможностью передачи данных online и записи на внутренний накопитель данных
						<br>- <b>Wi-Fi роутер</b>
						<br>- <b>Запись видео по событиям.</b> Например: при открытии двери, включении зажигания, заправке, превышении скорости и многом другом
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
		</div>
		
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
		
		</script>
		
		<div class="header-line flex">
			<h3>Популярно</h3>
		</div>
		
		<div class="auto bus">
			<div class="capt-1"><h5>Зелёное вождение</h5></div>
			<div class="text-1">
				<p>
					Система, которая контролирует стиль вождения водителя, оповещая его о резких ускорениях, торможениях и поворотах. В свою очередь, вы сможете видеть насколько экономно ехал водитель. Это решение позволяет сэкономить до 30% на топливе и эксплуатационных расходах транспорта.
				</p>
			</div>
			<div class="capt-3"><h5>TP Taho</h5></div>
			<div class="text-3">
				<p>
					Cчитывайте данные с тахографа удалённо. Подключение к тахографу позволяет считывать 
					данные автоматически и в любое время, а система по анализу данных позволит вам получить
					детальную информацию о работе водителя и уведомит о нарушениях.
				</p>
			</div>
		</div>

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
