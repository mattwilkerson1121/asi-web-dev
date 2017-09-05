$(function(){
	$('.search-product-result:eq(1)').before('<div class="search-product-result">'+
		'<div class="hs-product-image-wrapper">'+
			'<img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/07WK2Y17_Box_Spring_Offer?fmt=png" alt="inline-promo-1-alt-text">'+
		'</div>'+
	'</div>'
	);
	$('.search-product-result:eq(5)').after('<div class="asi-inline-banner">'+
			'<img src="https://asf.scene7.com/is/image/ASF/spacer?hei=5">'+
		'</div>'+
  		'<div class="asi-inline-banner">'+
  			'<img class="img-responsive" src="https://asf.scene7.com/is/image/ASF/D_GB_Free_Deliv?fmt=png" alt="inline-promo-banner-alt-text">'+
  		'</div>'+
  		'<div class="asi-inline-banner">'+
  			'<img src="https://asf.scene7.com/is/image/ASF/spacer?hei=5">'+
  		'</div>'
  	);
});