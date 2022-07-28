$(document).ready(function(){
	var altura = $(.menu).offset().top;/*Esta variable va a guardar el espacio que hay entre el menu y el sitio */
	$(window).on('scroll', function){
		if ($(window).scrollTop()>altura) {
			$('.menu').addClass('menu-fixed');
		} else{
			$('.menu').removeClass('menu-fixed');
		}
	}
});
