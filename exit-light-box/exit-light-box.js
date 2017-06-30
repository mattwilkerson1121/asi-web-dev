// set a counter to 0
var count = 0;
// make sure there are items in the cart
var cartCount = parseInt($("span.asi-cart-number#header-right-features-sc-count").text());
$(window).mouseout(function(){
	count ++;
	// prevent this from overlapping the RT modal
	if ($.cookie("RegistrationOverlay") == "1")	{
		// if RT modal cookie, set and this modal hasn't shown yet
		if ($.cookie("4modlshw") != 'false') {
			// if this is only the first time, show modal
			if ((count == 1) && (isSignedIn == false) && (cartCount > 0)) {	
				// show the modal and set the cookie
	            $('#easyPassModal').modal();
	            var in30min = 1/48; 	
	            $.cookie("4modlshw", "false", { expires: in30min });
			}
		}
	}
});