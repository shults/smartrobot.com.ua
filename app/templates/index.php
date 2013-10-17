<!DOCTYPE html>
<!--[if lt IE 7 ]><html  id="ng:app" data-ng-app="Nethouse" class="no-js ie6" lang="ru" xmlns:ng="http://angularjs.org"><![endif]-->
<!--[if IE 7 ]><html id="ng:app"  data-ng-app="Nethouse" class="no-js ie7" lang="ru" xmlns:ng="http://angularjs.org"><![endif]-->
<!--[if IE 8 ]><html id="ng:app"  data-ng-app="Nethouse" class="no-js ie8" lang="ru" xmlns:ng="http://angularjs.org"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html id="ng:app" data-ng-app="Nethouse" class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Раздел online оплаты покупок</title>
    <base href="http://localhost/vados/" />
    <meta name="description" content="Продажа роботов-пылесосов от официального представителя iRobot в Украине. Домашний тест-драйв. Бесплатная доставка по Украине, беспроцентная рассрочка, официальная гарантия. Представительство в ТРЦ &quot;D" >
    <meta name="keywords" content="робот-пылесос, irobot, робот уборщик, автоматический пылесос, официальный представитель irobot" >
    <link rel="shortcut icon" type="image/png" href="http://smartrobot.com.ua/static/img/0000/0000/0664/664669.rtfwuven3p.16x16.png"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/ui-lightness/jquery-ui.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/site.v11111302.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="http://smartrobot.com.ua/css/themes/simple/styles.v11111302.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="http://smartrobot.com.ua/js/library/fancybox/fancybox.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="http://smartrobot.com.ua/css/plugins.v11111302.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="http://smartrobot.com.ua/css/countdown/default/styles.v11111302.css" media="screen" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/doT.min.js"></script>
    <script type="text/javascript" src="js/order.js"></script>
    <script type="text/javascript" src="http://smartrobot.com.ua/js/library/pr/plugins.v1363196721.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://smartrobot.com.ua/js/pr/common.v1379801023.js" charset="utf-8"></script>
    <script type="text/x-template">
        <form action="https://www.liqpay.com/?do=clickNbuy" method="POST">
            <input type="hidden" name="operation_xml" value="{{=xml_encoded}}" />
            <input type="hidden" name="signature" value="{{=sign}}" />
            <input class="button pay" type="submit" name="process" value="Оплатить">
        </form>
    </script>
</head>
<body id="top-body" data-html-version="11111302" data-ng-controller="BlocksController" data-ng-init="moduleId = 1" data-lang="ru_RU" data-tld="ru" style="">
<?php
$id_merchant = 'i2992350515'; // ID Мерчанта.
$result_url = 'http://smartrobot.com.ua'; // URL при успешном платеже, куда отправят покупателя.
$server_url = 'http://smartrobot.com.ua'; // Проверка платежа на сервере.
$merc_sign = 'YnkRCb0fh6ZspQU1ykG6H8SLkv8Ug7nmrk6fNk0mX'; // Сама подпись.
$price = '10'; // Стоимость покупки
$xml="<request>
      <version>1.2</version>
      <merchant_id>$id_merchant</merchant_id>
      <result_url>$result_url</result_url>
      <server_url>$server_url</server_url>
      <order_id>".md5(microtime())."</order_id>
      <amount>$price</amount>
      <currency>UAH</currency>
      <description>Оплата товара на сайте smartrobot.com.ua</description>
      <default_phone></default_phone>
      <pay_way>card</pay_way>
      <goods_id>".$product_id."</goods_id>
