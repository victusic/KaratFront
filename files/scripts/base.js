$(document).ready(function(){
	$(".mainB").hover(function(){             
		$(".mainL").css('display', 'block');   
	},function(){           
		$(".mainL").css('display', 'none');            
	});
	$(".catalogB").hover(function(){             
		$(".catalogL").css('display', 'block');   
	},function(){           
		$(".catalogL").css('display', 'none');            
	});
	$(".aboutB").hover(function(){             
		$(".aboutL").css('display', 'block');   
	},function(){           
		$(".aboutL").css('display', 'none');            
	});
	$(".infoB").hover(function(){             
		$(".infoL").css('display', 'block');   
	},function(){           
		$(".infoL").css('display', 'none');            
	});
});