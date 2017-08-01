
//domain = "http://www.valuecityfurniture.com";
domain = document.location.origin;
diningURL = "/search?portal_menu_level_1=1|Dining~257256";
environment = "http://search.blueport.com/sites/asi/?hawktype=search&output=json&portal_menu_level_1=1|Dining~257256";
newRequest = '';

function menuBuild(environment) {
	$.ajax({
		url: environment,
		type: "GET",
		crossDomain: true,
	    success: function(data) {
	    	// Get the Facets object
	    	var facets = data.Facets;
		    $.each(facets, function(i, item) {
		    	// If the Facet is Style
		    	if (item.Name == "Dining Height") {
			        var facetField = item.Field;
			        var facetName = item.Name;
			        var facetValues = item.Values;
			        styleMenu = "";
			        styleMenu += '<option>Height</option>';
			        // Loop through and build the menu
			        $.each(facetValues, function(i, item) { 
			        	var facetValue = item.Value;
			        	var facetValueSpace = facetValue.replace(/\s+/g, '%20');
			        	var facetValueClean = facetValueSpace.replace(/&+/g, '%26');
			        	var facetValueLabel = item.Label;
			        	/*if (facetValueLabel == "Casual Contemporary") {
			        		facetValueLabel = "Casual";
			        	}*/
			        	var facetValueCount = item.Count;
			        	if (facetValueCount > 0) {
			        		styleMenu += '<option value="'+facetValueClean+'">'+facetValueLabel+'</option>';
			        	}
			        });
					$('#dr-select-1').html(styleMenu);	 
		    	}
		    	// If the Facet is Color		    	
		    	if (item.Name == "Color or Finish") {
			        var facetField = item.Field;
			        console.log(facetField);
			        var facetName = item.Name;
			        var facetNameClean = facetName.replace("Color or Finish", "Color");
			        var facetValues = item.Values;
			        colorsMenu = "";
			        colorsMenu += '<option>Color</option>';
			        // Loop through and build the menu			        
			        $.each(facetValues, function(i, item) {
			        	var facetValue = item.Value;
			        	var facetValueSpace = facetValue.replace(/\s+/g, '%20');
			        	var facetValueClean = facetValueSpace.replace(/&+/g, '%26');
			        	var facetValueLabel = item.Label;
			        	var facetValueCount = item.Count;
			        	if (facetValueCount > 0) {			        		
			        		colorsMenu += '<option value="'+facetValueClean+'">'+facetValueLabel+'</option>';
			        	}
			        });
			 
					$('#dr-select-2').html(colorsMenu);	
		    	}
		    	// If the Facet is Table Shape
		    	if (item.Name == "Table Shape") {
		    		//console.log(item.Name);
			        var facetField = item.Field;
			        var facetName = item.Name;
			        var facetNameClean = facetName.replace("Table Shape", "Shape");
			        var facetValues = item.Values;
			        shapeMenu = "";
			        shapeMenu += '<option>Shape</option>';
			        // Loop through and build the menu			        
			        $.each(facetValues, function(i, item) { 
			        	var facetValue = item.Value;
			        	var facetValueSpace = facetValue.replace(/\s+/g, '%20');
			        	var facetValueClean = facetValueSpace.replace(/&+/g, '%26');
			        	var facetValueLabel = item.Label;
			        	var facetValueCount = item.Count;
			        	if (facetValueCount > 0) {
			        		shapeMenu += '<option value="'+facetValueClean+'">'+facetValueLabel+'</option>';
			        		//console.log(shapeMenu);
			        	}
			        });
					$('#dr-select-3').html(shapeMenu);	
		    	}		    			    	
		    });
		},
	    error: function(data) {
	    	//console.log(data.responseText);   	
	    }
	});
}

