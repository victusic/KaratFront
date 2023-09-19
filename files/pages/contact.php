<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Карат - Контакты</title>
		<link type="image/x-icon" rel="shortcut icon" href="../img/logo.ico">
		<link href="../styles/base.css" rel="stylesheet">
		<link href="../styles/contact_page.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="../scripts/main_page.js"></script>
		<script src="../scripts/base.js"></script>
	</head>
	<body>
		<header class="header">
			<div class="pad">
				<img class="logo" src="../img/logo.png" alt="Карат" onclick="window.location.href ='../../index.php';">
				<div class="name" onclick="window.location.href ='../../index.php';">Карат</div>
				<input type="button" class="navButtons mainB" value="Главная" onclick="window.location.href ='../../index.php';">
				<div class="mainL navigateLines"></div>
				<input type="button" class="navButtons catalogB" value="Каталог" onclick="window.location.href ='catalog.php';">
				<div class="catalogL navigateLines"></div>
				<input type="button" class="navButtons aboutB" value="О нас" onclick="window.location.href ='about.php';">
				<div class="aboutL navigateLines"></div>
				<input type="button" class="navButtons infoB" value="Информация" onclick="window.location.href ='info.php';">
				<div class="infoL navigateLines"></div>
				<input type="button" class="MainBtn navigateBtn" value="Контакты"/>
			</div>
		</header>
		<div class="playa">
			<div class="pad">
				<div class="contactName">Карат</div>
				<div class="card"><iframe src="https://www.google.com/maps/embed?pb=!3m2!1sru!2sru!4v1653122231621!5m2!1sru!2sru!6m8!1m7!1sgKr79FSKCDj1uh6K7rkv9A!2m2!1d44.09874511454146!2d39.07822368758917!3f69.31601865302963!4f2.701204019565452!5f0.7820865974627469" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
				<div class="location">г. Туапсе, ул. Карла Маркса, д.18</div>
				<div class="phone1">+7 (953) - 071 - 66 - 95 (Виктор)</div>
				<div class="phone2">+7 (918) - 183 - 14 - 06 (Вячеслав)</div>
				<div class="phone3">+7 (965) - 164 - 22 - 54 (Андрей)</div>
				<div class="mail">Karat_rielt@mail.ru</div>
			</div>
		</div>
		<footer class="footer">
			<div class="pad">
				<div class="nameF">Карат</div>
				<div class="postF">Pluton production</div>
				<div class="lineF"></div>

				<input type="button" class="footerButtons mainF" value="Главная" onclick="window.location.href ='../../index.php';">
				<input type="button" class="footerButtons catalogF" value="Каталог" onclick="window.location.href ='catalog.php';">
				<input type="button" class="footerButtons aboutF" value="О нас" onclick="window.location.href ='about.php';">
				<input type="button" class="footerButtons infoF" value="Информация" onclick="window.location.href ='info.php';">
				<input type="button" class="contactFA" value="Контакты">
			</div>
		</footer>
	</body>
</html>