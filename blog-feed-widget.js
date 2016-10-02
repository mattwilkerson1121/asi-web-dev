var siteDomain = document.domain; 
var blogFeed; 
var dataCategory = "bedroom";
// check domain and set the feed
if(siteDomain.indexOf("valuecityfurniture.com") != -1) { 
	var blogFeed = "http://www.valuecityfurniture.com/blog/space-planning-tips/bedroom/feed/";
}
else { 
    var blogFeed = "http://www.americansignaturefurniture.com/blog/space-planning-tips/bedroom/feed/"; 
}

// create click handler, send GA the events
$( document ).ready(function() {
	console.log("document is ready!");
	$(document).on('click','#hawkcustomhtml a', function(event){  
		var eventCategory = "click"; 
		var ePosition = $(this).attr('data-position');  
		var eAction = this.text;  
		var eLabel = this.href+':pos='+ePosition;  
		if(!eAction){  
			var eAction = $(this).find('img').attr('alt');  
		} 
		//console.log("eventCategory: click, eventAction: "+eAction+", eventLabel: "+eLabel);
		ga('send', {  hitType: 'event', eventCategory: 'click', eventAction: eAction, eventLabel: eLabel  })
	});
});

// parse the feed, prepend to DOM
$.ajax({
  url      : 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(blogFeed),
  dataType : 'json',
  success  : function (data) {

    var entry = data.responseData.feed.entries;
    
    for (var i = 0; i < entry.length; i++) {
     var postTitle = entry[i].title;
     var postSnippet = entry[i].contentSnippet;
     var postLead = jQuery.trim(postSnippet).substring(0, 100).split(" ").slice(0, -1).join(" ");
     var postLink = entry[i].link;
     var postContent = entry[i].content;
      
      var imgContent = entry[i].content;
      var imgDiv = document.createElement('div');
      imgDiv.innerHTML = postContent;
      var postImage = imgDiv.getElementsByTagName('img')[0];
      var postImgSrc = postImage ? postImage.getAttribute("src") : "";

      $("#blog-feed").prepend('<div class="panel panel-default blog-panel" style="box-shadow:none;margin-top:0;margin-bottom:0;margin-left:0.375em;margin-right:0.75em;"><div class="panel-body blog-panel-body"><a data-position="bottom-feed" href="'+postLink+'" target="_self" class="thumbnail" style="padding-bottom:15px;"><img src="'+postImgSrc+'" class="img-responsive center-block"><h4>'+postTitle+'</h4><p style="padding:0px 10px;font-size:14px;">'+postLead+'...<span style="color:#cc0000;">read more</span></p></a></div></div>');

    }
  },
  error : function (data){
  	// var uhoh!;
  }
});