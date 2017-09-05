
var pgURL = document.location.href;

if(pgURL.indexOf('?searchWithin') > 0){
	scrollToGrid();
}

$('#asi-sale-hero').css('cursor','pointer').click(
	function(){ 
		scrollToGrid();
});

function scrollToGrid(){
	$('html,body').animate({
      scrollTop: $('#hawktoppager').offset().top
    },'slow');
}

