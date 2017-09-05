$(function(){
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    if(!getParameterByName('tab')){
        $(".nav-pills li:first").addClass('active');
    }else{
        $('.tab-pane').removeClass('active');
        $('.tab-pane[id="'+getParameterByName('tab')+'"]').addClass('active');
        $('.nav-pills li').removeClass('active');
        $('.nav-pills li[class="'+getParameterByName('tab')+'"]').addClass('active');
    }
    
    $('a.asi-nav-toggle-btn').click(function(){
        $('.collapse').collapse('toggle');
    });

    $("a.asi-nav-toggle-btn h3").append('<i class="fa fa-angle-down" style="margin-left:5px"></i>');

    $(".collapse").on("hide.bs.collapse", function(){
        $("a.asi-nav-toggle-btn h3 i").removeClass('fa-angle-up').addClass('fa-angle-down');
    });
    $(".collapse").on("show.bs.collapse", function(){
        $("a.asi-nav-toggle-btn h3 i").removeClass('fa-angle-down').addClass('fa-angle-up');
    });
});

// Mattress Menu Nav Fix
// $('.mattresses-menu-col .megamenu-links-special ul li a, ul[data-mobile-nav-group="Mattresses"] li.mob-l3 a').removeClass('bold').html('Bases &amp; Foundations');
