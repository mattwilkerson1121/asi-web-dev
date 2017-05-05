$(document).ready(function() {

	   var siteDomain = document.domain;

		if (siteDomain.indexOf("americansignaturefurniture.com") >= 1){
			$('#custom-page-body a').each(function(){
				$(this).attr('href', $(this).attr('href').replace('/search/v/', '/search/a/'));
			});
			$("#asi-mix-ernie button").click(function(){
    			window.location="/search/a/made-to-mix"
			});
		}else {
			$("#asi-mix-ernie button").click(function(){
    			window.location="/search/v/made-to-mix"
			});
		}

	    function imageresize(contentwidth) {
	       var contentwidth = $(window).width();
	    	if ((contentwidth) < '769'){
		        $('.asi-fluid-image').each(function(){
		        	$(this).attr('src', $(this).attr('data-sm'));
		        });
	      	} else {
		        $('.asi-fluid-image').each(function(){
		        	$(this).attr('src', $(this).attr('data-lg'));
		        });
	      	}
	    }

    	imageresize();

    	$(window).bind("resize", function(){ imageresize(); });

    	$('a.asi-pg-nav[href*=#]:not([href=#])').click(function() {
        	var target = $(this.hash);
        	target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        	if (target.length) {
            	$('html,body').animate({
              		scrollTop: target.offset().top
            	}, 1000);

            return false;
        	}
    	});
  	});