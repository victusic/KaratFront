$(document).ready(function(){
	$('#playa').hide();
	$('#last').hide();
	$.getJSON('../php/catalog.php', function(data) {
		for (let i = 0; i < data.Count; i++) {
			$('#txt' + i).html(data[i]['Name']);
			$('#price' + i).html(data[i]['Price'] + " ₽");
			$('#img'+ i).css('background-image', 'url(data:image/jpg;base64,'+ data[i]['Photo'] +')');
		}
		$('#playa2').css('display', 'none');
		$('#playa').show();
	
		let st1 = 1;
		let st2 = 1;
		let st3 = 1;
		let st4 = 1;
		let st5 = 1;
		let dst1 = 0;
		let dst2 = 0;
		let dst3 = 0;
		let dst4 = 0;
		let ast1 = 0;
		let ast2 = 0;
		let ast3 = 0;
		let qst1 = 0;
		let qst2 = 0;
		let mst1 = 0;
		let mst2 = 0;
		let bst1 = 0;
		let bst2 = 0;
		let bst3 = 0;

		$("#Gplate1").bind('click', function(){
			if (st1 == 1) {
				$('#NGp1').slideUp(500);
				$("#Gr12").html('▲');
				st1 = 0;
			}
			else{
				$('#NGp1').slideDown(500);
				$("#Gr12").html('▼');
				st1 = 1;
			}
		});
		$("#Gplate2").bind('click', function(){
			if (st2 == 1) {
				$('#NGp2').slideUp(500);
				$("#Gr22").html('▲');
				st2 = 0;
			}
			else{
				$('#NGp2').slideDown(500);
				$("#Gr22").html('▼');
				st2 = 1;
			}
		});
		$("#Gplate3").bind('click', function(){
			if (st3 == 1) {
				$('#NGp3').slideUp(500);
				$("#Gr32").html('▲');
				st3 = 0;
			}
			else{
				$('#NGp3').slideDown(500);
				$("#Gr32").html('▼');
				st3 = 1;
			}
		});
		$("#Gplate4").bind('click', function(){
			if (st4 == 1) {
				$('#NGp4').slideUp(500);
				$("#Gr42").html('▲');
				st4 = 0;
			}
			else{
				$('#NGp4').slideDown(500);
				$("#Gr42").html('▼');
				st4 = 1;
			}
		});
		$("#Gplate5").bind('click', function(){
			if (st5 == 1) {
				$('#NGp5').slideUp(500);
				$("#Gr52").html('▲');
				st5 = 0;
			}
			else{
				$('#NGp5').slideDown(500);
				$("#Gr52").html('▼');
				st5 = 1;
			}
		});


		$("#rst11").bind('click', function(){
			if (dst1 == 0) {
				$('#st11').animate({height:780},500);
				$("#dst11").html('▼');
				dst1 = 1;
			}
			else{
				$('#st11').animate({height:390},500);
				$("#dst11").html('▲');
				dst1 = 0;
			}
		});
		$("#rst12").bind('click', function(){
			if (dst2 == 0) {
				$('#st12').animate({height:780},500);
				$("#dst12").html('▼');
				dst2 = 1;
			}
			else{
				$('#st12').animate({height:390},500);
				$("#dst12").html('▲');
				dst2 = 0;
			}
		});
		$("#rst13").bind('click', function(){
			if (dst3 == 0) {
				$('#st13').animate({height:780},500);
				$("#dst13").html('▼');
				dst3 = 1;
			}
			else{
				$('#st13').animate({height:390},500);
				$("#dst13").html('▲');
				dst3 = 0;
			}
		});
		$("#rst14").bind('click', function(){
			if (dst4 == 0) {
				$('#st14').animate({height:780},500);
				$("#dst14").html('▼');
				dst4 = 1;
			}
			else{
				$('#st14').animate({height:390},500);
				$("#dst14").html('▲');
				dst4 = 0;
			}
		});

		$("#rst21").bind('click', function(){
			if (ast1 == 0) {
				$('#st21').animate({height:780},500);
				$("#dst21").html('▼');
				ast1 = 1;
			}
			else{
				$('#st21').animate({height:390},500);
				$("#dst21").html('▲');
				ast1 = 0;
			}
		});

		$("#rst22").bind('click', function(){
			if (ast2 == 0) {
				$('#st22').animate({height:780},500);
				$("#dst22").html('▼');
				ast2 = 1;
			}
			else{
				$('#st22').animate({height:390},500);
				$("#dst22").html('▲');
				ast2 = 0;
			}
		});

		$("#rst23").bind('click', function(){
			if (ast3 == 0) {
				$('#st23').animate({height:780},500);
				$("#dst23").html('▼');
				ast3 = 1;
			}
			else{
				$('#st23').animate({height:390},500);
				$("#dst23").html('▲');
				ast3 = 0;
			}
		});

		$("#rst31").bind('click', function(){
			if (qst1 == 0) {
				$('#st31').animate({height:780},500);
				$("#dst31").html('▼');
				qst1 = 1;
			}
			else{
				$('#st31').animate({height:390},500);
				$("#dst31").html('▲');
				qst1 = 0;
			}
		});

		$("#rst32").bind('click', function(){
			if (qst2 == 0) {
				$('#st32').animate({height:780},500);
				$("#dst32").html('▼');
				qst2 = 1;
			}
			else{
				$('#st32').animate({height:390},500);
				$("#dst32").html('▲');
				qst2 = 0;
			}
		});

		$("#rst41").bind('click', function(){
			if (qst1 == 0) {
				$('#st41').animate({height:780},500);
				$("#dst41").html('▼');
				qst1 = 1;
			}
			else{
				$('#st41').animate({height:390},500);
				$("#dst41").html('▲');
				qst1 = 0;
			}
		});

		$("#rst42").bind('click', function(){
			if (qst2 == 0) {
				$('#st42').animate({height:780},500);
				$("#dst42").html('▼');
				qst2 = 1;
			}
			else{
				$('#st42').animate({height:390},500);
				$("#dst42").html('▲');
				qst2 = 0;
			}
		});

		$("#rst51").bind('click', function(){
			if (bst1 == 0) {
				$('#st51').animate({height:780},500);
				$("#dst51").html('▼');
				bst1 = 1;
			}
			else{
				$('#st51').animate({height:390},500);
				$("#dst51").html('▲');
				bst1 = 0;
			}
		});

		$("#rst52").bind('click', function(){
			if (bst2 == 0) {
				$('#st52').animate({height:780},500);
				$("#dst52").html('▼');
				bst2 = 1;
			}
			else{
				$('#st52').animate({height:390},500);
				$("#dst52").html('▲');
				bst2 = 0;
			}
		});

		$("#rst53").bind('click', function(){
			if (bst3 == 0) {
				$('#st53').animate({height:780},500);
				$("#dst53").html('▼');
				bst3 = 1;
				$('#last').show();
			}
			else{
				$('#st53').animate({height:390},500);
				$("#dst53").html('▲');
				bst3 = 0;
				$('#last').hide();
			}
		});

		$('.panlBtn').bind('click', function(){
			$('.fog').css('display', 'flex');
			document.body.style.overflow = 'hidden';
			$('.Tname').html(data[sessionStorage.getItem('GroupId')]['Name']);
			$('.Tlocate').html(data[sessionStorage.getItem('GroupId')]['Location']);
			$('.Ttext').html(data[sessionStorage.getItem('GroupId')]['Description']);
			$('.Timg').css('background-image', 'url(data:image/jpg;base64,'+ data[sessionStorage.getItem('GroupId')]['Photo'] +')');
			$('.Tprice').html(data[sessionStorage.getItem('GroupId')]['Price'] + " ₽");
		});

		$('.Texit').bind('click', function(){
			$('.fog').css('display', 'none');
			document.body.style.overflow = 'visible';
		});

		$(document).keydown(function(e) {
			if (e.keyCode == 27) {
				$('.fog').css('display', 'none');
				document.body.style.overflow = 'visible';
			}
		});

		$('.Blackpad').bind('click', function(){
			$('.fog').css('display', 'none');
			document.body.style.overflow = 'visible';
		});
	});

});
