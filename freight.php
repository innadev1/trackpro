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
				<img src="img/icons/4.png">
				<h2>Грузовой транспорт и прицепы</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object.png">
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
					<div><p>Планирование маршрута</p></div>
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
						<p>Cоздавайте новых пользователей и настраивайте доступные им функции.</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/31.png">
							<h3>Планирование маршрута</h3>
						</div>
						<p>
							Планируйте и оптимизируйте маршрут, составляйте точки доставки в правильной последовательности и сверяйте спланированный маршрут 
							с проделанным.
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
		
		<div class="flex column first-height">
			<div class="col yellow" id="first-add">
				<div><img src="img/icons/31.png"></div>
				<h3>Система слежения для прицепов</h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
					<b>GPS слежение</b> - подключение к габаритным огням и установка дополнительного аккумулятору<br>
					Звуковая сирена - сигнализация в случае несанкционированного открытия дверей<br>
					<b>Датчики:</b><br>
					<img class="expimg" src="img/icons/63.png"> Открытия дверей<br>
					<img class="expimg" src="img/icons/60.png"> Температуры<br>
					<img class="expimg" src="img/icons/62.png"> Влажности<br>
					Подключение к стационарному оборудованию прицепа (Thermo King и т.д.)
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="second-add">
				<div class="flex icon-f">
					<div><img src="img/icons/59.png"></div>
					<div><img src="img/icons/32.png"></div>
					<div><img src="img/icons/58.png"></div>
				</div>
				<h3>Контроль топлива</h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 white">
					<p>
						<b>CAN</b> - подключение к бортовому компьютеру автомобиля. Удалённо получайте информацию о расходе топлива, заправках и сливах, показателях одометра, оборотах двигателя и многом другом<br>
						<b>Контроль уровня топлива</b> - узнайте точное количество заправленного топлива, получайте оперативное оповещение в случае краж и просматривайте детальную статистику о расходе топлива. Гарантированная точность - от 98%. Экономьте на топливе более 20% ежемесячно!<br>
						<b>Контроль расхода топлива</b> - расходомер (счетчик топлива) - получайте детальную информацию о расходе и моточасах на каждом из потребителей топлива. Гарантированная точность - от 99%. Все счетчики имеют метрологические сертификаты.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col grey yellow-t" id="third-add">
				<div class="flex icon-f">
					<div><img src="img/icons/61.png"></div>
					<div><img src="img/icons/57.png"></div>
					<div><img src="img/icons/66.png"></div>
				</div>
				<h3>Дополнительные</h3>
				<a><h3 class="col-cursor3 coll-1"></h3></a>
				<div class="col-expanded3 grey">
					<p>
						<b>Нагрузка на ось</b> - точная информация о нагрузке на каждую ось, оповещения в случае перегрузки<br>
						<b>SOS кнопка</b> - вызов помощи в экстренной ситуации<br>
						<b>iButton</b> - идентификация водителя
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
		
		<div class="header-line flex">
			<h3>Другие Решения</h3>
		</div>
		
		<div class="flex column first-height">
			<div class="col grey yellow-t" id="four-add">
				<div><img src="img/icons/50.png"></div>
				<h3>Optimistic</h3>
				<a><h3 class="col-cursor4 coll-1"></h3></a>
				<div class="col-expanded4 grey">
					<p>
						Оптимизация и планирование маршрутов. Сэкономьте до 30% на транспортных расходах, благодаря наиболее выгодно построенному маршруту.				
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col yellow" id="five-add">
				<div><img src="img/icons/37.png"></div>
				<h3>WayBill Smart</h3>
				<a><h3 class="col-cursor5 coll-1"></h3></a>
				<div class="col-expanded5 yellow">
					<p>
						Автоматическое создание путевых листов. Привязка к заправочной станции для автоматического импорта заправок в путевой лист. Теперь путевой лист можно создать всего за несколько кликов.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="six-add">
				<div><img src="img/icons/38.png"></div>
				<h3>VisiTrack</h3>
				<a><h3 class="col-cursor6 coll-1"></h3></a>
				<div class="col-expanded6 white">
					<p>
						Планируйте маршрут, создавайте задания и отправляйте всю необходимую информацию водителю на телефон или планшет. В свою очередь, водитель сможет оповестить Вас о выполнении задания, отправить документы, комментарии, фотографии и т.д.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
		</div>
		
		<script>
		$(document).ready(function(){	
			var button = document.getElementById('four-add');
			var actions = {
				1: function() {
					$( ".col-expanded4" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor4" ).removeClass( "coll-1" );
					$( ".col-cursor4" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded4" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor4" ).removeClass( "expa" );
					$( ".col-cursor4" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('five-add');
			var actions = {
				1: function() {
					$( ".col-expanded5" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor5" ).removeClass( "coll-1" );
					$( ".col-cursor5" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded5" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor5" ).removeClass( "expa" );
					$( ".col-cursor5" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('six-add');
			var actions = {
				1: function() {
					$( ".col-expanded6" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor6" ).removeClass( "coll-1" );
					$( ".col-cursor6" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded6" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor6" ).removeClass( "expa" );
					$( ".col-cursor6" ).addClass( "coll-1" );
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
		
		<div class="auto">
			<div class="capt-1"><h5>Зелёное вождение</h5></div>
			<div class="text-1">
				<p>
					Система, которая контролирует стиль вождения водителя, оповещая его о резких ускорениях, торможениях и поворотах. В свою очередь, вы сможете видеть насколько экономно ехал водитель. Это решение позволяет сэкономить до 30% на топливе и эксплуатационных расходах транспорта.
				</p>
			</div>
			<div class="capt-2"><h5>Беспроводные датчики температуры </h5></div>
			<div class="text-2">
				<p>
					Получайте информацию о текущей температуре и влажности в режиме онлайн. 
					Датчики не нуждаются в установке - просто положите их в прицеп автомобиля, и вы 
					будете уверены в том, что терморежим не нарушался и продукция 
					была доставлена в целости.
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
		
		<div class="auto trailer">
			<div class="capt-1"><h5>Звуковая сирена</h5></div>
			<div class="text-1">
				<p>
					Ссигнализация в случае несанкционированного открытия дверей.
				</p>
			</div>
			<div class="capt-2"><h5>GPS слежение</h5></div>
			<div class="text-2">
				<p>
					Подключение к габаритным огням и установка дополнительного аккумулятору.
				</p>
			</div>
			<div class="capt-3"><h5>Подключение к стационарному оборудованию прицепа (Thermo King и т.д.)</h5></div>
			<div class="capt-4"><h5>Датчики:</h5></div>
			<div class="text-4">
				<p>
					- Открытия дверей<br><br>
					- Температуры<br><br>
					- Влажности
				</p>
			</div>
		</div>

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
