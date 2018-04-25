<?php
    if(!isset($_SESSION)) {
        session_start();
   }

    $SiteUrl = 'http://localhost/www/atrum/';
    $language;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='lv' || $_GET['lang']=='ru' || $_GET['lang']=='en') {
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else{
        $lang = 'lv';
    }

	$language['lv']['lan'] = 'LV';
    $language['ru']['lan'] = 'RU';
	$language['en']['lan'] = 'EN';
	
	$language['lv']['uni'] = 'Universalitāte';
    $language['ru']['uni'] = 'Универсальность';
	$language['en']['uni'] = 'Universal';
	
	$language['lv']['text1'] = 'TrackPro ir iespējams uzstādīt uz praktiski jebkuru objektu, kuram nepieciešama pastāvīga kontrole. 
Sistēma var veikt gan statisko gan kustīgo objektu monitoringu no jebkuras pasaules malas,
bet papildus aprīkojuma pieslēgšana neierobežoti palielina tās iespējas.';
    $language['ru']['text1'] = '';
	$language['en']['text1'] = '';
	
	$language['lv']['text2'] = 'Uzziniet vairāk';
    $language['ru']['text2'] = 'Узнайте больше';
	$language['en']['text2'] = 'More';
	
	$language['lv']['more'] = 'Vairāk';
    $language['ru']['more'] = 'Больше';
	$language['en']['more'] = 'More';
	
	$language['lv']['about'] = 'Par sistēmu';
    $language['ru']['about'] = 'О системе';
	$language['en']['about'] = '';
	
	$language['lv']['posibillities'] = 'Iespējas';
    $language['ru']['posibillities'] = 'Возможности';
	$language['en']['posibillities'] = '';
	
	$language['lv']['tarif'] = 'Tarifu plāns';
    $language['ru']['tarif'] = 'Тарифный план';
	$language['en']['tarif'] = '';
	
	$language['lv']['questions'] = 'Jautājumi';
    $language['ru']['questions'] = 'Вопросы';
	$language['en']['questions'] = '';
	
	$language['lv']['more'] = 'Vairāk';
    $language['ru']['more'] = 'Больше';
	$language['en']['more'] = 'More';
	
	$language['lv']['text3'] = 'Uzraudzība un <br> kontrole vadība';
    $language['ru']['text3'] = 'Мониторинг и <br> слежение за транспортом';
	$language['en']['text3'] = '';
	
	$language['lv']['text4'] = 'Transporta uzraudzība un izsekošana (pēc nozares)';
    $language['ru']['text4'] = 'Мониторинг, слежение за транспортом (по отраслям)';
	$language['en']['text4'] = '';
	
	$language['lv']['text5'] = 'Personāls';
    $language['ru']['text5'] = 'Люди';
	$language['en']['text5'] = '';
	
	$language['lv']['text6'] = 'Motocikli, <br> visurgājēji';
    $language['ru']['text6'] = 'Мотоциклы, <br>квадроциклы';
	$language['en']['text6'] = '';
	
	$language['lv']['text7'] = 'Automašīnas';
    $language['ru']['text7'] = 'Легковой транспорт';
	$language['en']['text7'] = '';
	
	$language['lv']['text8'] = 'Kravu pārvadājumi';
    $language['ru']['text8'] = 'Грузовой транспорт и прицепы';
	$language['en']['text8'] = '';
	
	$language['lv']['text9'] = 'Sabiedriskais<br> transports';
    $language['ru']['text9'] = 'Общественный транспорт';
	$language['en']['text9'] = '';
	
	$language['lv']['text10'] = 'Jūras, upju <br> transports';
    $language['ru']['text10'] = 'Морской,речной <br> транспорт';
	$language['en']['text10'] = '';
	
	$language['lv']['text11'] = 'Spec. tehnika';
    $language['ru']['text11'] = 'Спецтехника';
	$language['en']['text11'] = '';
	
	$language['lv']['text12'] = 'Vilcieni, lokomotīves';
    $language['ru']['text12'] = 'Поезда, локомотивы';
	$language['en']['text12'] = '';
	
	$language['lv']['text40'] = 'Privatpersonām';
    $language['ru']['text40'] = 'Частным лицам';
	$language['en']['text40'] = '';
	
	$language['lv']['text13'] = 'Pasūtīt tulīt';
    $language['ru']['text13'] = 'Заказать сейчас';
	$language['en']['text13'] = '';
	
	$language['lv']['text14'] = 'Risinājumi un <br> pakalpojumi';
    $language['ru']['text14'] = 'Решения и<br>Сервисы';
	$language['en']['text14'] = '';
	
	$language['lv']['text15'] = 'Vienkarši problēmu risinājumi';
    $language['ru']['text15'] = 'Простые решения сложных задач';
	$language['en']['text15'] = '';
	
	$language['lv']['text16'] = 'Optimistic';
    $language['ru']['text16'] = 'Optimistic';
	$language['en']['text16'] = 'Optimistic';
	
		$language['lv']['text16-1'] = 'VisiTrack';
		$language['ru']['text16-1'] = 'VisiTrack';
		$language['en']['text16-1'] = 'VisiTrack';
		
		$language['lv']['text16-2'] = 'WayBill Smart ';
		$language['ru']['text16-2'] = 'WayBill Smart ';
		$language['en']['text16-2'] = 'WayBill Smart ';
		
		$language['lv']['text16-3'] = 'TP Security';
		$language['ru']['text16-3'] = 'TP Security';
		$language['en']['text16-3'] = 'TP Security';
		
		$language['lv']['text16-4'] = 'Franšīze';
		$language['ru']['text16-4'] = 'Франшиза';
		$language['en']['text16-4'] = '';
	
	$language['lv']['text17'] = 'Efektīvāks maršruta plāns.<br> (Maršruta plānošana un optimizācija)';
    $language['ru']['text17'] = 'Планируй маршрут эффективнее.<br>
								(Планирование и оптимизация маршрутов)';
	$language['en']['text17'] = '';
	
		$language['lv']['text17-1'] = 'Nosūtīt skaidrus un skaidrus uzdevumus vadītājiem <br> 
										tikai ar vienu klikšķi (uzdevumi draiveriem, kas <br> 
										tiek sūtīti no sistēmas uz tālruni, ar iespēju <br> 
										turpmāk analizēt veiktspēju)';
		$language['ru']['text17-1'] = 'Отправляй чёткие и понятные задания<br> 
										водителям, всего за один клик (задания <br>
										для водителей, которые отправляются с <br>
										системы на телефон, с возможностью дальнейшего <br>
										анализа выполнения)';
		$language['en']['text17-1'] = '';
		
		$language['lv']['text17-2'] = '"Izveidot aizpildītu pavadzīmi <br>
										dažu sekunžu laikā” Automātiskie rēķini';
		$language['ru']['text17-2'] = '«Создавайте готовый путевой <br>
										лист за пару секунд» (автоматическое <br>
										создание путевых листов)';
		$language['en']['text17-2'] = '';
		
		$language['lv']['text17-3'] = 'Risinājumi tālvadības pults drošības uzņēmumiem';
		$language['ru']['text17-3'] = 'Решения для охранных компаний с<br> привязкой к пульту';
		$language['en']['text17-3'] = '';
		
		$language['lv']['text17-4'] = 'Sāciet pelnīt tagad ar TrackPro. Tas ir vienkārši! <br>
										(franšīzes pārdošana partneriem)';
		$language['ru']['text17-4'] = 'Начни зарабатывать прямо сейчас вместе<br>
										с TrackPro. Это просто! (продажа франшизы партнёрам)';
		$language['en']['text17-4'] = '';
	
	$language['lv']['text18'] = 'Konsultācija ar speciālistu';
    $language['ru']['text18'] = 'Консультация со специалистом';
	$language['en']['text18'] = '';
	
	$language['lv']['text19'] = 'Atsevišķi risinājumi';
    $language['ru']['text19'] = 'Индивидуальные решения';
	$language['en']['text19'] = '';
	
	$language['lv']['text20'] = 'Mēs zinām, kā padarīt Jūsu biznesu izdevīgāku.';
    $language['ru']['text20'] = 'Мы знаем, как сделать Ваш бизнес прибыльнее.';
	$language['en']['text20'] = '';
	
	$language['lv']['text21'] = 'Attīstības studijas apraksts, portfolio u.c.';
    $language['ru']['text21'] = 'Описание студии разработок, портфолио и т.д.';
	$language['en']['text21'] = '';
	
	$language['lv']['text22'] = 'Resursu vadības sistēmas';
    $language['ru']['text22'] = 'Системы управления ресурсами';
	$language['en']['text22'] = '';
	
	$language['lv']['text23'] = 'Aktuālie notikumi';
    $language['ru']['text23'] = 'Текущие разработки – трендовые решения';
	$language['en']['text23'] = '';
	
	$language['lv']['text24'] = 'iBeacons';
    $language['ru']['text24'] = 'iBeacons';
	$language['en']['text24'] = 'iBeacons';
	
	$language['lv']['text25'] = 'CRM';
    $language['ru']['text25'] = 'CRM';
	$language['en']['text25'] = 'CRM';
	
	$language['lv']['text26'] = 'Interesanti fakti';
    $language['ru']['text26'] = 'Интересные факты';
	$language['en']['text26'] = '';
	
	$language['lv']['text27'] = 'Mūsu filozofija';
    $language['ru']['text27'] = 'Наша философия';
	$language['en']['text27'] = '';
	
	$language['lv']['text28'] = 'Mēs saprotam, ka mūsu panākumi ir atkarīgi no jūsu 
								panākumiem, tāpēc mēs cenšamies attīstīt un 
								atrast visefektīvāko risinājumu katram klientam. 
								Mēs cīnāmies par kopīgiem panākumiem.';
    $language['ru']['text28'] = 'Мы понимаем, что наш успех напрямую зависит 
								отвашего успеха и поэтому стремимся разработать и подобрать 
								наиболее эффективное решениедля каждого клиента. 
								Мы боремся за совместный успех.';
	$language['en']['text28'] = '';
	
	$language['lv']['text29'] = '38 000 000 <span>KILOMETRI</span>';
    $language['ru']['text29'] = '38 000 000 <span>КИЛОМЕТРОВ</span>';
	$language['en']['text29'] = '';
	
	$language['lv']['text30'] = 'Katru mēnesi nobraukt ar TrackPro';
    $language['ru']['text30'] = 'Ежемесячно проходят вместе с TrackPro';
	$language['en']['text30'] = '';
	
	$language['lv']['text31'] = '41 000 <span>OBJEKTI</span>';
    $language['ru']['text31'] = '41 000 <span>ОБЪЕКТОВ</span>';
	$language['en']['text31'] = '';
	
	$language['lv']['text32'] = 'Mēs uzraugam katru sekundi nosūtam plašu informāciju<br> par objekta darbību.';
    $language['ru']['text32'] = 'Мы мониторим и ежесекундно пережаем развернутую информацию<br> об их деятельности';
	$language['en']['text32'] = '';
	
	$language['lv']['text33'] = 'MĒNESĪ - <br> mazāk laika maršruta plānošanai';
    $language['ru']['text33'] = 'В МЕСЯЦ - <br> меньше времени на<br> планирование маршрутов';
	$language['en']['text33'] = '';
	
	$language['lv']['text34'] = 'Valstīs ir atrodami mūsu klienti';
    $language['ru']['text34'] = 'Стран в которых можно встретить наших клиентов';
	$language['en']['text34'] = '';
	
	$language['lv']['text35'] = 'Apmierināti klienti';
    $language['ru']['text35'] = 'Довольных клиентов';
	$language['en']['text35'] = '';
	
	$language['lv']['text36'] = 'Dažādi risinājumi';
    $language['ru']['text36'] = 'Различных решений';
	$language['en']['text36'] = '';
	
	$language['lv']['text37'] = 'Realizēti projekti';
    $language['ru']['text37'] = 'Реализованных проектов';
	$language['en']['text37'] = '';
	
	$language['lv']['text38'] = 'Moderni data centri';
    $language['ru']['text38'] = 'Современных дата-центров';
	$language['en']['text38'] = '';
	
	$language['lv']['text39'] = 'Kvalificēti specialisti';
    $language['ru']['text39'] = 'Квалифицированных специалистов';
	$language['en']['text39'] = '';

	/***FOOTER***/
	
	$language['lv']['footer1'] = 'Kontakti';
    $language['ru']['footer1'] = 'Контакты';
	$language['en']['footer1'] = '';
	
	$language['lv']['footer2'] = 'TomWare Latvia SIA';
    $language['ru']['footer2'] = 'TomWare Latvia SIA';
	$language['en']['footer2'] = 'TomWare Latvia SIA';
	
	$language['lv']['footer3'] = 'info@tomware.lv';
    $language['ru']['footer3'] = 'info@tomware.lv';
	$language['en']['footer3'] = 'info@tomware.lv';
	
	$language['lv']['footer4'] = '+371 22845568';
    $language['ru']['footer4'] = '+371 22845568';
	$language['en']['footer4'] = '+371 22845568';
	
	$language['lv']['footer5'] = 'P. - Pk. 09:00 - 19:00';
    $language['ru']['footer5'] = 'Пн. - Пт. 09:00 - 19:00';
	$language['en']['footer5'] = '';
	
	$language['lv']['footer6'] = 'Rīga, Dzelzavas 117';
    $language['ru']['footer6'] = 'Rīga, Dzelzavas 117';
	$language['en']['footer6'] = 'Rīga, Dzelzavas 117';
	
	$language['lv']['footer7'] = 'Tehniskais atbalsts';
    $language['ru']['footer7'] = 'Техническая поддержка';
	$language['en']['footer7'] = '';
	
	$language['lv']['footer8'] = 'support@trackpro.lv';
    $language['ru']['footer8'] = 'support@trackpro.lv';
	$language['en']['footer8'] = 'support@trackpro.lv';
	
	$language['lv']['footer9'] = 'P. - Sv. 09:00 - 21:00';
    $language['ru']['footer9'] = 'Пн. - Пт. 09:00 - 21:00';
	$language['en']['footer9'] = '';
	
	$language['lv']['footer10'] = 'Sociālie tīkli';
    $language['ru']['footer10'] = 'Социальные сети';
	$language['en']['footer10'] = '';
	
	$language['lv']['footer11'] = 'Sazinieties ar mums';
    $language['ru']['footer11'] = 'Свяжитесь с нами';
	$language['en']['footer11'] = '';
	
	$language['lv']['footer12'] = 'Jūsu vārds';
    $language['ru']['footer12'] = 'Ваше имя';
	$language['en']['footer12'] = '';
	
	$language['lv']['footer13'] = 'Email';
    $language['ru']['footer13'] = 'Email';
	$language['en']['footer13'] = 'Email';
	
	$language['lv']['footer14'] = 'Telefons';
    $language['ru']['footer14'] = 'Телефон';
	$language['en']['footer14'] = '';
	
	$language['lv']['footer15'] = 'Ziņojums:';
    $language['ru']['footer15'] = 'Сообщение:';
	$language['en']['footer15'] = '';
	
	$language['lv']['footer16'] = 'Nosūtīt';
    $language['ru']['footer16'] = 'Отправить';
	$language['en']['footer16'] = '';
	
?>