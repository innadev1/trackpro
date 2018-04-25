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
				<img src="img/icons/5.png">
				<h2>Мотоциклы и квадроциклы</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object4.png">
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
					<div class="images-second"><img src="img/icons/43.png"></div>
					<div><p>Корпус IP67</p></div>
					<div class="images-second"><img src="img/icons/42.png"></div>
					<div><p>Уведомления</p></div>
					<div class="images-second"><img src="img/icons/43.png"></div>
					<div><p>Органайзер</p></div>
					<div class="images-second"><img src="img/icons/55.png"></div>
					<div><p>Низкое потребление энергии</p></div>
				</div>

				<div class="additional-1">
				<div class="content-third">
					<div class="images-third"><img src="img/icons/39.png"></div>
					<div>
						<h3>Слежение онлайн</h3>
						<p>
							B любой момент времени узнайте где находится авто. Просматривайте проделанные маршруты, получайте детальную информацию о местах и 
							времени стоянок и скорости передвижения.
						</p>
					</div>
					<div class="images-third"><img src="img/icons/40.png"></div>
					<div>
						<h3>Отчёты</h3>
						<p>
							Загружайте различные отчеты в соответствии с нуждами предприятия. В TrackPro доступно более 30 видов отчётов, однако, если вы не 
							найдёте то, что нужно вашей компании - мы готовы разработать отчет индивидуально под вас.
						</p>
					</div>
					<div class="images-third"><img src="img/icons/41.png"></div>
					<div>
						<h3>Пользователи</h3>
						<p>Cоздавайте новых пользователей и настраивайте доступные им функции.</p>
					</div>
					<div class="images-third"><img src="img/icons/43.png"></div>
					<div>
						<h3>Корпус IP67</h3>
						<p>
							Защита от влаги и пыли.
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
					<div class="images-third"><img src="img/icons/55.png"></div>
					<div>
						<h3>Низкое потребление энергии</h3>
						<p>
							
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
				<div><img src="img/icons/54.png"></div>
				<h3>Блокировка двигателя </h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
						Заблокируйте работу двигателя удаленно и предотвратите попытку злоумышленников украсть ваш транспорт.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
			<div class="col grey yellow-t" id="second-add">
				<div><img src="img/icons/33.png"></div>
				<h3>Удаленная сигнализация</h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 grey">
					<p>
						В случае срабатывания сигнализации получайте оперативное уведомление на телефон.
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
		
		<div class="auto cars- motorcycle">
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
