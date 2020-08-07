
// execute setelah Posisi sScroll
$(window).scroll(function(){

	var wScroll = $(this).scrollTop();

		if( wScroll > $('#wrapper1').offset().top-220) {
			$('#wrapper1 .animfadedown').addClass('tampil');
			$('#wrapper1 .animfadeup').addClass('tampil');
		}
		if( wScroll > $('#wrapper2').offset().top-220) {
			$('#wrapper2 .animfaderight').addClass('tampil');
			$('#wrapper2 .animfadeleft').addClass('tampil');
		}
		if( wScroll > $('#wrapper3').offset().top-220) {
			$('#wrapper3 .animfaderight').addClass('tampil');
			$('#wrapper3 .animfadeleft').addClass('tampil');
		}

	console.log(wScroll);
	
});



