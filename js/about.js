$(window).scroll(function(){

	var wScroll = $(this).scrollTop();



	if( wScroll > $('#proses1').offset().top-250) {
		$('#proses1.animfadeleft ').addClass('tampil');
	}
	if( wScroll > $('#proses2').offset().top-400) {
		$('#proses2.animfadeleft ').addClass('tampil');
	}
	if( wScroll > $('#proses3').offset().top-500) {
		$('#proses3.animfadeleft ').addClass('tampil');
	}



	console.log(wScroll);
	
});	