		var articleKeysArray;
		var artKeyIndex;
		var featureImg = $(".au-product-main-image").attr("src").replace("product-650x650","product-320x320");
		var sku = $("span.product-id-label").text();
		console.log(sku);

		var obj;

		var cKeyOrder;
		var cKey;
		var swatchImgURL;
		var item_id;
		var product_id;
		var pdpURL;	

		var dataens;

		var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+sku;

		$.ajax({
			method:"GET",
			dataType: "json",
			url: url,
			success: success_handler
		});

		function success_handler(data){
		    var obj = data;
			console.log(obj);

			if (obj == "Unable to suggest any outfits based on the currently selected anchor item(s)") {
			// do nothing; no results found
				$("#mixboard-ui").hide();
				$("#asi-mix-browse-style").hide();
			}
			else {
				var ens; 
				// replace the img src of the featured product defaults in the html
				// featured product is always returned in the 0 position
				// of the first ensemble of the response object
				$(".featureImg").attr('src', featureImg);	
				// add the data-iid attribute to the featureImg
				$(".featureImg").attr('data-iid', sku);

				for (ens = 0; ens < obj.length; ens++) {
				    var ensemble  = data[ens].ensemble;
					var articleKeysArray0 = data[0].articleKeys;
					var articleKeysArray1 = data[1].articleKeys;
					var articleKeysArray2 = data[2].articleKeys;
					var articleKeysArray3 = data[3].articleKeys;
					if (ens == 0) {
						console.log("ensemble below: "+ens);
						console.log(ensemble);					
						console.log("articleKeysArray below: "+ens);
						console.log(articleKeysArray0);		
						var ensembleNum = 0;				
					}	
					else if (ens == 1) {	
						var ensembleNum = 1;					
					}
					else if (ens == 2) {
						var ensembleNum = 2;					
					}		
					else if (ens == 3) {
						var ensembleNum = 3;					
					}																		

					
					// since index[0] of ensemble 0 is the featured product
					// skip to index[1]
					for (i=0; i < ensemble.length; i++) {
						var imgURL = ensemble[i].image_url;
						//var imgIndex = i;
						var cKeyOrder = ensemble[i].canvas_key_order;
						var cKey = ensemble[i].canvas_key;//.charAt(0)/*.toUpperCase() + ensemble[i].canvas_key.substr(1);//.toLowerCase();
						var swatchImgURL = ensemble[i].swatch_image_url;
						var item_id = ensemble[i].item_id;
						var product_id = ensemble[i].product_id;
						var pdpURL = 'http://www.valuecityfurniture.com/product/item/'+product_id;

						if (ens == 0) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray0);
							console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex + " data-ensIndex: "+ i + " canvas_key: " + cKey);			
						}	
						else if (ens == 1) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray1);
							console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex + " data-ensIndex: "+ i + " canvas_key: " + cKey);
						}
						else if (ens == 2) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray2);
							console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex + " data-ensIndex: "+ i + " canvas_key: " + cKey);
						}		
						else if (ens == 3) {
							var artKeyIndex = jQuery.inArray(item_id, articleKeysArray3);
							console.log("item_id: " + item_id + " artKeyIndex: " + artKeyIndex + " data-ensIndex: "+ i + " canvas_key: " + cKey);
						}

					  	var boardNum = ens+1;
					  	var selectorStr = "#ens"+boardNum+" div#key"+i;

  				  	  	$(selectorStr).append("<div id='productResults' style='text-align:center;'><div class='btn-toolbar'><button data-iid='"+item_id+"' data-ens='"+ensembleNum+"' data-ensIndex='"+i+"' data-cKey='"+cKey+"'  data-artKeyIndex='"+artKeyIndex+"' type='button' class='btn pull-right itemReplace' style='border: 1px solid rgb(128, 128, 128); background-color: rgb(255, 255, 255);'><span class='glyphicon glyphicon-refresh default' aria-hidden='true' ></button>&nbsp;<button id='addCartSingleProduct' data-ens='"+ensembleNum+"' data-cart='"+product_id+"'' type='button' class='btn btn-outline pull-right' style='border: 1px solid rgb(128, 128, 128); background-color: rgb(255, 255, 255);'></span><span class='glyphicon glyphicon-shopping-cart default' aria-hidden='true'></span></button></div><a href='"+pdpURL+"' target='_blank' data-ensIndex='"+i+"'><img class='img-responsive center-block productGrid' src='"+imgURL+"?impolicy=product-320x320' alt='image"+i+"'/></a></div>");
					}
				}
				// Click handler for the Item Replace API Call
				$("div[id^=key]").on('click','button.itemReplace',function(){
					var cKeyReplace = $(this).data("ckey");
					var dataens = $(this).attr('data-ens');

					console.log(cKeyReplace);

					var ensindex = parseInt($(this).data('ensindex'));
					// get the item replacement button selector
					var itemReplaceButton = $(this);
					console.log(itemReplaceButton);

					// selector for the addSingleItem button; need to keep item_id up to date
					// on this button in order for add to cart to function after
					// item replacement
					var itemReplaceShoppingButton = $(this).parent().eq(0).children().eq(1);
					console.log(itemReplaceShoppingButton);

					var removeItem = $(this).attr("data-iid");
					var removeItemArtKey = $(this).attr('data-artKeyIndex');
					console.log("removeItem: "+removeItem+ " removeItemArtKey: "+removeItemArtKey);
	
					// find the element to replace selector
					var itemReplace = "#"+$('div[id^=ens]:visible').attr('id')+" div#"+$(this).parent().parent().parent().attr("id")+" img";
					console.log("itemReplace: "+itemReplace);
					// swap with a temporary image
					$(itemReplace).attr('src', 'https://placeholdit.imgix.net/~text?txtsize=30&bg=ffffff&txtclr=000000&txt=Next+Item+Coming+Up&w=320&h=320');
					// selector for the link to wrap around new image
					var itemReplaceLink = "#"+$('div[id^=ens]:visible').attr('id')+" div#"+$(this).parent().parent().attr("id")+" a[data-ensindex='"+$(this).parent().parent().children().eq(1).attr("data-ensindex")+"']";
					console.log(itemReplaceLink);

					if (dataens == 0) {
						articleKeysArray0.splice(removeItemArtKey, 1);	
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray0);		
						// make the item replacement call
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray0;
						//console.log(url);																	
					}	
					else if (dataens == 1) {
						articleKeysArray1.splice(removeItemArtKey, 1);
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray1);	
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray1;
						//console.log(url);																			
					}
					else if (dataens == 2) {
						articleKeysArray2.splice(removeItemArtKey, 1);
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray2);	
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray2;
						//console.log(url);									
					}		
					else if (dataens == 3) {
						articleKeysArray3.splice(removeItemArtKey, 1);
						console.log("articleKeysArray after removing specific index: ");
						console.log(articleKeysArray3);				
						var url = "http://shopvcf.com/asiapi/shoptelligence_api_prod.php?items="+articleKeysArray3;
						//console.log(url);										
					}

					$.ajax({
						method:"GET",
						dataType: "json",
						url: url,
						success: function(data) {
							console.log(data);

							var replacementEnsemble = data[1].ensemble;

							for (i=0; i < replacementEnsemble.length; i++) {
								var cKey = data[1].ensemble[i].canvas_key;
								// check to make sure the replacement product is the same
								// canvas_key as the original item 
								if (cKeyReplace == cKey) {

									console.log("cKeyReplace matches - data[1].ensemble["+i+"].canvas_key");
									var replaceImgURL = data[1].ensemble[i].image_url+"?impolicy=product-320x320";
									//console.log(replaceImgURL);
									var cKeyOrder = data[1].ensemble[i].canvas_key_order;
									var swatchImgURL = data[1].ensemble[i].swatch_image_url;
									var new_item_id = data[1].ensemble[i].item_id;
									//console.log(item_id);
									var product_id = data[1].ensemble[i].product_id;
									//console.log(product_id);
									var pdpURLreplace = 'http://www.valuecityfurniture.com/product/item/'+product_id;
									//console.log(pdpURLreplace);	
									// replace the placeholder image, with replacement item
									$(itemReplace).attr('src', replaceImgURL);	
									// replace link
									//console.log(itemReplaceLink);
									$(itemReplaceButton).attr('data-iid', new_item_id);
									$(itemReplaceShoppingButton).attr('data-cart', product_id);
									$(itemReplaceLink).attr('href', pdpURLreplace);	

									// replace the new item back into the array to keep it up to date
									if (dataens == 0) {
										articleKeysArray0.splice(removeItemArtKey, 0, new_item_id);
										console.log(articleKeysArray0);
									}
									else if (dataens == 1) {
										articleKeysArray1.splice(removeItemArtKey, 0, new_item_id);
										console.log(articleKeysArray1);
									}
									else if (dataens == 2) {
										articleKeysArray2.splice(removeItemArtKey, 0, new_item_id);
										console.log(articleKeysArray2);
									}		
									else if (dataens == 3) {
										articleKeysArray3.splice(removeItemArtKey, 0, new_item_id);
										console.log(articleKeysArray3);
									}																	
								}
								else {
									//console.log("cKeyReplace DOESNT match - data[1].ensemble["+i+"].canvas_key");
								}
							}

						}
					});							
				});	

				// Click handler for add to cart call
				$("div[id^=key]").on('click','#addCartSingleProduct',function(){
					// get the item_id of the single product that you want to 
					// add to the cart
					var singleItemCartAdd = $(this).attr("data-cart");
					$(this).addClass("addSingleProduct");
					$(this).children(0).removeClass("default");

					$("#controls").append("<div id='alert' class='alert alert-success alert-dismissible pull-right' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Item added to cart</strong></div>");

					var stringSingleCartAdd = singleItemCartAdd.toString(); 
					var data = {"itemid": stringSingleCartAdd, "quantity": "1"};

					$.ajax({
					     url: document.location.protocol+"//www.valuecityfurniture.com/api/shoppingcart/add",
					     type: "GET",
					     data: data,
					     success: function(data) { 
					     },
					     error: function(data) {
					     	console.log('Error');
					     },
						 complete: function(data) {
                         }		     
					});				

					// close the alert after some time
					setTimeout(function(){
  						$("div#alert").alert('close');
					}, 1500);											
				});		

			}			
		}

		// logic to step through ensembles
		$("#next").click(function(){			
			var currentBoard = $('div[id^=ens]:visible').attr('id').substr(-1);
			console.log(currentBoard);
			var currentBoardSelector = "div#ens"+currentBoard;
			console.log("currentBoardSelector: "+currentBoardSelector);

			var nextCount = parseInt(currentBoard) + 1;
			console.log(nextCount);
			$(".mixnum").append(currentBoard);

			var nextBoardSelector = "div#ens"+nextCount;
			console.log("nextBoardSelector: "+nextBoardSelector);

			if (nextCount > 4) {			
				$(currentBoardSelector).hide();		
				$('div#ens1').show();			
			}
			// more boards to go, step to next
			else {		
				console.log("Else Clause, nextCount < 4");
				$(currentBoardSelector).hide();	
				$(nextBoardSelector).show();										
			}
		});