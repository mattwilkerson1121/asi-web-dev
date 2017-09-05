var t;
var n;
var r;
var i;
var u;

var asiSaleMessage = displaySalesMessage(n,t,i,r,u) //$(".js-sale-message_"+t).show();
var asiPromoTimer = PromotionTimer; //function PromotionTimer();
var asiPromoDaysLeft = getPromotionDaysLeft;	//function getPromotionDaysLeft();

alert(asiPromoDaysLeft);

//alert(displaySalesMessageOrCounter('Jul 05 2017 23:59:00', '2025919', 1, 'Wednesday, July 5', false));

/*
function displaySalesMessageOrCounter(n,t,i,r,u){
  shouldShowCountdownTimer(n)?(displayCounter(new Date(n),t),$(".js-sale-message_"+t).show()):displaySalesMessage(n,t,i,r,u)
}

function PromotionTimer(n,t){var i;this.reWriteCounter=function(){
 var c=new Date,l=new Date(n-c),r=Math.floor(l.valueOf()/1e3),u=Math.floor(r/1)%60,f=Math.floor(r/60)%60,e=Math.floor(r/3600)%24,o,s,h;r<=1||isNaN(n)?($(".pp-sale-ends").length>0&&$(".pp-sale-ends").hide(),clearInterval(i)):(o=e,e<10&&(o="0"+e),s=f,f<10&&(s="0"+f),h=u,u<10&&(h="0"+u),$(".js-promotion-countdownhours_"+t).length>0&&$(".js-promotion-countdownhours_"+t).text(o),$(".js-promotion-countdownminutes_"+t).length>0&&$(".js-promotion-countdownminutes_"+t).text(s),$(".js-promotion-countdownseconds_"+t).length>0&&$(".js-promotion-countdownseconds_"+t).text(h))};
 this.reWriteCounter();
 i=setInterval(this.reWriteCounter,1e3)
}

function getPromotionDaysLeft(n){
  if(n!==null&&n!==undefined&&n!==""){
    var t=new Date(n),i=new Date;return Math.floor((t-i)/864e5)
  }
  return-99
}
*/



