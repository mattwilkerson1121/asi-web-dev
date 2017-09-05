/*
 * This is a JavaScript Scratchpad.
 *
 * Enter some JavaScript, then Right Click or choose from the Execute Menu:
 * 1. Run to evaluate the selected text (Cmd-R),
 * 2. Inspect to bring up an Object Inspector on the result (Cmd-I), or,
 * 3. Display to insert the result in a comment after the selection. (Cmd-L)
 */

  $('#hawkitemlist > .search-matrix > .clearfix').remove();
    var productGridHeight = +$('#hawkitemlist > .search-matrix > .search-product-result:eq(1)').height();
    var productGridWidth = +$('#hawkitemlist > .search-matrix > .search-product-result:eq(1)').width();

   $('#hawkitemlist > .search-matrix > .search-product-result:eq(0)').before('<div class="search-product-result col-lg-4 col-md-4 col-sm-4 col-xs-6 search-inline-promo"><div id="inlinePromoBox" style="position:relative;padding:0;margin:0;"><a href="/search?ref=ilp" class="inlinePromoLink" style="padding:0;margin:0;"><img class="inlinePromoImg" src="https://asf.scene7.com/is/image/ASF/IL_Offer_235x304?fmt=png" border="0" style="position:relative;display:inline-block;border:0;max-width:100%;padding:0;margin:0;"/></a></div></div>');
   $('.search-matrix > .search-product-result:nth-child(3n)').after('<div id="clearfix4n" class="clearfix" style="width:100%"></div>');
   $('#clearfix4n').addClass('hidden-xs');

   var offsetTop = (productGridHeight - $('.inlinePromoImg').height())/2;
   var offsetLeft = (productGridWidth - $('.inlinePromoImg').width())/2;
  
$('#inlinePromoBox').css({'height':productGridHeight+'px', 'width': productGridWidth+'px', 'background-color': '#E5002B', 'max-width': '100%'});
  $('.inlinePromoImg').css({'padding-top': offsetTop, 'padding-left': offsetLeft, 'max-width': '100%'});  

//$('.search-matrix-promo').css('margin-top', productGridTopCenter+'px');
/*
$('.search-product-result').css({'padding-bottom':'0','margin-bottom':'0','border-bottom':'1px dotted #EDEDED'});
$('.search-matrix').css({'border-left':'1px dotted #EDEDED','border-top':'1px dotted #EDEDED'});
$('.pad20').css('padding-top','0');
$('.hs-product-image-wrapper').css('border-top','none');
$('.search-product-result:nth-child(2n)').css({'border-left':'1px dotted #EDEDED', 'border-right':'1px dotted #EDEDED'});
*/
