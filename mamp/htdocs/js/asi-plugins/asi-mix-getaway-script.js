$(function(){
		
	$('.header-banner-page-element').remove();
		
		var isGetawayPageType = function(){
			if (document.location.href.indexOf('/make-it-you/custom-') != -1){
				return true;
			}
		}
		if (document.location.href.indexOf('/custom-living-') != -1){
			var getawayCategory = "custom-living-room-furniture";
		}
		if (document.location.href.indexOf('/custom-dining-') != -1){
			var getawayCategory = "custom-dining-room-furniture";
		}
		if (document.location.href.indexOf('/custom-bedroom-') != -1){
			var getawayCategory = "custom-bedroom-room-furniture";
		}

		if (document.location.href.indexOf('furniture.com') != -1){
			var userRegionId = getSession('PortalRegionId');
		}
		else {
			var userRegionId = "180";
		}
		if (document.location.href.indexOf('furniture.com') != -1){
			var userRegionAv = decodeURIComponent(getCookie(getCookieName('AvRegions'), 'AvRegions'));
		}else {
			var userRegionAv = "3700";
		}
		var getawayInit;		
		var getawayURL;
		var getawayCollectionURL;
		var activeCollection;
		var activeSwatch;
		var collectionName;
		var swatchName;
		var pgNum;


		checkOnInit();

			function checkOnInit(){
				var getawayURL = 'http://search.blueport.com/sites/asi/?hawktype=search&output=xml&regionid='+userRegionId+'&availabilityregionid='+userRegionAv+'&lpurl=/search/v/make-it-you/'+getawayCategory;
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
				var getawayURL = 'http://search.blueport.com/sites/asi/?hawktype=search&output=xml&regionid='+userRegionId+'&availabilityregionid='+userRegionAv+'&lpurl=/search/v/make-it-you/'+getawayCategory;
				var getawayBaseURL = 'http://search.blueport.com/sites/asi/?hawktype=search&output=xml&regionid='+userRegionId+'&availabilityregionid='+userRegionAv+'&lpurl=/search/v/make-it-you/'+getawayCategory;
	
				if((isCollectionSelected() == true)&&(isSwatchSelected() == false)){
					var collectionName = $('ul.asi-collection-list li.active').attr('data-facet').toString();				
					var getawayURL = getawayBaseURL+'&collection_1='+collectionName;
					
					$('ul.asi-swatch-list li').not(filterName).addClass('disabled');

					$('#asi-getaway-search-results').empty();
					getawaySearchResults(getawayURL);
				}
				else if((isCollectionSelected() == false)&&(isSwatchSelected() == true)){
					var swatchName = $('ul.asi-swatch-list li.active').attr('data-swatch-name').toString();
					var getawayURL = getawayBaseURL+'&keyword='+swatchName;
					
					$('ul.asi-collection-list li').not(filterName).addClass('disabled');
					
					$('#asi-getaway-search-results').empty();
					getawaySearchResults(getawayURL);
				}
				else if((isCollectionSelected() == true)&&(isSwatchSelected() == true)){
					var collectionName = $('ul.asi-collection-list li.active').attr('data-facet').toString();
					var swatchName = $('ul.asi-swatch-list li.active').attr('data-swatch-name').toLowerCase();
					var getawayURL = getawayBaseURL+'&collection_1='+collectionName+'&keyword='+swatchName;
					if(getawayCategory != "custom-living-room-furniture"){
						$('.asi-getaway-clear').removeClass('hidden');
					}
					$('#asi-getaway-search-results').empty();
					getawaySearchResults(getawayURL);
				}
				else{
					var getawayURL = getawayBaseURL;
					$('#asi-getaway-search-results').empty();
					getawaySearchResults(getawayURL);
				}
			}


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

					        $('#asi-getaway-search-results').append('<div class="col-md-4 col-sm-4 col-xs-6">\
					        	<div class="search-product-result" itemscope="" itemtype="http://schema.org/Product" style="position:relative;">\
					        	<div class="product-details" data-item-type="'+pitemtype+'" data-sku-id="'+psku+'" data-item-id="'+pitemid+'" \
					        	data-collection-id="'+pcollection+'" data-color-id="'+pcolor+'" data-finish-id="'+pfinish+'" data-material-id="'+pmaterial+'" \
					        	data-material-family-id="'+pmaterialFamily+'" data-piece-id="'+ppiece+'">\
					        	<div class="asi-addtocart-icon"><span class="glyphicon glyphicon-shopping-cart"></span></div>\
					        	<div class="hs-product-image-wrapper">\
					        	<a href="'+purl+'" title="'+purl+'"><img class="img-responsive pimage" \
					        	src="https://content.valuecityfurniture.com/ProductImages/0/'+pimage+'?impolicy=product-576x576" alt="'+purl+'"></a></div>\
					        	<div class="search-pr-text clearfix">\
					        	<span class="search-was-price">was&nbsp;<span style="text-decoration: line-through;">$'+pretailprice+'<br></span></span>\
					        	<span class="search-normal-price"><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">\
					        	<span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="'+pprice+'">$'+pprice+'</span></span>\
					        	</span><span class="search-today-price"><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">\
					        	<span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="'+pprice+'">$'+pprice+'</span></span></span>\
					        	<br><div class="product-name"><a href="'+purl+'" class="product-name-link search-product-title">'+pname+'</a></div></div>\
					        	</div></div>');
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
				  	
		        		$('.asi-page-results').bootpag({
		            		total: numPages,
							maxVisible: 5,
							maxVisible: 5,
							leaps: false,
							firstLastUse: false,
							wrapClass: 'pagination',
							activeClass: 'active',
							disabledClass: 'disabled',
							nextClass: 'next',
							prevClass: 'prev',
							lastClass: 'last',
							firstClass: 'first'
						}).on('page', function(event, num){
							$('#asi-getaway-search-results').empty();
							getawaySearchResults(getawayURL+'&pg='+num);
						});
				   	} // end success callback
				}); // end ajax call
			}

			$('#asi-cancel-btn, #asi-done-button').on('click', function(){
				$('#collapseSwatch').collapse('toggle');
			});
			$('#asi-done-button').on('click', function(){
				$('#collapseSwatch').collapse('toggle');
			});

			if(getawayCategory = 'custom-living-room-furniture'){
				$('ul.asi-collection-list li').on('click', function(e){
					if($(this).hasClass('active')){
						$(this).removeClass('active');
						console.log(getawaySearchSelections());

					}else{
						$(this).addClass('active').siblings('.active').removeClass('active');
						//getawaySearchSelections(getawayURL);
						console.log(getawaySearchSelections());
					}
				});
				$('ul.asi-swatch-list li').on('click', function(e){
					if($(this).hasClass('active')){
						$(this).removeClass('active');
						console.log(getawaySearchSelections());

					}else{
						$(this).addClass('active').siblings('.active').removeClass('active');
						//getawaySearchSelections(getawayURL);
						console.log(getawaySearchSelections());
					}
				});
				$('.asi-collection-list').slick({
				    dots: false, arrows: true, infinite: false, slidesToShow: 7, slidesToScroll: 7, responsive:[
				    { breakpoint: 980, settings: { slidesToShow: 5, slidesToScroll: 5, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 768, settings: { slidesToShow: 4, slidesToScroll: 4, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 600, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2, infinite: true, dots: false, arrows:true }}
				    ]
				});	
			}
			if(getawayCategory = 'custom-dining-room-furniture'){
				$('ul.asi-collection-list li').on('click', function(e){
					var filterName = '.'+$(this).attr('data-web-name').toLowerCase();
					$('ul.asi-swatch-list li').removeClass('active disabled');
					//$("ul[class*='asi-collection'] li").removeClass('active disabled');
					
						if($(this).hasClass('active')){
							$("ul[class*='asi-collection'] li").removeClass('active disabled');
						}else{
							$(this).addClass('active').siblings('.active').removeClass('active');
							$('ul.asi-swatch-list li').not(filterName).addClass('disabled');
						}
				  	
				  	getawaySearchSelections();
				});

				$('ul.asi-swatch-list li').on('click', function(e){
					var filterName = '.'+$(this).attr('data-item-key').toLowerCase();
					$('ul.asi-collection-list li').removeClass('active disabled');
					//$("ul[class*='asi-swatch'] li").removeClass('active disabled');
					
					
					if ($(this).hasClass('active')){
							$("ul[class*='asi-swatch'] li").removeClass('active disabled');
					}else{
							$(this).addClass('active').siblings('.active').removeClass('active');
							$('ul.asi-collection-list li').not(filterName).addClass('disabled');
						}
				  	
				  	getawaySearchSelections();
				});
				

				$('button#asi-getaway-clear').click(function(e){
					$("ul[class*='asi-collection'] li").removeClass('active disabled');
					$('ul.asi-swatch-list li').removeClass('active disabled');
					checkOnInit();
				});

				$('.asi-collection-list').slick({
				    dots: false, arrows: true, infinite: false, slidesToShow: 5, slidesToScroll: 5, responsive:[
				    { breakpoint: 980, settings: { slidesToShow: 5, slidesToScroll: 5, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 768, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 600, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2, infinite: true, dots: false, arrows:true }}
				    ]
				});	
			}

			if(getawayCategory = 'custom-bedroom-furniture'){
				$('.asi-collection-list').slick({
				    dots: false, arrows: true, infinite: false, slidesToShow: 6, slidesToScroll: 6, responsive:[
				    { breakpoint: 980, settings: { slidesToShow: 6, slidesToScroll: 6, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 768, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 600, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: false, arrows:true }},
				    { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2, infinite: true, dots: false, arrows:true }}
				    ]
				});	
			}
			$('button.slick-next').html('&#xf105;');
			$('button.slick-prev').html('&#xf104;');
		});