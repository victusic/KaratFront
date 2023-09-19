<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Карат - Каталог</title>
		<link type="image/x-icon" rel="shortcut icon" href="../img/logo.ico">
		<link href="../styles/base.css" rel="stylesheet">
		<link href="../styles/catalog_page.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="../scripts/catalog_page.js"></script>
		<script src="../scripts/base.js"></script>
	</head>
	<body>
		<div class="fog">
			<div class="Blackpad"></div>
			<div class="Tplate">
				<div class="Timg"></div>
				<div class="Tname">Название</div>
				<div class="Ttext">Описание</div>
				<div class="Tlocate">Адрес</div>
				<div class="Tprice">0 ₽</div>
				<input type="button" class="MainBtn Tbutton" value="Связаться" onclick="window.location.href ='contact.php';" />
				<div class="Texit">╳</div>
			</div>
		</div>

		<header class="header">
			<div class="pad">
				<img class="logo" src="../img/logo.png" alt="Карат" onclick="window.location.href ='../../index.php';">
				<div class="name" onclick="window.location.href ='../../index.php';">Карат</div>
				<input type="button" class="navButtons mainB" value="Главная" onclick="window.location.href ='../../index.php';">
				<div class="mainL navigateLines"></div>
				<input type="button" class="navButtons catalogBA" value="Каталог">
				<div class="catalogLA navigateLines"></div>
				<input type="button" class="navButtons aboutB" value="О нас" onclick="window.location.href ='about.php';">
				<div class="aboutL navigateLines"></div>
				<input type="button" class="navButtons infoB" value="Информация" onclick="window.location.href ='info.php';">
				<div class="infoL navigateLines"></div>
				<input type="button" class="MainBtn navigateBtn" value="Контакты" onclick="window.location.href ='contact.php';"/>
			</div>
		</header>
		<div class="playa2" id="playa2">
			<div class="pad">
				<div class="loader"></div>
				<div class="shadow"></div>
			</div>
		</div>
		
		<div class="playa" id="playa">
			<div class="pad">
				<div class="plateN" id="Gplate1">
					<div class="ZgText">Квартиры</div>
					<div class="ZgText2" id="Gr12">▼</div>
				</div>
				<div id="NGp1">
					<div class="plateD" id="rst11">
						<div class="MlText">Студия</div>
						<div class="MlText2" id="dst11">▲</div>
					</div>
					<div class="Rlplaya" id="st11">
						<div class="popular1">
							<div class="Plogo" id="img0"></div>
							<div class="Ptext" id="txt0">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price0">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '0');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img1"></div>
							<div class="Ptext" id="txt1">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price1">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '1');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img2"></div>
							<div class="Ptext" id="txt2">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price2">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '2');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img3"></div>
							<div class="Ptext" id="txt3">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price3">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать"  onclick="sessionStorage.setItem('GroupId', '3');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img4"></div>
							<div class="Ptext" id="txt4">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price4">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '4');"/>
						</div>
					</div>
					<div class="plateD" id="rst12">
						<div class="MlText" >1-комнатные квартиры</div>
						<div class="MlText2" id="dst12">▲</div>
					</div>
					<div class="Rlplaya" id="st12">
						<div class="popular1">
							<div class="Plogo" id="img5"></div>
							<div class="Ptext" id="txt5">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price5">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '5');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img6"></div>
							<div class="Ptext" id="txt6">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price6">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '6');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img7"></div>
							<div class="Ptext" id="txt7">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price7">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '7');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img8"></div>
							<div class="Ptext" id="txt8">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price8">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '8');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img9"></div>
							<div class="Ptext" id="txt9">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price9">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '9');"/>
						</div>
					</div>
					<div class="plateD" id="rst13">
						<div class="MlText" >2-комнатные квартиры</div>
						<div class="MlText2" id="dst13">▲</div>
					</div>
					<div class="Rlplaya" id="st13">
						<div class="popular1">
							<div class="Plogo" id="img10"></div>
							<div class="Ptext" id="txt10">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price10">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '10');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img11"></div>
							<div class="Ptext" id="txt11">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price11">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '11');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img12"></div>
							<div class="Ptext" id="txt12">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price12">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '12');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img13"></div>
							<div class="Ptext" id="txt13">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price13">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '13');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img14"></div>
							<div class="Ptext" id="txt14">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price14">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '14');"/>
						</div>
					</div>
					<div class="plateD" id="rst14">
						<div class="MlText">3-комнатные и более квартиры</div>
						<div class="MlText2" id="dst14">▲</div>
					</div>	
					<div class="Rlplaya" id="st14">
						<div class="popular1">
							<div class="Plogo" id="img15"></div>
							<div class="Ptext" id="txt15">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price15">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '15');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img16"></div>
							<div class="Ptext" id="txt16">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price16">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '16');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img17"></div>
							<div class="Ptext" id="txt17">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price17">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '17');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img18"></div>
							<div class="Ptext" id="txt18">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price18">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '18');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img19"></div>
							<div class="Ptext" id="txt19">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price19">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '19');"/>
						</div>
					</div>
				</div>
				<div class="plateN" id="Gplate2">
					<div class="ZgText">Дома</div>
					<div class="ZgText2" id="Gr22">▼</div>
				</div>
				<div id="NGp2">
					<div class="plateD" id="rst21">
						<div class="MlText">Дома</div>
						<div class="MlText2" id="dst21">▲</div>
					</div>
					<div class="Rlplaya" id="st21">
						<div class="popular1">
							<div class="Plogo" id="img20"></div>
							<div class="Ptext" id="txt20">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price20">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '20');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img21"></div>
							<div class="Ptext" id="txt21">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price21">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '21');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img22"></div>
							<div class="Ptext" id="txt22">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price22">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '22');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img23"></div>
							<div class="Ptext" id="txt23">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price23">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '23');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img24"></div>
							<div class="Ptext" id="txt24">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price24">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '14');"/>
						</div>
					</div>
					<div class="plateD" id="rst22">
						<div class="MlText">Коттеджи</div>
						<div class="MlText2" id="dst22">▲</div>
					</div>
					<div class="Rlplaya" id="st22">
						<div class="popular1">
							<div class="Plogo" id="img25"></div>
							<div class="Ptext" id="txt25">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price25">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '25');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img26"></div>
							<div class="Ptext" id="txt26">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price26">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '26');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img27"></div>
							<div class="Ptext" id="txt27">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price27">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '27');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img28"></div>
							<div class="Ptext" id="txt28">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price28">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '28');"/>
						</div>
					</div>
					<div class="plateD" id="rst23">
						<div class="MlText">Дачи</div>
						<div class="MlText2" id="dst23">▲</div>
					</div>
					<div class="Rlplaya" id="st23">
						<div class="popular1">
							<div class="Plogo" id="img29"></div>
							<div class="Ptext" id="txt29">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price29">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '29');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img30"></div>
							<div class="Ptext" id="txt30">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price30">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '30');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img31"></div>
							<div class="Ptext" id="txt31">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price31">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '31');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img32"></div>
							<div class="Ptext" id="txt32">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price32">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '32');"/>
						</div>
					</div>
				</div>
				<div class="plateN" id="Gplate3">
					<div class="ZgText">Земельные участки</div>
					<div class="ZgText2" id="Gr32">▼</div>
				</div>
				<div id="NGp3">
					<div class="plateD" id="rst31">
						<div class="MlText">ИЖС</div>
						<div class="MlText2" id="dst31">▲</div>
					</div>
					<div class="Rlplaya" id="st31">
						<div class="popular1">
							<div class="Plogo" id="img33"></div>
							<div class="Ptext" id="txt33">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price33">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '33');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img34"></div>
							<div class="Ptext" id="txt34">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price34">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '34');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img35"></div>
							<div class="Ptext" id="txt35">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price35">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '35');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img36"></div>
							<div class="Ptext" id="txt36">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price36">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '36');"/>
						</div>
					</div>
					<div class="plateD" id="rst32">
						<div class="MlText">Земельные участки коммерческого назначения</div>
						<div class="MlText2" id="dst32">▲</div>
					</div>
					<div class="Rlplaya" id="st32">
						<div class="popular1">
							<div class="Plogo" id="img37"></div>
							<div class="Ptext" id="txt37">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price37">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '37');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img38"></div>
							<div class="Ptext" id="txt38">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price38">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '38');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img39"></div>
							<div class="Ptext" id="txt39">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price39">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '39');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img40"></div>
							<div class="Ptext" id="txt40">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price40">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '40');"/>
						</div>
					</div>
				</div>
				<div class="plateN" id="Gplate4">
					<div class="ZgText">Гаражи</div>
					<div class="ZgText2" id="Gr42">▼</div>
				</div>
				<div id="NGp4">
					<div class="plateD" id="rst41">
						<div class="MlText">Жилые гаражи</div>
						<div class="MlText2" id="dst41">▲</div>
					</div>
					<div class="Rlplaya" id="st41">
						<div class="popular1">
							<div class="Plogo" id="img41"></div>
							<div class="Ptext" id="txt41">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price41">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '41');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img42"></div>
							<div class="Ptext" id="txt42">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price42">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '42');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img43"></div>
							<div class="Ptext" id="txt43">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price43">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '43');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img44"></div>
							<div class="Ptext" id="txt44">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price44">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '44');"/>
						</div>
					</div>
					<div class="plateD" id="rst42">
						<div class="MlText">Обычные гаражи</div>
						<div class="MlText2" id="dst42">▲</div>
					</div>
					<div class="Rlplaya" id="st42">
						<div class="popular1">
							<div class="Plogo" id="img45"></div>
							<div class="Ptext" id="txt45">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price45">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '45');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img46"></div>
							<div class="Ptext" id="txt46">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price46">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '46');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img47"></div>
							<div class="Ptext" id="txt47">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price47">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '47');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img48"></div>
							<div class="Ptext" id="txt48">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price48">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '48');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img49"></div>
							<div class="Ptext" id="txt49">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price49">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '49');"/>
						</div>
					</div>
				</div>
				<div class="plateN" id="Gplate5">
					<div class="ZgText">Коммерческая недвижимость</div>
					<div class="ZgText2" id="Gr52">▼</div>
				</div>
				<div id="NGp5">
					<div class="plateD" id="rst51">
						<div class="MlText">Гостиницы</div>
						<div class="MlText2" id="dst51">▲</div>
					</div>
					<div class="Rlplaya" id="st51">
						<div class="popular1">
							<div class="Plogo" id="img50"></div>
							<div class="Ptext" id="txt50">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price50">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '50');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img51"></div>
							<div class="Ptext" id="txt51">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price51">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '51');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img52"></div>
							<div class="Ptext" id="txt52">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price52">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '52');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img60"></div>
							<div class="Ptext" id="txt60">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price60">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '60');"/>
						</div>
					</div>
					<div class="plateD" id="rst52">
						<div class="MlText">Магазины, офисы, склады</div>
						<div class="MlText2" id="dst52">▲</div>
					</div>
					<div class="Rlplaya" id="st52">
						<div class="popular1">
							<div class="Plogo" id="img53"></div>
							<div class="Ptext" id="txt53">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price53">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '53');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img54"></div>
							<div class="Ptext" id="txt54">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price54">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '54');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img55"></div>
							<div class="Ptext" id="txt55">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price55">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '55');"/>
						</div>
						<div class="popular4">
							<div class="Plogo" id="img56"></div>
							<div class="Ptext" id="txt56">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price56">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '56');"/>
						</div>
						<div class="popular5">
							<div class="Plogo" id="img62"></div>
							<div class="Ptext" id="txt62">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price62">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '62');"/>
						</div>
					</div>
					<div class="plateD" id="rst53">
						<div class="MlText">ПСН</div>
						<div class="MlText2" id="dst53">▲</div>
					</div>
					<div class="Rlplaya" id="st53">
						<div class="popular1">
							<div class="Plogo" id="img57"></div>
							<div class="Ptext" id="txt57">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price57">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '57');"/>
						</div>
						<div class="popular2">
							<div class="Plogo" id="img58"></div>
							<div class="Ptext" id="txt58">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price58">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '58');"/>
						</div>
						<div class="popular3">
							<div class="Plogo" id="img59"></div>
							<div class="Ptext" id="txt59">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price59">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '59');"/>
						</div>
						<div class="popular4" id="last">
							<div class="Plogo" id="img61"></div>
							<div class="Ptext" id="txt61">Описание  места описание места описание места описание места описание места описание места описание места </div>
							<div class="Pprice" id="price61">0 ₽</div>
							<input type="button" class="MainBtn panlBtn" value="Выбрать" onclick="sessionStorage.setItem('GroupId', '61');"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="pad">
				<div class="nameF">Карат</div>
				<div class="postF">Pluton production</div>
				<div class="lineF"></div>

				<input type="button" class="footerButtons mainF" value="Главная" onclick="window.location.href ='../../index.php';">
				<input type="button" class="catalogFA" value="Каталог">
				<input type="button" class="footerButtons aboutF" value="О нас" onclick="window.location.href ='about.php';">
				<input type="button" class="footerButtons infoF" value="Информация" onclick="window.location.href ='info.php';">
				<input type="button" class="footerButtons contactF" value="Контакты" onclick="window.location.href ='contact.php';">
			</div>
		</footer>
	</body>
</html>