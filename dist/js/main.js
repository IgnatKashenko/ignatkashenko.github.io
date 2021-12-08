$(document).on('click', '.video__controll__img', function() {
	var $video = $('#video'),
		src = $video.attr('src');

	$video.attr('src', src + '&autoplay=1');
	$('#video').addClass('show').removeClass('hide');
	$('.video__preview__img').addClass('hide').removeClass('show');
	$('.video__controll').addClass('hide').removeClass('show');
});

$(document).on('click', '.peculiarity__vision', function() {
	$('.peculiarity__vision .registration__peculiarity__img').addClass('regist__active');
	$('.peculiarity__hearing .registration__peculiarity__img').removeClass('regist__active');
	$('.peculiarity__movement .registration__peculiarity__img').removeClass('regist__active');
	$('.peculiarity__vision .registration__peculiarity__text').addClass('regist__text__active');
	$('.peculiarity__hearing .registration__peculiarity__text').removeClass('regist__text__active');
	$('.peculiarity__movement .registration__peculiarity__text').removeClass('regist__text__active');
});
$(document).on('click', '.peculiarity__hearing', function() {
	$('.peculiarity__vision .registration__peculiarity__img').removeClass('regist__active');
	$('.peculiarity__hearing .registration__peculiarity__img').addClass('regist__active');
	$('.peculiarity__movement .registration__peculiarity__img').removeClass('regist__active');
	$('.peculiarity__vision .registration__peculiarity__text').removeClass('regist__text__active');
	$('.peculiarity__hearing .registration__peculiarity__text').addClass('regist__text__active');
	$('.peculiarity__movement .registration__peculiarity__text').removeClass('regist__text__active');
});
$(document).on('click', '.peculiarity__movement', function() {
	$('.peculiarity__vision .registration__peculiarity__img').removeClass('regist__active');
	$('.peculiarity__hearing .registration__peculiarity__img').removeClass('regist__active');
	$('.peculiarity__movement .registration__peculiarity__img').addClass('regist__active');
	$('.peculiarity__vision .registration__peculiarity__text').removeClass('regist__text__active');
	$('.peculiarity__hearing .registration__peculiarity__text').removeClass('regist__text__active');
	$('.peculiarity__movement .registration__peculiarity__text').addClass('regist__text__active');
});
