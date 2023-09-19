$(document).ready(function(){
	$.getJSON('files/php/popular.php', function(data) {
		for (let i = 0; i < data.Count; i++) {
			$('#txt' + i).html(data[i]['Name']);
			$('#price' + i).html(data[i]['Price'] + " ₽");
			$('#img'+ i).css('background-image', 'url(data:image/jpg;base64,'+ data[i]['Photo'] +')');
		}
	});
	$(".ans1").hide();
	$(".ans2").hide();
	$(".ans3").hide();
	let st1 = 0;
	let st2 = 0;
	let st3 = 0;
	$(".que1").bind('click', function(){
		if (st1 == 0) {
			close2();
			close3();
			$('.ans1').slideDown(500);
			$('.que2').animate({
				top: '315px',
			}, 500);
			$('.que3').animate({
				top: '423px',
			}, 500);
			st1 = 1;
			$(".que1").html('1 причина почему мы ▼');
		}
		else{
			close1();
		}
	})

	$(".que2").bind('click', function(){
		if (st2 == 0) {
			close1();
			close3();
			$('.ans2').slideDown(500);
			$('.que3').animate({
				top: '423px',
			}, 500);
			st2 = 1;
			$(".que2").html('2 причина почему мы ▼');
		}
		else{
			close2();
		}
	})

	$(".que3").bind('click', function(){
		if (st3 == 0) {
			close1();
			close2();
			$('.ans3').slideDown(500);
			st3 = 1;
			$(".que3").html('3 причина почему мы ▼');
		}
		else{
			close3();
		}
	})

	function close1(){
		$('.ans1').slideUp(500);
		$('.que2').animate({
			top: '296px',
		}, 500);
		$('.que3').animate({
			top: '404px',
		}, 500);
		st1 = 0;
		$(".que1").html('1 причина почему мы ▲');
	}

	function close2(){
		$('.ans2').slideUp(500);
		$('.que3').animate({
			top: '404px',
		}, 500);
		st2 = 0;
		$(".que2").html('2 причина почему мы ▲');
	}

	function close3(){
		$('.ans3').slideUp(500);
		st3 = 0;
		$(".que3").html('3 причина почему мы ▲');
	}

});