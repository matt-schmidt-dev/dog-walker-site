//Burger-Menu Display
document.querySelector('.burger').addEventListener('click', () => {
document.querySelector('.nav-ul-list').classList.toggle('nav-active');
	});


//Parallax Header-Section
jQuery(window).scroll(function() {
  parallax();
});

function parallax() {

  var wScroll = jQuery(window).scrollTop();

  jQuery('.parallax--bg').css('background-position', 'center '+((-185+wScroll)*0.5)+'px');
  /*jQuery('.parallax--test').css('background-position', 'center '+(wScroll*0.5)+'px');*/

}


/*
//Smooth Scrolling Links
jQuery(document).ready(function() {

  jQuery('.menu-item-288').click(function(e){
    e.preventDefault();
    jQuery('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000 );
});
});*/



