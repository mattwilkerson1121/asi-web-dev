$(function(){
  var searchCollection;
  var isGetawayPageType;
  var isMobileWidth;
  var swatchBtnURL;

  $('div.asi-style-selector a').attr('href','#')
  $('#hawkbannerbottom p').remove();
  $('#header-banner-page-element-1').remove();
  $('.asi-collection-image img').css({
    'background-color':'#ffffff',
    'padding-left':'30px'
  });
  $('#hawkbreadcrumb, .hawkRail, section.main-section div:eq(2)').addClass('hidden-xs');

  if (document.location.href.indexOf('/make-it-you/custom-') != -1){
    var isGetawayPageType = true;
  }
  if($('#asi-mobile-header:visible').height() > 0){
    var isMobileWidth = true;
  }

  if((isMobileWidth === true) && (isGetawayPageType === true)){
    $('.search-navigation .hawkmpp').remove();
    $('.search-navigation .search-navigation-sort').remove();
    $('.search-navigation .search-navigation-page-number').remove();
  }

  function GetQueryStringParams(sParam){
    var sPageURL = window.location.hash.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
  }

  $('.asi-collection').each(function(searchCollection){
    var collectionData = $(this).attr('data-collection-name');
    $(this).on('click', function(){
      $('html, body').scrollTop($('#top-of-search-page-element').offset().top);
      $('div.asi-collection-selector a').removeClass('selected');
      $(this).addClass('selected');

      if((document.location.href.indexOf('keyword') > 0) && (document.location.href.indexOf('collection_1') < 0)){
        $(this).attr('href',document.location.href+'&collection_1='+collectionData);
      }
      else if((document.location.href.indexOf('keyword') > 0) && (document.location.href.indexOf('collection_1') > 0)){
        var searchKeyword = GetQueryStringParams('keyword');
        $(this).attr('href','#hawkhost=1&collection_1='+collectionData+'&keyword='+searchKeyword);
      }
      else{
        $(this).attr('href','#hawkhost=1&collection_1='+collectionData);
      }
    });
  });

  $('.top-banner-mobile .asi-swatch-selector').on('click', function(e){
    e.stopPropagation();
  });

  $('.top-banner-mobile .asi-swatch-blocks').on('click', function(swatchBtnURL){
    $(this).addClass('active').sibilings().removeClass('active');

      if((document.location.href.indexOf('collection_1') > 0) && (document.location.href.indexOf('keyword') < 0)){
        var swatchBtnURL = document.location.href+'&keyword='+swatchData;
        $('#asi-dd-done-btn').attr('href',document.location.href+'&keyword='+swatchData);
      }
      else if((document.location.href.indexOf('collection_1') > 0) && (document.location.href.indexOf('keyword') > 0)){
        var searchCollection = GetQueryStringParams('collection_1');
        var swatchBtnURL = '#hawkhost=1&collection_1='+searchCollection+'&keyword='+swatchData;
        $('#asi-dd-done-btn').attr('href','#hawkhost=1&collection_1='+searchCollection+'&keyword='+swatchData);
      }
      else{
        var swatchBtnURL = '#hawkhost=1&keyword='+swatchData;
        $('#asi-dd-done-btn').attr('href','#hawkhost=1&keyword='+swatchData);
      }
  });

  
  $('.top-banner .asi-swatch').each(function(searchCollection){
    var swatchData = $(this).attr('data-swatch-finish');
    $(this).attr('title', swatchData);

    $(this).on('click', function(){
      $('div.asi-swatch-selector a').removeClass('selected');
      $(this).addClass('selected');

      if((document.location.href.indexOf('collection_1') > 0) && (document.location.href.indexOf('keyword') < 0)){
        $(this).attr('href',document.location.href+'&keyword='+swatchData);
      }
      else if((document.location.href.indexOf('collection_1') > 0) && (document.location.href.indexOf('keyword') > 0)){
        var searchCollection = GetQueryStringParams('collection_1');
        $(this).attr('href','#hawkhost=1&collection_1='+searchCollection+'&keyword='+swatchData);
      }
      else{
        $(this).attr('href','#hawkhost=1&keyword='+swatchData);
      }
    });
  });
  
  $('.asi-collection-list').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false,
          arrows:true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
          arrows:false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
          arrows:false
        }
      }
    ]
  });
});