function buildRequest() {
	// build a new search request
	$("select").change(function(){
		$('form select :selected').each(function(){
			// seet query params for search
    		var heightSelectionValue = "&dining_height_1="+$("#dr-select-1").val();
    		var colorSelectionValue = "&color_facet_1="+$("#dr-select-2").val();
    		var shapeSelectionValue = "&table_shape_1="+$("#dr-select-3").val();
    		// if all 3 menus are not default
    		if ($("#dr-select-1 :selected").val() != "Height" && 
    			$("#dr-select-2 :selected").val() != "Color" && 
    			$("#dr-select-3 :selected").val() != "Shape") {
    				// build the search count request + link for button
    				newRequest = "";
    				newRequest = environment+heightSelectionValue+colorSelectionValue+shapeSelectionValue;
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+heightSelectionValue+colorSelectionValue+shapeSelectionValue);
    				return newRequest;	 	
    		}
    		// if style, color menus are not default    		
    		else if ($("#dr-select-1 :selected").val() != "Height" && 
    				$("#dr-select-2 :selected").val() != "Color") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment+heightSelectionValue+colorSelectionValue;	
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+heightSelectionValue+colorSelectionValue);
    				return newRequest;	 	    					
    		}
    		// if color, shape menus are not default     		
    		else if ($("#dr-select-2 :selected").val() != "Color" &&
    				$("#dr-select-3 :selected").val() != "Shape") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment+colorSelectionValue+shapeSelectionValue;
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+colorSelectionValue+shapeSelectionValue);	
    				return newRequest;	 	    		    									
    		}
    		// if style, shape menus are not default     		
    		else if ($("#dr-select-1 :selected").val() != "Height" &&
    				$("#dr-select-3 :selected").val() != "Shape") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment+heightSelectionValue+shapeSelectionValue;
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+heightSelectionValue+shapeSelectionValue);
    				return newRequest;	 	    				
    		}	
    		// if style menu is not default     		
    		else if ($("#dr-select-1 :selected").val() != "Height") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment+heightSelectionValue;
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+heightSelectionValue);
    				return newRequest;	    					    						
    		}
    		// if color menu is not default      		
    		else if ($("#dr-select-2 :selected").val() != "Color") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment+colorSelectionValue;	
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+colorSelectionValue);
    				return newRequest;	 	    				   					
    		}
    		// if shape menu is not default      		
    		else if ($("#dr-select-3 :selected").val() != "Shape") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment+shapeSelectionValue;	
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL+shapeSelectionValue);
    				return newRequest;	 
    		}	
    		// if shape menu is not default      		
    		else if ($("#dr-select-1 :selected").val() === "Height" && 
    				 $("#dr-select-2 :selected").val() === "Color" && 
    				 $("#dr-select-3 :selected").val() === "Shape") {
    				// build the search count request + link for button    			
    				newRequest = "";
    				newRequest = environment;	
    				$("#drFinderSubmitBtn").attr('href', domain+diningURL);
    				return newRequest;	 
    		}	
	    });
	});
}

function resultCount() {
	$("select").change(function(){
		// grab latest build request count
		buildRequest();
		nr = newRequest;
		$.ajax({
			url: nr,
			type: "GET",
			crossDomain: true,
		    success: function(data) {
		    	// populate the results message
		    	var numResults = data.Pagination.NofResults;
		    	if (numResults > 0) {
		    		$("div#numResults").html("<h3 style='color:#ffffff !important;'>"+numResults+" Found</h3>");
		    	}
		    	// no results, remove link, reset menus
		    	else {
		    		$("#drFinderSubmitBtn").removeAttr("href");
		    		$("div#numResults").html("<h3 style='color:#ffffff !important;'>Nothing Found</h3>");
		    		//menuBuild(environment);
				}
			},
		    error: function(data) {

		    }
		});
	});
}

function reset() {
	// handler function to clear menus
	$("#numResults").html("");	
	$("#numResults").text("");	
	menuBuild(environment);
}

// call the functions
menuBuild(environment);
buildRequest();
resultCount();
// reset button handler
$("a#reset").on("click", reset);
