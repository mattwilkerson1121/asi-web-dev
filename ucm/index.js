// set extracted query params to a variable
var email = getUrlParameter('email');
var type = getUrlParameter('type');
var ordertype = getUrlParameter('ordertype');
var response = getUrlParameter('response').toLowerCase();
var orderDate = getUrlParameter('orderDate');
var phone = getUrlParameter('phone');
var system = getUrlParameter('system');
var requestid = getUrlParameter('requestid');
var requesttype = getUrlParameter('requesttype');
var otid = getUrlParameter('otid');
var requestdate = getUrlParameter('requestdate');
var addr = getUrlParameter('addr');

function getUrlParameter(name) {
	// return value of query parameter
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

function defaultCustSrvcNum() {
	if (document.location.host === "www.valuecityfurniture.com") {
		var defaultCustSrvcNum = "1-888-751-8553";
		return defaultCustSrvcNum;
	}
	else if (document.location.host === "www.americansignaturefurniture.com") {
		var defaultCustSrvcNum = "1-888-751-8552";
		return defaultCustSrvcNum;
	}
}

function formatDate(date) {
	// formats date in YYYYDDMM format to YYYY DD MM format
	var dateSubString = date.slice(0, 4) + " " + date.slice(4);
	var dateSubString2 = dateSubString.slice(0,7) + " " + dateSubString.slice(7);
	var formatDate = new Date(dateSubString2);
	return dateFormat(formatDate, "dddd, mmmm dS");
}

function daysTillOrderDate(orderDate) {
	// hours*minutes*seconds*milliseconds		
	var oneDay = 24 * 60 * 60 * 1000; 
	// normalize the orderDate string from the query parameter
	var orderDateSubString = orderDate.slice(0, 4) + "/" + orderDate.slice(4);
	var orderDateSubString2 = orderDateSubString.slice(0,7) + "/" + orderDateSubString.slice(7);
	var orderDateObject = new Date(orderDateSubString2);
	// instantiate a new date object to get todays date
	var now = new Date();
	// store the pieces of date into a new Date() object
	var firstDate = new Date(now.getFullYear(),(now.getMonth() + 1), now.getDate());
	var secondDate = new Date(orderDateObject.getFullYear(),(orderDateObject.getMonth() + 1),orderDateObject.getDate());
	// fine the different between the dates with Math module, get absolute days back
	var diffDays = Math.round(Math.abs((secondDate.getTime() - firstDate.getTime())/(oneDay)));

	if (diffDays == 1) {
		return "tomorrow";
	}
	else if (diffDays == 0) {
		return "today";
	}
	else {
		return "";
	}
}

function formatStorePhone(phone) {
	// formats phone in 1111111111 format to 111-111-1111 format
	var storephoneSubString = phone.slice(0, 3) + "-" + phone.slice(3);
	var storephoneSubString2 = storephoneSubString.slice(0,7) + "-" + storephoneSubString.slice(7);
	return storephoneSubString2
}	

function testQueryParams() {
	// confirm query param test for the PCC calls 
	if ((requesttype == "PCC") && (type == "r") && (response == "c") && (system != "") && (requestid != "") && (otid != "") && (orderDate != "") && (ordertype != "")) {
		return "confirm-pcc"
	}
	// reschedule query param test for the PCC calls
	else if ((requesttype == "PCC") && (type == "r") && (response == "r") && (system != "") && (requestid != "") && (otid != "") && (ordertype != "")) {
		return "reschedule-pcc"			
	}
	// confirm query param test for the WINDOW calls 
	else if ((requesttype == "WINDOW") && (type == "r") && (response == "c") && (system != "") && (requestid != "") && (otid != "") && (orderDate != "") && (ordertype != "")) {
		return "confirm-window"
	}
	// reschedule query param test for the WINDOW calls
	else if ((requesttype == "WINDOW") && (type == "r") && (response == "r") && (system != "") && (requestid != "") && (otid != "") && (ordertype != "")) {
		return "reschedule-window"			
	}
	else {
		return "default"		
	}
}

function responseAPI() {
	// build the request URL
	var url = "https://asirest.vcfcorp.com/emailhandler?system="+system+"&requesttype="+requesttype+"&requestdate="+requestdate+"&type="+type+"&requestId="+requestid+"&response="+response;

	console.log(url);
	// make the response request back through the API
	$.ajax({
  		url: url,
  		contentType: "application/x-www-form-urlencoded",
  		type: 'GET',
  		crossDomain: true,
  		success: function(data){
  			console.log(data);
  		},
  		error: function(data) {
  			console.log(data);
  		}
	});		
}


// store the message type results to control UI and also responseAPI() call
var result = testQueryParams();

if (result == "confirm-pcc") {
	console.log("confirm-pcc");
	$("#custom-page-body .asi-container").append("<div class='asi-ucm' style='margin-top: 0%'><p>Thanks for confirming your "+ordertype+".<br /><br/>We'll see you on <span style='color:#e10e32;font-weight:bold'>"+formatDate(orderDate)+"</span>.<br/><br/>For information about your order try our <a href='/track-my-order?tracking="+otid+"' style='color:#e10e32;font-weight:bold;'>order tracker</a>.<br /></p><div class='asi-red-separator' style='margin-top: 10px;margin-bottom:20px;'></div></div>");	
	// Send back email response through API 
	responseAPI();		
}
else if (result == "reschedule-pcc") {
	console.log("reschedule-pcc");	
	$("#custom-page-body .asi-container").append("<div class='asi-ucm' style='margin-top:0%;'><p>Your request has been received. You may reach the store at:<br/><br/><span style='color:#e10e32;font-weight:bold;'><a href='tel:1"+phone+"' target='_blank' style='color:#e10e32;font-weight:bold'>"+phone+"</a></span><br /><br />Otherwise, you will be contacted as soon as possible.<br /><br/><br/>For information about your order try our <a href='/track-my-order?tracking="+otid+"' style='color:#e10e32;font-weight:bold;'>order tracker</a>.<br/><br />Thank you!</p><div class='asi-red-separator' style='margin-top:10px;margin-bottom:20px;'></div></div>");	
	// Send back email response through API 
	responseAPI();		
}
else if (result == "confirm-window") {
	console.log("confirm-window");

	$("#custom-page-body .asi-container").append("<div class='asi-ucm' style='margin-top: 0%'><p>Yay! Thanks for confirming your "+ordertype+".<br /><br/>We'll see you "+daysTillOrderDate(orderDate)+" <span style='color:#e10e32;font-weight:bold'>"+formatDate(orderDate)+"</span> at <span style='color:#e10e32;font-weight:bold'>"+addr+"</span>.<br/><br/>If you have any questions between now and then, feel free to give us a call at:<br/><br/><a href='tel:1"+phone+"' target='_blank' style='color:#e10e32;font-weight:bold'>"+phone+"</a><br/><br/>For information about your order try our <a href='/track-my-order?tracking="+otid+"' style='color:#e10e32;font-weight:bold;'>order tracker</a>.<br /></p><div class='asi-red-separator' style='margin-top: 10px;margin-bottom:20px;'></div></div>");	
	// Send back email response through API 
	responseAPI();			
}
else if (result == "reschedule-window") {
	console.log("reschedule-window");	
	$("#custom-page-body .asi-container").append("<div class='asi-ucm' style='margin-top:0%;'><p>Your request has been received. You may reach the store at:<br/><br/><span style='color:#e10e32;font-weight:bold;'><a href='tel:1"+phone+"' target='_blank' style='color:#e10e32;font-weight:bold'>"+phone+"</a></span><br /><br />Otherwise, you will be contacted as soon as possible.<br /><br/><br/>For information about your order try our <a href='/track-my-order?tracking="+otid+"' style='color:#e10e32;font-weight:bold;'>order tracker</a>.<br/><br />Thank you!</p><div class='asi-red-separator' style='margin-top:10px;margin-bottom:20px;'></div></div>");	
	// Send back email response through API 
	responseAPI();			
}
else {
	console.log("default");	
	$("#custom-page-body .asi-container").append("<div class='asi-ucm' style='margin-top:0%;'><p>Oops Something Went Wrong.<br/><br/>Try clicking on the link in the email again or<br/>contact Customer Service at: <span style='color:#e10e32;font-weight:bold;'><a style='color:#e10e32;font-weight:bold;' href='tel:"+defaultCustSrvcNum()+"' >"+defaultCustSrvcNum()+"</a></span><br /><br/>For information about an order try our <a href='/track-my-order' style='color:#e10e32;font-weight:bold;'>Order Tracker</a><br />Thank you!</p><div class='asi-red-separator' style='margin-top:10px;margin-bottom:20px;'></div></div>");		
}