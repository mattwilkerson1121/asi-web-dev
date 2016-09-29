// Set the current domain and populate array links
var domain = document.domain;
var currentPage = window.location.pathname;
var fullPath = "http://"+domain+currentPage;

var buyingGuides = ["http://"+domain+"/buying-guides",
		 "http://"+domain+"/buying-guides/living-room",	
		 "http://"+domain+"/buying-guides/dining-room", 
		 "http://"+domain+"/buying-guides/bedroom",			 		 
		 "http://"+domain+"/buying-guides/bedding", 
		 "http://"+domain+"/buying-guides/new-homeowners",
		 "http://"+domain+"/buying-guides/growing-families",
		 "http://"+domain+"/buying-guides/moving",
		 "http://"+domain+"/buying-guides/empty-nesters",
		 "http://"+domain+"/buying-guides/kroehler-furniture-est-1893", 
		 "http://"+domain+"/buying-guides/furnishing-your-first-dining-room", 
		 "http://"+domain+"/buying-guides/choosing-the-best-guest-room-mattress", 
		 "http://"+domain+"/buying-guides/top-10-ways-to-get-better-sleep", 
		 "http://"+domain+"/buying-guides/preparing-your-place-for-the-perfect-party", 
		 "http://"+domain+"/buying-guides/sofa-or-sectional-for-entertaining", 
		 "http://"+domain+"/buying-guides/best-cushions-for-sofas-sectionals-loveseats", 
		 "http://"+domain+"/buying-guides/how-to-design-a-quality-room-over-time", 
		 "http://"+domain+"/buying-guides/the-construction-details-that-determine-quality", 
		 "http://"+domain+"/buying-guides/finding-living-room-furniture-that-lasts", 
		 "http://"+domain+"/buying-guides/finding-the-right-fabric-for-your-lifestyle", 
		 "http://"+domain+"/buying-guides/furniture-you-should-invest-in", 
		 "http://"+domain+"/buying-guides/5-space-saving-furniture-tips", 
		 "http://"+domain+"/buying-guides/fully-furnished-living-room-for-under-1500-dollars", 
		 "http://"+domain+"/buying-guides/total-room-makeover-on-a-budget", 
		 "http://"+domain+"/buying-guides/best-value-furniture-brand", 
		 "http://"+domain+"/buying-guides/how-to-measure-furniture-to-make-sure-it-fits", 
		 "http://"+domain+"/buying-guides/how-to-protect-your-furniture-from-wear-and-tear", 
		 "http://"+domain+"/buying-guides/tips-for-living-with-a-significant-other"];

// Check the current page for a match in the buyingGuide array
var currentPageIndex = buyingGuides.indexOf(fullPath);
// Increase index by 1 to set next page
var nextPageIndex = currentPageIndex + 1;
// Decrease index by 1 to set prev page
var prevPageIndex = currentPageIndex - 1;
// Set the max index 
var maxIndex = buyingGuides.length - 1;
// set next and prev urls dynamically
var nextPageUrl = buyingGuides[nextPageIndex];
var prevPageUrl = buyingGuides[prevPageIndex];

if (currentPageIndex == 0) {
	$( "#breadcrumb" ).append( "<p style='float: right;'><a data-position='0' href='"+nextPageUrl+"' target='_self'><button style='padding:5px;'>Next</button></a></p>" );
}
else if (currentPageIndex > 0 && currentPageIndex < maxIndex) {
	$( "#breadcrumb" ).append( "<p style='float: right;'><a data-position='0' href='"+prevPageUrl+"' target='_self'><button style='margin-left:5px;padding:5px;'>Prev</button></a><a data-position='0' href='"+nextPageUrl+"' target='_self'><button style='margin-left:5px;padding:5px;'>Next</button></a></p>" );		
}
else if (currentPageIndex == maxIndex) {
	$( "#breadcrumb" ).append( "<p style='float: right;'><a data-position='0' href='"+prevPageUrl+"' target='_self'><button style='padding:5px;'>Prev</button></a></p>" );		
}
else {
	// evaluated to false, do nothing
}