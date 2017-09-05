
$(function(){
var getawayCategory = function(){
	if (document.location.href.indexOf('-living') != -1){
		return "custom-living-room-furniture";
	}
	if (document.location.href.indexOf('-dining') != -1){
		return "custom-dining-room-furniture";
	}
	if (document.location.href.indexOf('-bedroom') != -1){
		return "custom-bedroom-room-furniture";
	}
}
var userRegionId = function(){
	if (document.location.href.indexOf('furniture.com') != -1){
		return getSession('PortalRegionId');
	}
	else {
		return "180";
	}
}
var userRegionAv = function(){
	if (document.location.href.indexOf('furniture.com') != -1){
		return decodeURIComponent(getCookie(getCookieName('AvRegions'), 'AvRegions'));
	}else {
		return "3700";
	}
}
//var getawayCategory
var getawayInit;		
//var userRegionId;
//var userRegionAv;
var getawayURL;
var getawayCollectionURL;
var activeCollection;
var activeSwatch;
var collectionName;
var swatchName;
var pgNum;

checkOnInit();

	function checkOnInit(){
		var getawayURL = '//search.blueport.com/sites/asi/?hawktype=search&output=xml&regionid='+userRegionId()+'&availabilityregionid='+userRegionAv()+'&lpurl=/search/v/make-it-you/custom-bedroom-furniture&mpp=75';
		
		console.log(getawayURL);
		getawaySearchResults(getawayURL);
	}

	function isCollectionSelected(){
		if($('ul.asi-collection-list li').hasClass('active')){
			return true;
		}
		else{
			return false;
		}
	}

	function isSwatchSelected(){
		if($('ul.asi-swatch-list li').hasClass('active')){
			return true;
		}
		else{
			return false;
		}
	}

	function getawaySearchSelections(){
		var getawayURL = '//search.blueport.com/sites/asi/?hawktype=search&output=xml&regionid='+userRegionId()+'&availabilityregionid='+userRegionAv()+'&lpurl=/search/v/make-it-you/custom-bedroom-furniture&mpp=75';
		var getawayBaseURL = '//search.blueport.com/sites/asi/?hawktype=search&output=xml&regionid='+userRegionId()+'&availabilityregionid='+userRegionAv()+'&lpurl=/search/v/make-it-you/custom-bedroom-furniture&mpp=75';

		if((isCollectionSelected() == true)&&(isSwatchSelected() == false)){
			var collectionName = $('ul.asi-collection-list li.active').attr('data-web-name').toString();				
			var getawayURL = getawayBaseURL+'&keyword='+collectionName;

			$('#asi-getaway-search-results').empty();
			getawaySearchResults(getawayURL);
			console.log(getawayURL);
		}
		else if((isCollectionSelected() == false)&&(isSwatchSelected() == true)){
			var swatchName = $('ul.asi-swatch-list li.active').attr('data-swatch-name').toString();
			var swatchItemKey = $('ul.asi-swatch-list li.active').attr('data-item-key').toString();
			var getawayURL = getawayBaseURL+'&keyword='+swatchItemKey+'+'+swatchName;
			
			$('#asi-getaway-search-results').empty();
			getawaySearchResults(getawayURL);
			console.log(getawayURL);
		}
		else if((isCollectionSelected() == true)&&(isSwatchSelected() == true)){
			var collectionName = $('ul.asi-collection-list li.active').attr('data-web-name').toString();
			var swatchName = $('ul.asi-swatch-list li.active').attr('data-swatch-name').toString();
			var swatchItemKey = $('ul.asi-swatch-list li.active').attr('data-item-key').toString();
			var getawayURL = getawayBaseURL+'&keyword='+collectionName+'+'+swatchItemKey+'+'+swatchName;
			
			$('#asi-getaway-search-results').empty();
			getawaySearchResults(getawayURL);
			console.log(getawayURL);
		}
		else{
			var getawayURL = getawayBaseURL;
			$('#asi-getaway-search-results').empty();
			getawaySearchResults(getawayURL);
			console.log(getawayURL);
		}
	}
	
	$('#asi-cancel-btn, #asi-done-button').on('click', function(){
		$('#collapseSwatch').collapse('toggle');
	});
	$('#asi-done-button').on('click', function(){
		$('#collapseSwatch').collapse('toggle');
	});
	$('#asi-swatch-panel-heading').on('click', function(){
		$('#collapseSwatch').collapse('toggle');
	});
	$('#asi-collection-panel-heading').on('click', function(){
			$('#collapseSwatch').collapse('toggle');
	});

	$('ul.asi-collection-list li').on('click', function(e){
		var filterName = '.'+$(this).attr('data-web-name').toString();
			if($(this).hasClass('disabled')){
				$("ul[class*='asi-collection'] li").removeClass('active disabled');
				$(this).addClass('active');
				$('ul.asi-swatch-list li').removeClass('active disabled').not(filterName).addClass('disabled');
				getawaySearchSelections();
			}
			else if($(this).hasClass('active')){
				$("ul[class*='asi-collection'] li").removeClass('active');
				getawaySearchSelections();
			}
			else{
				$('ul.asi-collection-list li').removeClass('active');
				$(this).addClass('active').removeClass('disabled');
				$('ul.asi-swatch-list li').removeClass('disabled').not(filterName).addClass('disabled');
				getawaySearchSelections();
			}
			
	});
	$('ul.asi-swatch-list li').on('click', function(e){
		var filterName = '.'+$(this).attr('data-item-key').toString();
			if($(this).hasClass('disabled')){
				$("ul[class*='asi-swatch'] li").removeClass('active disabled');
				$(this).addClass('active');
				$('ul.asi-collection-list li').removeClass('active disabled').not(filterName).addClass('disabled');
				getawaySearchSelections();
			}
			else if($(this).hasClass('active')){
				$("ul[class*='asi-swatch'] li").removeClass('active');
				getawaySearchSelections();
			}
			else{
				$('ul.asi-swatch-list li').removeClass('active');
				$(this).addClass('active').removeClass('disabled');
				$('ul.asi-collection-list li').removeClass('disabled').not(filterName).addClass('disabled');
				getawaySearchSelections();
			}
			
	});

	$('button#asi-getaway-clear').click(function(e){
		$("ul[class*='asi-collection'] li").removeClass('active disabled');
		$('ul.asi-swatch-list li').removeClass('active disabled');
		checkOnInit();
	});

	$('.asi-swatch-blocks').hover(
		function(){
			$(this).popover('show');
		},
		function(){
			$(this).popover('hide');	
		}
	);

	function getawaySearchResults(getawayURL){
		$('.asi-loading-spinner').show().removeClass('hidden');
		$.ajax({ 
			type: 'GET',
			url: getawayURL,
			global: true,
			dataType: "xml",
			cache: false,
			async:false,
			success: function (xml){
		  	$('.asi-loading-spinner').hide().addClass('hidden');
		    var currPage = $(xml).find('CurrentPage').text();
		    var currResults = $(xml).find('NofResults').text();
		    var numPages = $(xml).find('NofPages').text();

		    console.log('Pages: '+numPages+' | Results: '+currResults);

		    $(xml).find('Custom').each(function(index,i){
		      var pnames = $(this).find('name').text();
		      var pname = pnames.replace('- ','<br>');
		      var purl = $(this).find('url').text();
		      var pimage = $(this).find('image_url').text();
		      var psku = $(this).find('sku').text();
		      var pitemid = $(this).find('unique_id').text();
		      var pcollection = $(this).find('collection_1').text();
		      var pcolor = $(this).find('color_facet_1').text();
		      var pfinish = $(this).find('finish_family_1').text();
		      var pmaterial = $(this).find('material_1').text();
		      var pmaterialFamily = $(this).find('material_family_1').text();
		      var ppiece = $(this).find('piece_family_1').text();
		      var pitemtype = $(this).find('item_type_id').text();
		      var pprice = $(this).find('price').text();
		      var pretailprice = $(this).find('retail_price').text();
		      var ppromoprice = $(this).find('promotion_price').text();
		      var pstarrating = $(this).find('rating').text();

		        $('#asi-getaway-search-results').append('<div class="col-md-4 col-sm-4 col-xs-6"><div class="search-product-result" itemscope="" itemtype="http://schema.org/Product" style="position:relative;"><div class="product-details" data-item-type="'+pitemtype+'" data-sku-id="'+psku+'" data-item-id="'+pitemid+'" data-collection-id="'+pcollection+'" data-color-id="'+pcolor+'" data-finish-id="'+pfinish+'" data-material-id="'+pmaterial+'" data-material-family-id="'+pmaterialFamily+'" data-piece-id="'+ppiece+'"><div class="asi-addtocart-icon"><span class="glyphicon glyphicon-shopping-cart"></span></div><div class="hs-product-image-wrapper"><a href="'+purl+'" title="'+pname+'"><img class="img-responsive pimage" src="https://content.valuecityfurniture.com/ProductImages/0/'+pimage+'?impolicy=product-576x576" alt="'+purl+'"></a></div><div class="search-pr-text clearfix"><span class="search-was-price">was&nbsp;<span style="text-decoration: line-through;">$'+pretailprice+'<br></span></span><span class="search-normal-price"><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="'+pprice+'">$'+pprice+'</span></span></span><span class="search-today-price"><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="'+pprice+'">$'+pprice+'</span></span></span><br><div class="product-name"><a href="'+purl+'" class="product-name-link search-product-title">'+pname+'</a></div></div></div></div>');
			      if(parseInt(pretailprice) > parseInt(pprice)){
			      	$('span.search-was-price').show();
			      	$('span.search-today-price').show();
			      	$('span.search-normal-price').hide();
			      }else{
			      	$('span.search-was-price').hide();
			      	$('span.search-today-price').hide();
			      	$('span.search-normal-price').show();
			      }
			   });
		    	$('a.search-product-title br').remove();
		   	}
		});
	}
	$('ul.asi-collection-list-mobile').slick({
	    dots: true,
	    arrows: false,
	    infinite: true,
	    centermode: true,
	    slidesToShow: 6,
	    slidesToScroll: 6,
	    responsive: [
	    {
	        breakpoint: 850,
	        settings: {
	          slidesToShow: 6,
	          slidesToScroll: 6,
	          infinite: true
	        }
	      },
	      {
	        breakpoint: 768,
	        settings: {
	          slidesToShow: 4,
	          slidesToScroll: 4,
	          infinite: true,
	          dots: true,
	          arrows:false
	        }
	      },
	      {
	        breakpoint: 600,
	        settings: {
	          slidesToShow: 3,
	          slidesToScroll: 3,
	          infinite: true,
	          dots: true,
	          arrows:false
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          slidesToShow: 3,
	          slidesToScroll: 3,
	          infinite: true,
	          dots: true,
	          arrows:false
	        }
	      }
	    ]
	});
	$('button.slick-next').html('&#xf105;');
	$('button.slick-prev').html('&#xf104;');
});