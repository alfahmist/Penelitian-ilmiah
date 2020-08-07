
// execute setelah Posisi sScroll
$(window).scroll(function(){

	var wScroll = $(this).scrollTop();

		if( wScroll >= 5 ) {
			$('nav').addClass('nav-anim');
		} else if ( wScroll < 5 ) {
			$('nav').removeClass('nav-anim');
		}
	
});
$(document).ready(function(){
  $(".nav li").on("click", function() {
      $(".nav li").removeClass("active");
      $(this).addClass("active");
    });
});



