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
				<img src="img/icons/2.png">
				<h2>Поезда, локомотивы</h2 >
			</div>
		</div>
		
		<div class="col-flex">
			<div class="first">
				<img class="animation" src="img/object5.png">
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
					<div><p>Слежение за локомотивами в реальном времени</p></div>
					<div class="images-second"><img src="img/icons/40.png"></div>
					<div><p>Показания всех датчиков состава</p></div>
					<div class="images-second"><img src="img/icons/31.png"></div>
					<div><p>Маршруты</p></div>
					<div class="images-second"><img src="img/icons/46.png"></div>
					<div><p>Напоминания</p></div>
					<div class="images-second"><img src="img/icons/42.png"></div>
					<div><p>Сообщения</p></div>
					<div class="images-second"><img src="img/icons/43.png"></div>
					<div><p>Отчеты</p></div>
					<!--<div class="images-second"><img src="img/icons/.png"></div>
					<div><p>Доступ к системе с любой точки мира</p></div>
					<div class="images-second"><img src="img/icons/.png"></div>
					<div><p>Геозоны</p></div>-->
				</div>

				<div class="additional-1">
				<div class="content-third">
					<div class="c-3">
						<div>
							<img src="img/icons/39.png">
							<h3>Слежение за локомотивами в реальном времени</h3>
						</div>
						<p>
							- слежения за объектами<br>
							- подсвечивания объектом в зависимости состояния объекта<br>
							- шлейф дороги (цветовой градиент движения объекта)<br>
							- визуальная информация по
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/40.png">
							<h3>Показания всех датчиков состава</h3>
						</div>
						<p>
							-	Визуальные и табличные данные
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/31.png">
							<h3>Маршруты (история прохождения локомотивов)</h3>
						</div>
						<p>Cоздавайте новых пользователей и настраивайте доступные им функции.</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/46.png">
							<h3>Напоминания</h3>
						</div>
						<p>
							
						</p>
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/42.png">
							<h3>Сообщения (сигналы и оповещения)</h3>
						</div>
						<p>
							- сообщения в случае отклонения значений по датчикам (минимальное или максимальное значение)<br>
							- сообщение о превышение скорости<br>
							- сообщение о событии (максимальные допустимые обороты, включение/выключение локомотивов и тд)<br>
							- сообщения о резком торможении<br>
							- сообщения отображаются в системе, так же происходит<br>
							- посылка письма и отправка СМС сообщения на телефон

						</p>	
					</div>
					<div class="c-3">
						<div>
							<img src="img/icons/43.png">
							<h3>Отчеты</h3>
						</div>
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

		<div class="header-line flex">
			<h3>Digital Signage</h3>
		</div>
		
		<div class="flex column first-height motorcycles">
			<div class="col yellow" id="firstt-add">
				<div><img src="img/icons/67.png"></div>
				<h3>Интересный факт</h3>
				<a><h3 class="col-cursor13 coll-1"></h3></a>
				<div class="col-expanded13 yellow">
					<p>
						4 рекламных монитора размером 2.8м на 4.5м, установленных на ЖД станции в городе Перт,
						ежегодно приносят компании прибыль в размере 7 миллионов долларов.
						<br><br>
						Digital Signage – это решение для трансляции контента направленное на информирование и
						рекламу. Основные преимущества перед традиционной рекламой это возможность
						обновлять контент удаленно через веб, адаптация транслируемого контента, а также
						высокий уровень вовлеченности аудитории за счет трансляции интерактивного и
						динамичного контента. Идея проста – донести информацию правильным людям в
						правильное время и получить прямую выгоду от этого.

					</p>
				</div>
			</div>
			<div class="col grey yellow-t" id="secondd-add">
				<div><img src="img/icons/23.png"></div>
				<h3>Преимущества</h3>
				<a><h3 class="col-cursor14 coll-1"></h3></a>
				<div class="col-expanded14 grey">
					<p>
						- Получения дохода от премиальных услуг и рекламы. Возможность сдавать в аренду<br>
						рекламное пространство, которое будет иметь широкий охват аудитории и высокую<br>
						вероятность того, что передаваемый меэсседж будет доставлен до получателя.<br>
						- Рекламное пространство такого типа имеет высокую стоимость;<br>
						- Повышение качества обслуживания, комфорта и безопасности клиентов и<br>
						сотрудников. Повышение лояльности клиентов благодаря высокому качеству<br>
						обслуживания;<br>
						- Повышение эффективности саморекламы, повышение уровня престижа компании;<br>
						- Снижение издержек на обслуживание клиентов.<br>
						- Исследования показывают, Digital Signage уменьшает ощущение пассажиров о<br>
						времени ожидания на целых 40 процентов, в то же время, повышая уровень их<br>
						удовлетворенности.
					</p>
					<button>Узнать больше</button>
				</div>
			</div>
		</div>
		
		<script>
		$(document).ready(function(){	
			var button = document.getElementById('firstt-add');
			var actions = {
				1: function() {
					$( ".col-expanded13" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor13" ).removeClass( "coll-1" );
					$( ".col-cursor13" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded13" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor13" ).removeClass( "expa" );
					$( ".col-cursor13" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		$(document).ready(function(){	
			var button = document.getElementById('secondd-add');
			var actions = {
				1: function() {
					$( ".col-expanded14" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor14" ).removeClass( "coll-1" );
					$( ".col-cursor14" ).addClass( "expa" );
				},
				2: function() {
					$( ".col-expanded14" ).slideToggle( "slow", function() {
					});
					$( ".col-cursor14" ).removeClass( "expa" );
					$( ".col-cursor14" ).addClass( "coll-1" );
				}
			};
			var counter = 0;
			button.onclick = function() {
				actions[counter = (counter % 2) + 1]();
			}
		});
		
		</script>
		
		<div class="header-line flex">
			<h3>Информация</h3>
		</div>
		
		<div class="flex column first-height">
			<div class="col yellow" id="first-add">
				<div><img src="img/icons/87.png"></div>
				<h3>Перрон</h3>
				<a><h3 class="col-cursor1 coll-1"></h3></a>
				<div class="col-expanded1 yellow">
					<p>
						На перроне возможно транслировать информацию о маршрутах, времени прибытия/ отбытия
						поездов, новости компании (изменения в расписаниях, акции, предложения и т.д.),
						интересную статистику и конечно же рекламу.
					</p>
				</div>
			</div>
			<div class="col black-t" id="second-add">
				<div><img src="img/icons/2.png"></div>
				<h3>Поезда</h3>
				<a><h3 class="col-cursor2 coll-1"></h3></a>
				<div class="col-expanded2 white">
					<p>
						Контент, транслируемый в поездах по смысловой нагрузке будет близок к тому, что будет
						показываться на перроне. Различие заключается в том, что он будет привязан к конкретному маршруту. Информация по данному рейсу обновляться в режиме реального времени –
						время прибытия, местоположение, остановки и т.д. Помимо этого возможно привязать
						трансляцию рекламы к текущему местоположению поезда, что могло бы быть актуально для
						туристических маршрутов таких как Рига-Юрмала, где перед следующей остановкой на
						экране появляются рекомендованные к посещению места этой станции. Высока вероятность
						того, что человек выйдет именно на этой станции и посетит именно это место.
						Возможно транслировать картинку с камеры, установленной на носу поезда.
						Возможно установить небольшие дисплеи перед входом в вагон, которые будут
						информировать пассажиров о количестве свободных/занятых мест.
					</p>
				</div>
			</div>
			<div class="col grey yellow-t" id="third-add">
				<div><img src="img/icons/34.png"></div>
				<h3>Наши услуги включают в себя</h3>
				<a><h3 class="col-cursor3 coll-1"></h3></a>
				<div class="col-expanded3 grey">
					<p>
						- Проектирование – мы подбираем наилучшие места для установки мониторов а также<br>
						продумываем какого типа и размера экраны будут наиболее эффективно работать в<br>
						том или ином месте;<br>
						- Инсталляция;<br>
						- Кастомизация ПО – адаптация под Ваши нужды, чтобы Вам было максимально<br>
						удобно работать с системой;<br>
						- Техническая поддержка;<br>
						- Обучение и организация рабочего места для управления системой.
					</p>
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
			<h3>Контроль персонала</h3>
		</div>
		
		<div class="text-line flex yellow black-t">
			<p>
				Данное решение помогает облегчить контроль и учет работы персонала которые работают
				на электропоездах. С помощью этого решения можно получить комплексную отчетность по
				работе персонала и значительно сократить издержки по учету работы персонала.
			</p>
		</div>
		
		<div class="header-line flex">
			<h3>Основные технологии реализации:</h3>
		</div>
		
		<div class="text-line flex yellow black-t">
			<h3>Биометрический считыватель отпечатков пальцев и RFID считыватель</h3>
			<p>
				В каждом электропоезде устанавливается электронный считыватель карт, в свою очередь,
				каждому работнику выдается индивидуальная электронная карта, где прописаны его данные.
				В начале и конце рабочего дня каждый работник должен зарегистрировать карту, поднеся её
				к электронному считывателю. Также регистрация возможна при помощи считывания
				отпечатков пальцев. Таким образом, Вам будет доступна следующая информация:<br>
				- Общее время работы сотрудника<br>
				- Маршруты, на которых работал сотрудник<br>
				- Количество отработанных смен и общее время работы сотрудника фиксируется и выводится<br>
				автоматически, что облегчает подсчет заработных плат.
			</p>
			<p>
				Всё оборудование реализуемо в надежном, вандалозащищённом корпусе. Считыватель
				легкодоступен для сотрудников, а пассажиры, в свою очередь, никаких дефектов
				оборудованию нанести не смогут.
			</p>
			
			<h3>ibeacon</h3>
			<p>
				Основное отличия от предыдущего решения:
				Учёт происходит автоматически, как только сотрудник заходит в вагон
				Возможность определять время нахождения сотрудника в каждом вагоне по-
				отдельности
			</p>
			<p>
				Возможность наблюдать за передвижение сотрудников по вагону (таким образом вы
				сможете увидеть, были ли проверены билеты том или ином вагоне/производилась ли
				уборка вагона и т.д.)<br>
				<b>ibeacon</b> – беспроводные сенсоры, которые работаю при помощи технологии Bluetooth Low
				Energy.<br><br>
				<b>Преимущества:</b><br><br>
				- От 2 лет автономной работа (без внешнего питания)<br>
				- Дальность работы 50-70 м<br>
				- Компактный размер – 2-3 см<br>
				В каждом вагоне устанавливаются датчики ibeacon, в свою очередь каждому сотруднику
				выдаётся передатчик, в котором прописаны его идентификационные данные (ИФ,
				должность). Когда сотрудник заходит в вагон, система автоматически фиксирует, что он
				начал работу на данном маршруте, соответственно, когда работник покидает вагон, система
				фиксирует это как конец рабочего дня. Также возможно видеть его перемещение по вагонам
				и наблюдать время нахождение в каждом из вагонов по отдельности. Помимо этого, систему
				возможно настроить таким образом, что она будет уведомлять о невыполнении рабочего
				плана.
			</p>
			<p>
				<b>Практическое применение:</b>
				Если контролёр, должен обходить все вагоны после каждой
				остановки поезда, а он на протяжении какого-то времени стоит без движения, то
				система это покажет;
				Если уборщица должна убрать 5 вагонов, а она находилось
				только в 4, а в 5-й она зашла и тут-же вышла, вы будите об этом уведомлены.
				Также возможно планировать работу сотрудников, и если кто-то не появился на работе
				согласно плану – система это покажет.
			</p>
			
		</div>
		
		<div class="header-line flex">
			<h3>Мониторинг и контроль технического состояния электропоезда и ЖД путей с помощью оптоволоконных датчиков</h3>
		</div>
		
		<div class="text-line flex yellow black-t">
			<h3>Решаемые задачи:</h3>
			<p>
				- Слежение за движением поездов – геолокация, скорость, ускорение<br>
				- Своевременное определение изломов и других дефектов ЖД путей<br>
				- Своевременное определение поломок ходовой части поезда – трещины, деформация
				и т.д.<br>
				- Своевременное определение нахождения объектов вблизи ЖД путей – люди,
				животные, машины, оползни, сходы камей, строительные работы и т.д.

			</p>
			
			<h3>Экономическое обоснование:</h3>
			<p>
				Во время испытаний оптоволоконных датчиков в Китае было зафиксировано около 30
				случаев аномальных вибраций, из которых половина представляли опасность для поезда и
				могли привести к крушению. Вторая половина случаев наблюдалась из-за неисправности
				деталей и использования неподходящей смазки. Это позволило механикам вовремя
				исправить ситуацию и предотвратить преждевременный износ деталей.
				Система оптоволоконных датчиков была разработана для облегчения технического
				обслуживания железнодорожного транспорта и сокращения расходов на его ремонт.
				Система позволяет железнодорожным компаниям экономить не менее 250 тыс. евро в
				год. Важно, что сама сеть оптоволоконных датчиков стоит на треть дешевле других систем
				мониторинга, использующихся на железной дороге.<br>
				До 40% - снижение затрат на ремонт поездов и ЖД путей<br>
				До 60% - повышение безопасности и снижение рисков
			</p>
			
			<h3>Описание решения</h3>
			<p>
				Основой решения является оптоволоконный кабель, который прокладывается вдоль ЖД
				путей. Оптоволокно способно быстро передать на любое расстояние огромные объёмы
				информации. Оно воспринимает и передаёт определённую информацию об окружающей
				среде, при этом не потребляет энергию и неприхотливо. Помимо этого, оптоволокно не
				только видит, но и слышит. Волоконнооптические системы, кроме измерения температуры и
				деформации, позволяют воспринимать внешние акустические воздействия – они могут
				определить, на каком метре кабеля произошло какое-либо нарушение. Также можно
				услышать звук шагов или подъезжающего автомобиля.
				Не стоит забывать про основное назначение оптоволоконных кабелей – это
				высокоскоростной интернет. На участках, где оптоволоконный кабель уже проложен,
				прокладка нового не требуется – как сенсор может быть использовано уже проложенное
				оптоволокно. А на участках, где оптоволокна ещё нет, зачастую интернет провайдеры рады
				погасить хорошую часть затрат на прокладку нового кабеля.
				Информация, которую фиксируют оптоволоконные датчики, выводится на приборную
				панель. Как только система фиксирует проблему, она тут же оповещает о ней машиниста и диспетчера. Они, в свою очередь, должны предпринять ряд мер для того, чтобы избежать
				несчастного случая.
				Датчики могут оперативно обнаружить вероятные проблемы, такие как чрезмерная
				вибрация, механические дефекты, скоростные и температурные аномалии.
				Так как система работает исключительно по методу оптического обнаружения, нет никаких
				проблем с электромагнитными помехами от линий электропередач, которые идут
				параллельно многим современным железнодорожным линиям.
				Датчики размещаются в отсеках поезда или вдоль железнодорожных путей. При
				возникновении внезапной помехи на рельсах или чрезмерной вибрации изменяется спектр
				отражения решеток.
				Система оптоволоконных датчиков – относительно недорогой и эффективный способ
				обеспечения превентивной безопасности.
			</p>
			<p>
				- Системы подсчета осей - систему счёта осей позволяет контролировать состояние свободности или занятости рельсовых участков. Система может использоваться как для контроля загруженности станционных путей, так и для контроля загруженности путей на переездах.<br>
				- Системы регистрации прохода колес - Система имеет широкий спектр применения - от обычной коммутации до отказоустойчивой индикации о свободности участка пути.<br>
				- Система управления движением - Система позволяет удалённо переводить стрелки на ЖД путях, к тому же систему возможно настроить на автоматическую работу. Данное решение исключает возможность столкновения, так как запрещает переводить стрелки, на линию, где на данный момент происходит движение поезда. Также подобная система позволяет автоматически открывать и закрывать ЖД переезды.	
			</p>
		</div>

		<?php include 'assets/footer.php'; ?>
		
	</body>
</html>
