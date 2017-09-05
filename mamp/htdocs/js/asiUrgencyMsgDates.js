
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd < 10){dd = '0'+dd} 

if(mm < 10) {mm = '0'+mm} 

today = mm + '/' + dd + '/' + yyyy;

var dateFrom = "08/10/2017"; //EVENT START DATE
var dateTo = "08/13/2017"; //EVENT END DATE
var dateCheck = today;

var d1 = dateFrom.split("/");
var d2 = dateTo.split("/");
var c = dateCheck.split("/");

var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);
var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
var check = new Date(c[2], parseInt(c[1])-1, c[0]);

var isDateWithinRange = check > from && check < to;

if(isDateWithinRange == true){
  console.log('IS WITHIN DATE RANGE = TRUE');
  alert('FINAL DAYS!!');
}

if(today == '08/13/2017'){
    alert('ENDS TODAY!');
}
else{
    alert('GOING ON NOW!');
}
