$(document).ready(function(){
	$('.banner-top-home .banners').owlCarousel2({
	  margin: 0,
	  items: 3,
	  nav: false,
	  navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	  autoplay: 400,
	  autoWidth: false,
	  dots: true,
	  responsive: {
	    0:  { items: 2 } ,
	    480: { items:2 },
	    768: { items: 3 }
	  },
	});
	$('.product-item-content').matchHeight();
});