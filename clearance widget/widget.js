// initialize slick plugin
$(document).ready(function(){
  $('.category-items').slick({
  });
  $('.category-items-nav').slick({
  });
});

function getNavSliderSettings(){
  return {
	asNavFor: '.category-items',
	dots: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true		
	}
}

function getSliderSettings(){
  return {
    infinite: true,
    asNavFor: '.category-items-nav',
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          dots: false
        }
      },
      {
        breakpoint: 730,
        settings: {
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: false,
          arrows: false
        }
      }
    ]       
  }
}    

// Grab Data from the Clearance API
$.ajax({
  type: 'GET',
  url: "https://asirest.vcfcorp.com/clearance/list/"+storeID+"/",
  crossDomain: true,
  success: function(data) {
    // loop through results
    var itemsObj = data.clearance.items; 
    $.each(itemsObj, function(index,value) {  
      // limit what is appended to widget; do not change results in ajax query
      if (index > 2){
        var clearancePrice = value.clearance_price;
        var retailPrice = value.retail_price; 
        var clearancePercentOff = (((retailPrice-clearancePrice)/retailPrice)*100).toFixed(2);
        // check if clearance price is greater than retail price
        if (clearancePercentOff < 0) {
          var clearancePercentOff = 0.00;
        }
        var imagePath = this.image_path[0];
        var imageType;
        var imageName; 
        var productNameLower = value.product_name.toLowerCase();
        var productName = productNameLower.trim();
        var productDescription = value.description.trim(); 
        // if image does not exist, show no image found graphic
        if ((imagePath == "undefined")||(imagePath == undefined)) {
          var imagePath = "https://asf.scene7.com/is/image/ASF/noimage.jpg?hei=220&wid=220";
          var imagePathThumb = "https://asf.scene7.com/is/image/ASF/noimage.jpg?hei=100&wid=100";
          var imagePathLarge = "https://asf.scene7.com/is/image/ASF/noimage.jpg?hei=250&wid=250"             
        }

        else {
          var imageType = imagePath.image_type;
          // if index 0 image_type isn't BPC use S7 instead
          if (imageType != "blueport") {
            var imageName = imagePath.image_name;
            var imagePath = "https://asf.scene7.com/is/image/ASF/"+imageName+'?hei=220&wid=220';
            var imagePathThumb = "https://asf.scene7.com/is/image/ASF/"+imageName+'?hei=100&wid=100';
            var imagePathLarge = "https://asf.scene7.com/is/image/ASF/"+imageName+'?hei=250&wid=250';
          }else{
            // if index 0 image_type IS BPC use BPC
            var imageName = imagePath.image_name;
            var imagePath = "http://content.valuecityfurniture.com/ProductImages/2/"+imageName+'?fit=inside%7C220:220&composite-to=center,center%7C220:220&background-color=white';
            var imagePathThumb = "http://content.valuecityfurniture.com/ProductImages/2/"+imageName+'?fit=inside%7C100:100&composite-to=center,center%7C100:100&background-color=white';
            var imagePathLarge = "http://content.valuecityfurniture.com/ProductImages/1/"+imageName+'?fit=inside%7C250:250&composite-to=center,center%7C250:250&background-color=white';
          }
        }
        // test the output from API
        /*console.log("Product Name: "+productName+"\n"+
                    "Description: "+productDescription+"\n"+
                    "Clearance Price: $"+clearancePrice+"\n"+
                    "Original Price: $"+retailPrice+"\n"+
                    "Percent Off: "+clearancePercentOff+"%\n"+
                    "ImagePath: "+imagePath+"\n\n"
        );*/

        // append the results to the slick slider div
        $('.category-items-nav').append('<div class="category-item"><img src='+imagePathLarge+' alt="'+productName+'" class="img-responsive center-block"><div itemtype="http://schema.org/Offer" itemscope itemprop="offers" class"product-price text-center"><div class="itemPName text-capitalize text-center center-block"><span style="text-align: left !important;" content="'+clearancePrice+'" itemprop="price" class="clrPrice">Clearance Price: $'+clearancePrice+'</span><br/><span style="text-align: left !important;" itemprop="name" class="pname">'+productName+'</span></div></div></div>');             

        // append the results to the slick slider div
        $('.category-items').append('<div class="category-item"><img src='+imagePathThumb+' alt="'+productName+'" class="img-responsive center-block"/></div>');               

        // styling clearance price
        $("span.clrPrice").css({
        "font-size":"16px",
        "font-weight":"600",
        "color":"#cc0000",
        "letter-spacing":"0.02em",
        "padding":"3px 0px 6px 0px",
        "margin":"0 auto",
        "font-family":"'Open Sans',sans-serif"
        });     
        // styling retail price  
        $("span.pprice").css({
        "font-size":"16px",
        "font-weight":"250",
        "color":"#3a3a3b",
        "letter-spacing":"0.02em",
        "padding":"3px 0px 6px 0px",
        "margin":"0 auto",
        "font-family":"'Open Sans',sans-serif"
       });
       // styling product name
       $("span.pname").css({
        "text-transform":"capitalize",
        "font-size":"1em",
        "font-weight":"600",
        "color":"#54585a",
        "letter-spacing":"0.015em",
        "padding-top":"3px;",
        "text-decoration":"none",
        "font-family":"'Open Sans',sans-serif",
       }); 
       $("span.clearanceHeader").css({
        "background-color":"#FFC72C",
        "padding":"8px 5px 5px 5px",
       });
       $("h2#clearanceHeader").css({
        "line-height":"1.75em"
       });                     
      }
    });

    // in AJAX calls remove current state of 'slick'
    // call the function to configure 'slick' again
    $('.category-items').slick('unslick');/*remove classes/handlers added on initialize*/
    $('.category-items').slick(getSliderSettings());/* Initialize the slick again */

    $('.category-items-nav').slick('unslick');
    $('.category-items-nav').slick(getNavSliderSettings());   
               
  },
  // if AJAX call can't be made, log error
  error: function(data) {
      console.log(data.responseText);
  }
});

// Event Tracking slide Counting
$('.category-items-nav').on('afterChange', function(event, slick, currentSlide){
  var slideCount = currentSlide+1;
  //console.log("Category: clearance widget, Action: slide views, Label: "+slideCount);
  // fire off the GA analytics events afterChange of the currentSlide
  ga('send', 'event', 'clearance widget', 'slide views', slideCount);
});










