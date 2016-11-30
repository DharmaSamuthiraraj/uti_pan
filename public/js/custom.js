(function() {
if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) {
var msViewportStyle = document.createElement("style");
msViewportStyle.appendChild(
document.createTextNode("@-ms-viewport{width:auto!important}")
);
document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
}
})();

/*$(window).load(function() {
   $("#loading").fadeOut(500);
})*/

$(document).ready(function() {
 var nice = $("html").niceScroll({cursorcolor:"#0c77bd", cursorwidth: "8px", cursorborder: "0 solid #fff"});
  
  $('#services-slider').owlCarousel({
    loop:true,
	dots:false,
	nav:false,
	autoplay:true,
	autoplayTimeout:2000,
	autoplayHoverPause:true,
    margin:0,
    responsiveClass:true,
    themeClass: 'btn-theme3',
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        1000:{
            items:4
        }
    }
  });
    
  $('#home-slider').owlCarousel({
    loop:true,
	dots:false,
	nav:true,
    items: 1,
    margin:0,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsiveClass:true,
    themeClass: 'btn-theme1'
  });
  
  
});

  //Forgot Password Div
  function ClearLogin(){
	$('.toggle').hide("");
  }
  $(function() {
	$('#toggle').click(function() {
		$('.toggle').slideToggle('fast');
		return false;
	});
  });
  
$('#cart-table, #subscribed-table, #expired-table, #pending-table').cardtable({myClass:'stacktable small-only' });
$('#performance-table').stacktable({myClass:'stacktable small-only'});

$('.navbar-default .navbar-nav > li.dropdown').hover(function() {
		$('ul.dropdown-menu', this).stop(true, true).slideDown(370);
		$(this).addClass('open');
	}, function() {
		$('ul.dropdown-menu', this).stop(true, true).slideUp(370);
		$(this).removeClass('open');
   });


function ImageHeight(){
  var win = $(this);
  if (win.width() >= 769) {
	 $('.why-choose-img').css('display','block');
	 $('.why-choose-img-mob').css('display','none');
	 $('.why-choose-img').height($('.why-choose-holder').height());
  } else {
	  $('.why-choose-img').css('display','none');
	  $('.why-choose-img-mob').css('display','block');
  }
}
ImageHeight();
$(window).on('resize', function(){
  ImageHeight();
});