<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Карат - Главная</title>
		<link type="image/x-icon" rel="shortcut icon" href="files/img/logo.ico">
		<link href="files/styles/base.css" rel="stylesheet">
		<link href="files/styles/main_page.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="files/scripts/main_page.js"></script>
		<script src="files/scripts/base.js"></script>
	</head>
	<body>
		<header class="header">
			<div class="pad">
				<img class="logo" src="files/img/logo.png" alt="Карат">
				<div class="name">Карат</div>
				<input type="button" class="navButtons mainBA" value="Главная">
				<div class="mainLA navigateLines"></div>
				<input type="button" class="navButtons catalogB" value="Каталог" onclick="window.location.href ='files/pages/catalog.php';">
				<div class="catalogL navigateLines"></div>
				<input type="button" class="navButtons aboutB" value="О нас" onclick="window.location.href ='files/pages/about.php';">
				<div class="aboutL navigateLines"></div>
				<input type="button" class="navButtons infoB" value="Информация" onclick="window.location.href ='files/pages/info.php';">
				<div class="infoL navigateLines"></div>
				<input type="button" class="MainBtn navigateBtn" value="Контакты" onclick="window.location.href ='files/pages/contact.php';"/>
			</div>
		</header>
		<div class="preview">
			<div class="pad">
				<div class="previewGtext">Здесь твой будущий дом</div>
				<div class="previewtext">С нами, вы сможете купить или продать недвижимость без хлопот и волнений!<br>Коммерция от магазинов и складов до гостиниц и пансионатов!</div>
				<input type="button" class="MainBtn previewBtn" value="За мечтой" onclick="window.location.href ='files/pages/catalog.php';"/>
				<img src="files/img/main1.png" class="previewImg1" alt="Изображение дома" />
				<img src="files/img/main2.png" class="previewImg2" alt="Изображение дома" />
				<img src="files/img/main3.png" class="previewImg3" alt="Изображение дома" />
			</div>
		</div>
		<div class="popular">
			<div class="PadW"></div>
			<div class="PadB"></div>
			<div class="pad">
				<div class="popularText">Популярное</div>
				<div class="popularShowAll" onclick="window.location.href ='files/pages/catalog.php';">Смотреть весь каталог →</div>
				<div class="popular1">
					<div class="Plogo" id="img0"></div>
					<div class="Ptext" id="txt0">Описание  места описание места описание места описание места описание места описание места описание места </div>
					<div class="Pprice" id="price0">0 ₽</div>
					<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="window.location.href ='files/pages/catalog.php';"/>
				</div>
				<div class="popular2">
					<div class="Plogo" id="img1"></div>
					<div class="Ptext" id="txt1">Описание  места описание места описание места описание места описание места описание места описание места </div>
					<div class="Pprice" id="price1">0 ₽</div>
					<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="window.location.href ='files/pages/catalog.php';"/>
				</div>
				<div class="popular3">
					<div class="Plogo" id="img2"></div>
					<div class="Ptext" id="txt2">Описание  места описание места описание места описание места описание места описание места описание места </div>
					<div class="Pprice" id="price2">0 ₽</div>
					<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="window.location.href ='files/pages/catalog.php';"/>
				</div>
			</div>
		</div>
		<div class="team">
			<div class="pad">
				<div class="teamText">Наш коллектив</div>
				<div class="teamAbout"  onclick="window.location.href ='files/pages/about.php';">Узнать больше о наc →</div>
				<img src="files/img/main4.png" class="teamImg1" alt="Виктор" />
				<img src="files/img/main5.png" class="teamImg2" alt="Вячеслав" />
				<img src="files/img/main6.png" class="teamImg3" alt="Андрей" />
				<div class="teamName1 teamNames">Виктор</div>
				<div class="teamName2 teamNames">Вячеслав</div>
				<div class="teamName3 teamNames">Андрей</div>
				<div class="teamAbout1 teamAboutS">
						Ведущий специалист в области коммерческой недвижимости.Имеет длительный опыт и 6 лет стажа.
						<br><br>
						Телефон  +7 (953) - 071 - 66 - 95 
				</div>
				<div class="teamAbout2 teamAboutS">
						Знает город лучше, чем кто-либо! Подберет вам квартиру или дом в Туапсе в точности по вашему запросу. 
						<br><br>
						Телефон +7 (918) - 183 - 14 - 06
				</div>
				<div class="teamAbout3 teamAboutS">
						Наш главный бизнес-аналитик. Если вас интересует недвижимость в районе и пригороде - звоните Андрею!
						<br><br>
						Телефон +7 (965) - 164 - 22 - 54 
				</div>
			</div>
		</div>
		<div class="reasons">
			<div class="pad">
				<div class="reasonsText">Почему именно мы?</div>
				<div class="reasonsWhy" onclick="window.location.href ='files/pages/info.php';">Почему нам стоит доверять  →</div>
				<img src="files/img/main7.png" class="reasonsImg" alt="Офис" />
				<div class="que1">1 причина почему мы ▲</div>
				<div class="que2">2 причина почему мы ▲</div>
				<div class="que3">3 причина почему мы ▲</div>
				<div class="ans1">C нами надежнее всего!</div>
				<div class="ans2">C нами быстрее всего!</div>
				<div class="ans3">Мы работает в Туапсе - лучшем городе</div>
			</div>
		</div>
		<footer class="footer">
			<div class="pad">
				<div class="nameF">Карат</div>
				<div class="postF">Pluton production</div>
				<div class="lineF"></div>

				<input type="button" class="mainFA" value="Главная">
				<input type="button" class="footerButtons catalogF" value="Каталог" onclick="window.location.href ='files/pages/catalog.php';">
				<input type="button" class="footerButtons aboutF" value="О нас" onclick="window.location.href ='files/pages/about.php';">
				<input type="button" class="footerButtons infoF" value="Информация" onclick="window.location.href ='files/pages/info.php';">
				<input type="button" class="footerButtons contactF" value="Контакты" onclick="window.location.href ='files/pages/contact.php';">
			</div>
		</footer>
	</body>
</html>