</request>";
//$xml=iconv('windows-1251','utf-8',$xml); // это нужно только если у вас кодировка НЕ utf, а, например, win-1251
$sign = base64_encode(sha1($merc_sign . $xml . $merc_sign,1));
$xml_encoded = base64_encode($xml);
// $product_id - ID товара, который мы продаем.
?>
<div id="main-wrapper" style="height: 100%; overflow: inherit; margin-top: auto; ">	
	<div id="wrapper">
		<div class="bg">
			<div class="bg_top"></div>
			<div class="bg_mid"></div>
			<div class="bg_bottom"></div>
		</div>
		<div id="container" class="wrapperBlock">
			<div id="wrapper-window" style="display:none"></div>
               <div id="sidebar" data-ng-controller="SidebarController">
				<section id="company-logo">
					<link rel="image_src" href="http://smartrobot.com.ua/static/img/0000/0000/0664/664640.rix6p0oa43.W215.jpg" /><a href="http://smartrobot.com.ua/"><img src="http://smartrobot.com.ua/static/img/0000/0000/0664/664640.rix6p0oa43.W215.jpg" alt="" style="max-width:215px;"/></a>
				</section>   
				<nav id="main-menu" class="">
					<ul>
						<li id="lnk-1" data-sort="0" class="active disable-sort" data-loc=mainpage data-label="Главная"><a href="http://smartrobot.com.ua/"><span class="active-link">Главная</span></a></li>
						<li id="lnk-2" data-sort="1" data-label="Беспроцентная рассрочка"><a href="http://smartrobot.com.ua/rassrochka-kredit">Беспроцентная рассрочка</a></li>
						<li id="lnk-3" data-sort="2" data-label="Домашний тест-драйв"><a href="http://smartrobot.com.ua/irobot-home-test">Домашний тест-драйв</a></li>
						<li id="lnk-4" data-sort="3" data-label="Сравнение моделей"><a href="http://smartrobot.com.ua/compare">Сравнение моделей</a></li>
						<li id="lnk-5" data-sort="4" data-label="Вопрос - ответ"><a href="http://smartrobot.com.ua/faq">Вопрос - ответ</a></li>
						<li id="lnk-6" data-sort="5" data-label="Гарантия и сервис"><a href="http://smartrobot.com.ua/guarantee-service">Гарантия и сервис</a></li>
						<li id="lnk-7" data-sort="6" data-label="Доставка и оплата"><a href="http://smartrobot.com.ua/delivery_payment">Доставка и оплата</a></li>
						<li id="lnk-8" data-sort="7" data-label="Видео iRobot"><a href="http://smartrobot.com.ua/video">Видео iRobot</a></li>
						<li id="lnk-9" data-sort="8" data-label="Статьи/Блог"><a href="http://smartrobot.com.ua/articles">Статьи/Блог</a></li>
						<li id="lnk-10" data-sort="9" data-label="Уход за роботами"><a href="http://smartrobot.com.ua/kak-uhazhivat-za-irobot">Уход за роботами</a></li>
						<li id="lnk-11" data-sort="10"   data-label="Контактная информация"><a href="http://smartrobot.com.ua/contacts">Контактная информация</a></li>
					</ul>
				</nav>
				<div id="products-catalog-left">
					<h2><a href="http://smartrobot.com.ua/products">Каталог роботов-пылесосов</a></h2>
					<ul class="categories test">
						<li><a href="http://smartrobot.com.ua/products/category/18473">Роботы-пылесосы Roomba</a></li>
						<li><a href="http://smartrobot.com.ua/products/category/18472">Роботы-пылесосы Scooba</a></li>
						<li><a href="http://smartrobot.com.ua/products/category/441368">Роботы-полотеры Braava (Mint)</a></li>
						<li><a href="http://smartrobot.com.ua/products/category/133468">Роботы для чистки бассейнов</a></li>
						<li><a href="http://smartrobot.com.ua/products/category/38632">Роботы для мойки окон Windoro</a></li>
						<li><a href="http://smartrobot.com.ua/products/category/140963">Аксессуары для iRobot Roomba</a></li>
						<li><a href="http://smartrobot.com.ua/products/category/187586">Аксессуары для iRobot Scooba</a></li>
					</ul>
				</div>
				<section id="contactsmain-left" data-block-id="18" class="block-18 widget-sort widget-left widget-block">
					<header class="infoPlate"><h1><a href="http://smartrobot.com.ua/contacts">Контактная информация</a></h1></header>	
					<div id="contactsmain-left-show" class="content-block">
						<script src="https://maps.google.com/maps/api/js?v=3.8&amp;sensor=false&amp;language=ru" type="text/javascript"></script>
						<ul>
							<li class="li-address"><i class="theme-icon address-icon forexplain" data-faq="Адреса"></i>
								<span class="address-container">
									<span class="address-value" >Киев, ТРЦ &quot;Dream Town-2&quot;, Оболонский проспект, 21Б</span>
									<br />
									<a href="http://smartrobot.com.ua/contacts/showmap/38536/0" class="blue ymap" data-host="nethouse.ru" data-lang="ru_RU">Посмотреть на карте</a>
								</span>
							</li>
							<li><i class="theme-icon phone-icon forexplain" data-faq="Телефоны"></i>(097) 298-58-47</li>
							<li><i class="theme-icon clock-icon forexplain" data-faq="Часы работы"></i>с 10.00 до 21.00</li>
							<li><i class="theme-icon email-icon forexplain" data-faq="E-mail"></i><a href="mailto:office@smartrobot.com.ua">office@smartrobot.com.ua</a></li>
						</ul>
					</div>
				</section>
				<section id="search-left" data-block-id="13" class="block-13 widget-sort widget-left  widget-block block-type addable">
					<header class="infoPlate"><h1>Поиск</h1></header>
					<div id="search-left-show" class="content-block">
						<div>
							<div class="ya-site-form ya-site-form_inited_no" onclick="return {'bg': 'transparent', 'target': '_self', 'language': 'ru', 'suggest': true, 'tld': 'ru', 'site_suggest': true, 'action': 'http://smartrobot.com.ua/search', 'webopt': false, 'fontsize': 14, 'arrow': false, 'fg': '#000000', 'searchid': '1965677', 'logo': 'rb', 'websearch': false, 'type': 2}">
								<form action="http://yandex.ru/sitesearch" method="get" target="_self">
									<input type="hidden" name="searchid" value="1965677" />
									<input type="hidden" name="l10n" value="ru" />
									<input type="hidden" name="reqenc" value="" />
									<input type="text" name="text" value="" />
									<input type="submit" value="Найти" />
								</form>
							</div>
							<style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style>
							<script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;(' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1&&(e.className+=' ya-page_js_yes');s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
						</div>
					</div>
				</section>
				<section id="statcounters-left" data-block-id="14" class="block-14 widget-sort widget-left  widget-block ">
					<div id="statcounters-left-show" class="content-block">
						<div class="statcounters-list"></div>
					</div>
				</section>
			</div>
			<section id="content" data-ng-controller="ContentController">
				<header class="site-header">
					<div id="header-wrapper">
						<section id="topcontacts" data-block-id="15" class="block-15 widget-sort onmain widget on-view widget-block">
							<div data-ng-non-bindable class="content-block" id="topcontacts-show">
								<ul>
									<li class="phone-number"><span class="infoDigits"> (097)</span> 298-58-47</li>
									<li class="phone-number"><span class="infoDigits"> (063)</span> 418-14-51</li>
									<li class="feedback icon" ><i></i><a href="" class="blue underline feedback-btn" data-type="0">Напишите нам</a></li>
								</ul>
							</div>
						</section>
						<section id="slogan" data-block-id="2" class="block-2 widget-sort onmain widget	 on-view widget-block">
							<div  class="content-block" id="slogan-show">
								<h1 class="child">
									<span style="font-family: arial, helvetica, sans-serif; font-size: 18px; font-weight: bolder;">Smart Robot</span>
									<span style="font-family: arial, helvetica, sans-serif; color: #808080; font-size: 24px;">
										<span style="font-size: 18px;"><br />Официальный представитель iRobot в Украине</span>
										<br style="font-family: arial, helvetica, sans-serif; color: #888888; font-size: 24px; font-style: italic; font-weight: bolder;" />
									</span>
								</h1>
							</div>
						</section>
					</div>
				</header>
				<section id="products" data-block-id="8" class="block-8 widget-sort on-plate onmain widget	 on-view widget-block">
					<header class="infoPlate ">
						<h1>Роботы-пылесосы для сухой уборки Roomba</h1>
					</header>
					<div data-ng-non-bindable class="content-block" id="products-show">
						<article class="products-wrap res-wrapper">
							<div class="product-item inline" id="item1466990">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/1466990"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/4961/4961923.e4aokjrv7c.156x120.png?1" class="product-preview-img" alt="Робот-пылесос iRobot Roomba 620" title="Робот-пылесос iRobot Roomba 620" /></div></a><p><a href="http://smartrobot.com.ua/products/1466990" class="blue">iRobot Roomba 620</a><span class="price"><span class="product-price-data" data-cost="3800">3800</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
                                    <input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item1846618">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/1846618"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/5972/5972118.9f1a562v1i.156x120.png?1" class="product-preview-img" alt="Робот-пылесос iRobot Roomba 650" title="Робот-пылесос iRobot Roomba 650" /></div></a><p><a href="http://smartrobot.com.ua/products/1846618" class="blue">iRobot Roomba 650</a><span class="price"><span class="product-price-data" data-cost="4700">4700</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item310144">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/310144"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/1667/1667060.c0678em9u6.156x120.png?1" class="product-preview-img" alt="Робот-пылесос iRobot Roomba 760" title="Робот-пылесос iRobot Roomba 760" /></div></a><p><a href="http://smartrobot.com.ua/products/310144" class="blue">iRobot Roomba 760</a><span class="old-price"><span class="product-price-data" data-cost="6400">6400</span> грн.</span><span class="price sale-price"><span class="product-price-data" data-cost="5970">5970</span> грн.<span class="sale-icon inline"></span></span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item159569">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/159569"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/0867/867698.hvphl6k4m6.156x120.png?1" class="product-preview-img" alt="Робот-пылесос iRobot Roomba 770" title="Робот-пылесос iRobot Roomba 770" /></div></a><p><a href="http://smartrobot.com.ua/products/159569" class="blue">iRobot Roomba 770</a><span class="old-price"><span class="product-price-data" data-cost="6970">6970</span> грн.</span><span class="price sale-price"><span class="product-price-data" data-cost="6270">6270</span> грн.<span class="sale-icon inline"></span></span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item159666">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/159666"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/0867/867983.2cahqt2n6v.156x120.png?1" class="product-preview-img" alt="Робот-пылесос iRobot Roomba 780" title="Робот-пылесос iRobot Roomba 780" /></div></a><p><a href="http://smartrobot.com.ua/products/159666" class="blue">iRobot Roomba 780</a><span class="old-price"><span class="product-price-data" data-cost="7970">7970</span> грн.</span><span class="price sale-price"><span class="product-price-data" data-cost="6970">6970</span> грн.<span class="sale-icon inline"></span></span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item387183">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/387183"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/2022/2022631.quvaw4k19m.156x120.png?1" class="product-preview-img" alt="Робот-пылесос iRobot Roomba 790" title="Робот-пылесос iRobot Roomba 790" /></div></a><p><a href="http://smartrobot.com.ua/products/387183" class="blue">iRobot Roomba 790</a><span class="old-price"><span class="product-price-data" data-cost="9970">9970</span> грн.</span><span class="price sale-price"><span class="product-price-data" data-cost="8970">8970</span> грн.<span class="sale-icon inline"></span></span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div id="item115866" class="product-item inline">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/115866"><div><img title="Робот-пылесос iRobot Roomba 521" alt="Робот-пылесос iRobot Roomba 521" class="product-preview-img" src="http://smartrobot.com.ua/static/img/0000/0000/0664/664641.dmvovzpeer.156x120.png?1"></div></a><p><a class="blue" href="http://smartrobot.com.ua/products/115866">iRobot Roomba 521</a><span class="price"><span data-cost="3600" class="product-price-data">3600</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div id="item158871" class="product-item inline">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/158871"><div><img title="Робот-пылесос iRobot Roomba 555" alt="Робот-пылесос iRobot Roomba 555" class="product-preview-img" src="http://smartrobot.com.ua/static/img/0000/0000/0864/864540.3yfd4u3k65.156x120.png?1"></div></a><p><a class="blue" href="http://smartrobot.com.ua/products/158871">iRobot Roomba 555</a><span class="price"><span data-cost="4500" class="product-price-data">4500</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
						</article>
					</div>
				</section>
				<section id="products" data-block-id="8" class="block-8 widget-sort on-plate onmain widget on-view widget-block">
					<header class="infoPlate ">
						<h1>Роботы-пылесосы для влажной уборки Scooba</h1>
					</header>
					<div data-ng-non-bindable class="content-block" id="products-show">
						<article class="products-wrap res-wrapper">
							<div class="product-item inline" id="item158860">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/158860"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/0864/864412.riqe2x5l9q.156x120.png?1" class="product-preview-img" alt="Моющий робот-пылесос iRobot Scooba 385" title="Моющий робот-пылесос iRobot Scooba 385" /></div></a><p><a href="http://smartrobot.com.ua/products/158860" class="blue">iRobot Scooba 385</a><span class="old-price"><span class="product-price-data" data-cost="6300">6300</span> грн.</span><span class="price sale-price"><span class="product-price-data" data-cost="6000">6000</span> грн.<span class="sale-icon inline"></span></span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item310157">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/310157"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/1667/1667295.l3trp2oj05.156x120.png?1" class="product-preview-img" alt="Моющий робот-пылесос iRobot Scooba 390" title="Моющий робот-пылесос iRobot Scooba 390" /></div></a><p><a href="http://smartrobot.com.ua/products/310157" class="blue">iRobot Scooba 390</a><span class="old-price"><span class="product-price-data" data-cost="6700">6700</span> грн.</span><span class="price sale-price"><span class="product-price-data" data-cost="6500">6500</span> грн.<span class="sale-icon inline"></span></span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
							<div class="product-item inline" id="item310170">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/310170"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/1667/1667434.k3t2fh8svr.156x120.png?1" class="product-preview-img" alt="Моющий робот-пылесос iRobot Scooba 230" title="Моющий робот-пылесос iRobot Scooba 230" /></div></a><p><a href="http://smartrobot.com.ua/products/310170" class="blue">iRobot Scooba 230</a><span class="price"><span class="product-price-data" data-cost="3600">3600</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
						</article>
					</div>
				</section>
				<section id="products" data-block-id="8" class="block-8 widget-sort on-plate onmain widget	 on-view widget-block">
					<header class="infoPlate ">
						<h1>Роботы-полотеры Braava (Mint)</h1>
					</header>
					<div data-ng-non-bindable class="content-block" id="products-show">
						<article class="products-wrap res-wrapper">
							<div class="product-item inline" id="item4309983">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/4309983"><div><img src="http://smartrobot.com.ua/static/img/0000/0001/1751/11751362.hwuaz1oru5.156x120.png?1" class="product-preview-img" alt="iRobot Braava 380" title="iRobot Braava 380" /></div></a><p><a href="http://smartrobot.com.ua/products/4309983" class="blue">iRobot Braava 380</a><span class="price"><span class="product-price-data" data-cost="4100">4100</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
						</article>
					</div>
				</section>
				<section id="products" data-block-id="8" class="block-8 widget-sort on-plate onmain widget	 on-view widget-block">
					<header class="infoPlate ">
						<h1>Роботы для чистки бассейнов</h1>
					</header>
					<div data-ng-non-bindable class="content-block" id="products-show">
						<article class="products-wrap res-wrapper">
							<div class="product-item inline" id="item3789271">
							<div class="wrapper"><a href="http://smartrobot.com.ua/products/3789271"><div><img src="http://smartrobot.com.ua/static/img/0000/0001/0413/10413140.4ox2v2nji1.156x120.png?1" class="product-preview-img" alt="Робот для бассейнов iRobot Mirra 530 — фото, описание" title="Робот для бассейнов iRobot Mirra 530 — фото, описание" /></div></a><p><a href="http://smartrobot.com.ua/products/3789271" class="blue">iRobot Mirra 530</a><span class="price"><span class="product-price-data" data-cost="15900">15900</span> грн.</span></p>
                                <input class="button pay" type="button" name="process" value="Оплатить online">
                                <input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
						</article>
					</div>
				</section>
				<section id="products" data-block-id="8" class="block-8 widget-sort on-plate onmain widget	 on-view widget-block">
					<header class="infoPlate ">
						<h1>Роботы для мойки окон Windoro</h1>
					</header>
					<div data-ng-non-bindable class="content-block" id="products-show">
						<article class="products-wrap res-wrapper">
							<div class="product-item inline" id="item310201">
								<div class="wrapper"><a href="http://smartrobot.com.ua/products/310201"><div><img src="http://smartrobot.com.ua/static/img/0000/0000/1667/1667528.584olspr1r.156x120.png?1" class="product-preview-img" alt="Робот для мойки окон Windoro WCR-I001" title="Робот для мойки окон Windoro WCR-I001" /></div></a><p><a href="http://smartrobot.com.ua/products/310201" class="blue">Windoro WCR-I001</a><span class="price"><span class="product-price-data" data-cost="6700">6700</span> грн.</span></p>
                                    <input class="button pay" type="button" name="process" value="Оплатить online">
									<input class="button" type="submit" name="process" value="Рассрочка online">
								</div>
							</div>
						</article>
					</div>
				</section>
			</section>
		</div>
		<footer id="footer">
			<section id="additional-info">
				<div id="footer-text" class="footer-color">
					<div id="footer-edit" class="on-edit"></div>
					<span id="footertext1">2013 © Smart Robot</span>
                    <br/><span id="footertext2">iRobot. Do You?</span>
				</div>
			</section>
		</footer>
	</div>
	<div id="for-explain"></div>
	<div id="up-link">
		<div class="inner-lnk"><a class="blue underline" href="#top-body">Наверх</a><i></i></div>
	</div>
</div>
</body>
</html>
