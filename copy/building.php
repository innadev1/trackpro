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
				<img src="img/icons/20.png">
				<h2>Тяжелая техника, строительная техника, агротехника, спецтехника</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object2.png">
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
					<div class="images-second"><img src="img/icons/40.png"></div>
					<div><p>Отчёты</p></div>
					<div class="images-second"><img src="img/icons/42.png"></div>
					<div><p>Уведомления</p></div>
					<div class="images-second"><img src="img/icons/43.png"></div>
					<div><p>Органайзер</p></div>
					<div class="images-second"><img src="img/icons/48.png"></div>
					<div><p>Нагрузка на ось</p></div>
				</div>
				
				<div class="additional-1">
				<div class="content-third">
					<div class="images-third"><img src="img/icons/40.png"></div>
					<div>
						<h3>Отчёты</h3>
						<p>
							Загружайте различные отчеты в соответствии с нуждами предприятия. В TrackPro доступно более 30 видов отчётов, однако, если вы не 
							найдёте то, что нужно вашей компании - мы готовы разработать отчет индивидуально под вас.
						</p>
					</div>
					<div class="images-third"><img src="img/icons/42.png"></div>
					<div>
						<h3>Уведомления</h3>
						<p>
							Bыезд авто из определенной территории, заправка/слив топлива отключение устройства от питания, превышение скорости, чрезмерный 
							расход топлива на холостом ходу и многое другое.
						</p>	
					</div>
					<div class="images-third"><img src="img/icons/43.png"></div>
					<div>
						<h3>Органайзер</h3>
						<p>
							Получайте уведомления о событиях связанных с автомобилем - техосмотр, страховка, замена масла и т.д.. Ведите учет затрат на содержание 
							автопарка. 
						</p>
					</div>
					<div class="images-third"><img src="img/icons/48.png"></div>
					<div>
						<h3>Нагрузка на ось</h3>
						<p>
							Tочная информация о нагрузке на каждую ось, оповещения в случае перегрузки.
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
		
		<div class="flex column first-height">
			<div class="col yellow" id="first-add">
				<div><img src="img/icons/44.png"></div>
				<h3>Контроль уровня топлива</h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
						Узнайте точное количество заправленного топлива, получайте оперативное оповещение в случае краж и просматривайте детальную статистику о расходе топлива. Гарантированная точность - от 98%. Экономьте на топливе более 20% ежемесячно!
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="second-add">
				<div><img src="img/icons/32.png"></div>
				<h3>Контроль расхода топлива</h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 white">
					<p>
						Расходомер (счетчик топлива) - получайте детальную информацию о расходе и моточасах на каждом из потребителей топлива. Гарантированная точность - от 99%. Все счетчики имеют метрологические сертификаты.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col grey yellow-t" id="third-add">
				<div><img src="img/icons/45.png"></div>
				<h3>CAN</h3>
				<a><h3 class="col-cursor3 coll-1"></h3></a>
				<div class="col-expanded3 grey">
					<p>
						Подключение к бортовому компьютеру автомобиля. Удалённо получайте информацию о расходе топлива, заправках и сливах, показателях одометра, оборотах двигателя и многом другом.					
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
				<div><img src="img/icons/45.png"></div>
				<h3>PRO CAN</h3>
				<a><h3 class="col-cursor4 coll-1"></h3></a>
				<div class="col-expanded7 grey">
					<p>
						Отслеживайте до 50 параметров с бортового компьютера транспорта (обороты и температура двигателя, давление масла, различные ошибки, нагрузка на ось и многое другое). Получайте оперативные оповещения при превышении любого из параметров, таким образом предотвращая поломки.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col yellow" id="five-add">
				<div><img src="img/icons/46.png"></div>
				<h3>Время</h3>
				<a><h3 class="col-cursor5 coll-1"></h3></a>
				<div class="col-expanded8 yellow">
					<p>
						Считывание моточасов и подключение к исполнительным механизмам. Получайте детальную информацию о времени работы исполнительных механизмов (ковш, лопата, двигатель и т.д.) - сведения о том, сколько транспорт работал по факту и сколько простаивал.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="six-add">
				<div><img src="img/icons/47.png"></div>
				<h3>Автоматическое глушение топлива</h3>
				<a><h3 class="col-cursor6 coll-1"></h3></a>
				<div class="col-expanded9 white">
					<p>
						Не тратьте топливо в холостую. Двигатель техники автоматически выключается при долгой работе в холостую.
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
					$( ".col-expanded7" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor7" ).removeClass( "coll-1" );
					$( ".col-cursor7" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded7" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor7" ).removeClass( "expa" );
					$( ".col-cursor7" ).addClass( "coll-1" );
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
					$( ".col-expanded8" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor8" ).removeClass( "coll-1" );
					$( ".col-cursor8" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded8" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor8" ).removeClass( "expa" );
					$( ".col-cursor8" ).addClass( "coll-1" );
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
					$( ".col-expanded9" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor9" ).removeClass( "coll-1" );
					$( ".col-cursor9" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded9" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor9" ).removeClass( "expa" );
					$( ".col-cursor9" ).addClass( "coll-1" );
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
		
		<div class="auto building">
			<div class="capt-1"><h5>Зелёное вождение</h5></div>
			<div class="text-1">
				<p>
					C этой системой вы будете знать стиль 
					вождения водителя. Система собирает 
					данные об использовании авто, после чего
					оценивает экономичность и корректность 
					вождения. Отличный способ сэкономить 
					до 30% на топливе и эксплуатационных 
					расходах транспорта. Дополнительно
					можно установить панель в cалоне авто, 
					которая будет оповещать водителя 
					онарушениях, например, о резких 
					ускорениях, торможениях или поворотах.
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

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
