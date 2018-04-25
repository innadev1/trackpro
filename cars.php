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
				<img src="img/icons/1.png">
				<h2>Легковой транспорт</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object3.png">
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
				<p>Миниатюрный размер и простое 
				использование</p>
			</div>
		</div>
		
		<div class="flex column first-height">
			<div class="col yellow" id="first-add">
				<div><img src="img/icons/37.png"></div>
				<h3>WayBill Smart</h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
						Автоматическое создание путевых листов. Привязка к заправочной станции для автоматического импорта заправок в путевой лист. Теперь путевой лист можно создать всего за несколько кликов.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="second-add">
				<div><img src="img/icons/49.png"></div>
				<h3>Блокировка двигателя</h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 white">
					<p>
						Заблокируйте работу двигателя удаленно и предотвратите попытку злоумышленников украсть ваш транспорт.
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
				<div><img src="img/icons/50.png"></div>
				<h3>Optimistic</h3>
				<a><h3 class="col-cursor4 coll-1"></h3></a>
				<div class="col-expanded7 grey">
					<p>
						Оптимизация и планирование маршрутов. Сэкономьте до 30% на транспортных расходах благодаря наиболее выгодно построенному маршруту.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col yellow" id="five-add">
				<div><img src="img/icons/51.png"></div>
				<h3>Plug and Drive</h3>
				<a><h3 class="col-cursor5 coll-1"></h3></a>
				<div class="col-expanded8 yellow">
					<p>
						Многофункциональная система слежения, не требующая профессиональной установки. Просто установите устройство в OBD2 разъем, и вы не только сможете отслеживать местоположение транспорта в режиме online, но и считывать ошибки, контролировать стиль вождения, получать оповещения о столкновении и многое другое.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="six-add">
				<div><img src="img/icons/53.png"></div>
				<h3>TP Agents</h3>
				<a><h3 class="col-cursor6 coll-1"></h3></a>
				<div class="col-expanded9 white">
					<p>
						Система для работы с агентами. Планируйте работу агентов, контролируйте её выполнение, создавайте задания и отправляйте их напрямую агенту на телефон или планшет.
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
			<h3>Безопасность</h3>
		</div>
		
		<div class="flex column first-height">
			<div class="col yellow" id="seven-add">
				<div><img src="img/icons/55.png"></div>
				<h3>Удаленная сигнализация</h3>
				<a><h3 class="col-cursor10 coll-1"></h3></a>
				<div class="col-expanded10 yellow">
					<p>
						В случае срабатывания сигнализации вы получите мгновенное оповещение на телефон.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col black-t" id="eight-add">
				<div><img src="img/icons/56.png"></div>
				<h3>SOS кнопка</h3>
				<a><h3 class="col-cursor11 coll-1"></h3></a>
				<div class="col-expanded11 white">
					<p>
						Вызов помощи в экстренной ситуации.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col grey yellow-t" id="nine-add">
				<div><img src="img/icons/52.png"></div>
				<h3>eCall</h3>
				<a><h3 class="col-cursor12 coll-1"></h3></a>
				<div class="col-expanded12 grey">
					<p>
						Система экстренного вызова служб спасения с отправкой координат местоположения и возможностью связаться с вами (обратный звонок будет автоматически принят в салон авто).
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
		</div>
		
		<script>
		$(document).ready(function(){	
			var button = document.getElementById('seven-add');
			var actions = {
				1: function() {
					$( ".col-expanded10" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor10" ).removeClass( "coll-1" );
					$( ".col-cursor10" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded10" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor10" ).removeClass( "expa" );
					$( ".col-cursor10" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('eight-add');
			var actions = {
				1: function() {
					$( ".col-expanded11" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor11" ).removeClass( "coll-1" );
					$( ".col-cursor11" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded11" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor11" ).removeClass( "expa" );
					$( ".col-cursor11" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('nine-add');
			var actions = {
				1: function() {
					$( ".col-expanded12" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor12" ).removeClass( "coll-1" );
					$( ".col-cursor12" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded12" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor12" ).removeClass( "expa" );
					$( ".col-cursor12" ).addClass( "coll-1" );
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
		
		<div class="auto cars-">
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
			<div class="capt-4"><h5>iButton</h5></div>
			<div class="text-4">
				<p>
					Идентификация водителя. Возможность видеть, какой
					водитель использовал авто
				</p>
			</div>
			<div class="capt-5"><h5>Датчик открытия/закрытия </h5></div>
			<div class="text-5">
				<p>
					Cистема оповестит Вас о любых попытках 
					несанкционированного открытия капота, 
					багажника, дверей и т.д.
				</p>
			</div>
			<div class="capt-6"><h5>Прослушка салона</h5></div>
			<div class="capt-7"><h5>Датчик присутствия пассажиров</h5></div>
		</div>

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
