$(document).ready(function(){
	var siteDomain = document.domain;

	if (siteDomain.indexOf("americansignaturefurniture.com") >= 1){
		$(".home-seo").remove();
		$('#custom-page-body a').each(function(){
			$(this).attr('href', $(this).attr('href').replace('/search/v/', '/search/a/'));
		});
		$("#asi-mix-ernie button").click(function(){
			window.location="/search/a/made-to-mix"
		});
		$('.asi-seo-block').remove();
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

	$(window).bind("resize", function(){
		imageresize();
	});

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
	// add GA tracking events to home page content elements
	// apply data-pos to all a-tags in page elements on document ready
	$("section.home-content div[class^=pe-type]").find("a").each(function(index){
		$(this).attr('data-pos', index);
		$(this).find('img').attr('data-pos', index);
	});
	
	$("section.home-content div[class^=pe-type] a").on('click', function(event){
		var eventCategory = "click";
		var ePosition = $(this).attr('data-pos');
		var eAction = this.text;
		var eLabel = this.href+':pos='+ePosition;
		// test if the string does not, just contain whitespace
		if (!eAction.match(/^\s*$/)){
			var eAction;
		} else{
			var eAction = $(this).find('img').attr('alt');
		}
		//console.log('event: '+eventCategory+' | action: '+eAction+' | label: '+eLabel);
		ga('send', { hitType: 'event', eventCategory: 'click', eventAction: eAction, eventLabel: eLabel });
	});
	// end GA tracking events to home page content elements
});