<!DOCTYPE html>
<html>
<head>
	<title>Post Test - Order Tracking Application</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js" 
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
            crossorigin="anonymous"></script>	
</head>
<body>
<button id="get">GET Tracking Info</button>
<br/>
<form id="notifications">
<br/>
<select name="sendAert" id="sendAlert">
  <option value="15">15 Minutes</option>
  <option value="30">30 Minutes</option>
  <option value="45">45 Minutes</option>
  <option value="60">1 Hour</option>
  <option value="75">1-1/4 Hours</option>
  <option value="90">1-1/2 Hours</option>
  <option value="105">1-3/4 Hours</option>
  <option value="120">2 Hours</option>  
</select><br/><br/>
Email<input type="radio" name="alertVia" value="E">
Text/SMS<input type="radio" name="alertVia" value="T">
Call<input type="radio" name="alertVia" value="P">
<br/>
<input type="text" name="notificationMethod" size="30">
</form><br/>
<button id="postAlert">POST Alert Update</button>
<br/><br/>
<div class="deliveryTextRow">        
	<span class="labelColumn">Special Instructions:</span> <br/>       
	<span class="inputColumn">
		<textarea id="specInst" rows="7" style="width:205px"></textarea>
	</span>    
</div>
<div class="deliveryRow"><br/>      
	<span class="labelColumn">Gated:</span>        
	<span class="inputColumn">
	<select id="optGated" style="width:210px">
		<option value="B">Buzz To Enter Gate</option>
		<option value="D">Sign in with Doorman</option>
		<option value="G">Sign in with Guard</option>
		<option value="N" selected="">None</option>
		<option value="O">Sign in at Office</option>
		<option value="S">Security Scan</option>
	</select>
	</span>    
</div>
<br/>
<div class="deliveryRow">        
	<span class="labelColumn">Floor:</span>        
	<span class="inputColumn">
	<select id="optFloor" style="width:210px">
		<option value="1" selected="">1st Floor</option>
		<option value="2">2nd Floor</option>
		<option value="3">3rd Floor</option>
		<option value="4">4th or Above</option>
	</select>
	</span>    
</div><br/>
<div class="deliveryRow">        
	<span class="labelColumn">Elevator:</span>        
	<span class="inputColumn">
	<select id="optElevator" style="width:210px">
		<option value="H">Heavy Passenger Elevator</option>
		<option value="L">Light Passenger Elevator</option>
		<option value="N" selected="">None</option>
		<option value="S">Service Elevator</option>
		<option value="W">Walkup Stairs</option>
	</select>
	</span>    
</div><br/>
<button id="postSpecInst">POST Special Instructions</button>
<br/><br/>
<div id="get-append"><!-- Append GET Response --></div>
<br/>
<div id="postAlert-append"><!-- Append Post Response --></div>
<br/>
<div id="postInst-append"><!-- Append Post Response --></div>

<script type="text/javascript">

var environment = "http://as400d:10080/development/nalhash/RestService/ordertrack/825147879048003/";
var customerNumber = "";

$("button#get").click(function() {
	$.ajax({
		url: environment,
		type: "GET",
		crossDomain: true,
		success: function(data) {
			// GET JSON response object and drill into 
			// the customer object
			var customer = data.orderTracking.customer;
			console.log(customer);

			var customerNumber = customer.customerNumber;

			// customer alerts
			var customerAlerts = customer.alerts;

			// specific customer alerts
			var sendAlertsPrior = customer.alerts.sendAlertsPrior;
			var sendAlertsVia = customer.alerts.sendAlertsVia;
			var alertsContact = customer.alerts.contact;

			// notification settings
			var customerPhoneNumber = customer.customerPhoneNumber;
			var customerEmail = customer.customerEmail.toLowerCase();

			var InvoiceNumber = customer.invoiceNumber;
			var deliveryStoreNumber = customer.deliveryStoreNumber;			

			// test various alert option logic 
			//var sendAlertsVia = "P";
			//var sendAlertsVia = "E";

			// Set the radio buttons based on the GET
			// respond for sendAlertsVia
			if (sendAlertsVia == "T") {
				$("input[value='T']").attr("checked", true);
				$("input[type='text']").val(alertsContact);
			}
			else if (sendAlertsVia == "E") {
				$("input[value='E']").attr("checked", true);
				$("input[type='text']").val(alertsContact);			
			}
			else if (sendAlertsVia == "P") {
				$("input[value='P']").attr("checked", true);
				$("input[type='text']").val(alertsContact);								
			}

			$("div#get-append").append("<br/><br/><strong>GET: </strong><br/>"+
				"Send Alert Prior: "+sendAlertsPrior+"<br/>"+
				"Send Alert Via: "+sendAlertsVia+"<br/>"+
				"Contact: "+alertsContact
			);		

			// When the radio buttons are changed
			// swap form input
			$("input[value='T']").click(function(){
				$("input[value='T']").attr("checked", true);
				$("input[value='E']").attr("checked", false);
				$("input[value='P']").attr("checked", false);								
				$("input[type='text']").val("Enter SMS Number");
			}); 
			$("input[value='E']").click(function(){
				$("input[value='T']").attr("checked", false);
				$("input[value='E']").attr("checked", true);
				$("input[value='P']").attr("checked", false);	
				$("input[type='text']").val("Enter Alert Email Address");
			}); 
			$("input[value='P']").click(function(){
				$("input[value='T']").attr("checked", false);
				$("input[value='E']").attr("checked", false);
				$("input[value='P']").attr("checked", true);	
				$("input[type='text']").val("Enter Alert Phone Number");
			});  

			// clear input text when user clicks into input:text field
			$("input:text").focus(function (){
				$(this).val('');
			});


			// POST to update Users Notification Data
			$("button#postAlert").click(function (){

				var minutesAhead = $("#sendAlert").val(); 

				if ($("input[value='E']").attr('checked')) {
					var emailAddress = $("input[type='text']").val();
					var postData = {q: 'notification', contactMethod: 'E', emailAddress: emailAddress, minutesAhead: minutesAhead, custNumber: customerNumber, deliveryStoreNumber: deliveryStoreNumber, invoiceNumber: InvoiceNumber};					
				}

				else if ($("input[value='T']").attr('checked')) {
					var phoneNumberMobile = $("input[type='text']").val();
					var postData = {q: 'notification', contactMethod: 'T', phoneNumberMobile: phoneNumberMobile, minutesAhead: minutesAhead, custNumber: customerNumber, deliveryStoreNumber: deliveryStoreNumber, invoiceNumber: InvoiceNumber};
				}	
	
				else if ($("input[value='P']").attr('checked')) {
					var phoneNumberHome = $("input[type='text']").val();
					var postData = {q: 'notification', contactMethod: 'P', phoneNumberHome: phoneNumberHome, minutesAhead: minutesAhead, custNumber: customerNumber, deliveryStoreNumber: deliveryStoreNumber, invoiceNumber: InvoiceNumber};						
				}

				console.log(postData);

				$.ajax({
					url: environment,
					type: "POST",
					crossDomain: true,
					data: postData,
				    success: function(data) {
				    	console.log(data);
				    	var postDataString = JSON.stringify(postData);
				    	var data = JSON.stringify(data);

						$("div#postAlert-append").append("<br/><br/><strong>POST AlertData: </strong><br/>"+
							postDataString+"<br/><strong>Alert Response:</strong><br/>"+data);
					},
				    error: function(data) {
				    	//console.log(data.responseText);   	
				    }
				});
			});

			// POST to update Users Notification Data
			$("button#postSpecInst").click(function (){
				var gated = $("#optGated").val();
				var floor = $("#optFloor").val();
				var elevator = $("#optElevator").val();
				var specInst = $("#specInst").val();

				var InvoiceNumber = customer.invoiceNumber;
				var deliveryStoreNumber = customer.deliveryStoreNumber;
				//console.log(deliveryStoreNumber);

				var postData = {q: 'instructions', inst: specInst, gated: gated, floor: floor, elevator: elevator, custNumber: customerNumber, deliveryStoreNumber: deliveryStoreNumber, invoiceNumber: InvoiceNumber};	

				console.log(postData);

				var postDataString = JSON.stringify(postData);

				$("div#postInst-append").append("<br/><br/><strong>POST SpecInst: </strong><br/>"+
					postDataString);				

				$.ajax({
					url: environment,
					type: "POST",
					crossDomain: true,
					data: postData,
				    success: function(data) {
				    	console.log(data);
				    	var postDataString = JSON.stringify(postData);

						$("div#post-append").append("<br/><br/><strong>POST SpecInst: </strong><br/>"+
							postDataString+"<br/><br/>POST Response:<br/>"+data);					    	
				   	},
				    error: function(data) {
				    	//console.log(data.responseText);   	
				    }
				});
			});

		},
		error: function(data) {
			//console.log(data.responseText);
		} 
	});
});	
</script>

</body>
</html>