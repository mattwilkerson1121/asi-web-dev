<!DOCTYPE html>
<html>
<head>
	<title>Polaris Event - Sign Up for A Chance To Win $50 Gift Card</title>
	<script
  		src="https://code.jquery.com/jquery-3.2.1.min.js"
  		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  		crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	<style type="text/css">
		.navbar {
			min-height: 60px !important;
		}
		input:required:invalid, input:focus:invalid {
			background-image: url("http://localhost:8888/polaris-email-capture/images/invalid.png");
			background-position: right center;
			background-repeat: no-repeat;
		}
		input:required:valid {
			background-image: url("http://localhost:8888/polaris-email-capture/images/valid.png");
			background-position: right center;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<div class="container">
		<br/>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand">
		        <img alt="Brand" style="height: 30px;" src="http://www.valuecityfurniture.com/Content/ValueCityMix/svg/Logo_Full.svg">
		      </a>
		    </div>
		  </div>
		</nav>

		<!-- example responsys form -->
		<!--
			<form role="form" name="Form_Name" id="Form_Id" method="POST" action="/form-action-url"> 
			  <input name="EMAIL_ADDRESS_" id="EMAIL_ADDRESS_" type="email" />
			  <input name="FIRST_NAME id="FIRST_NAME type="text" />
			  <input name="LAST_NAME id="LAST_NAME type="text" />
			  <input type="hidden" name="_RequiredFields_" value="EMAIL_ADDRESS_" />
			  <input type="hidden" name="_EMailFields_" value="EMAIL_ADDRESS_" />
			  <input type="hidden" name="_ri_" value="" />
			  <input type="hidden" name="EMAIL_SOURCE" value="Identifier of where form was captured" />
			  <input type="hidden" name="EMAIL_PERMISSION_STATUS_" value="I" />
			</form>
		-->

		<form role="form" name="Form_Name" id="Form_Id" method="POST" action="http://shopvcf.com/email-capture/form-action.php">
		  <div class="form-group">
		    <label for="FIRST_NAME">First Name</label>
		    <input type="text" class="form-control" name="FIRST_NAME" id="FIRST_NAME" placeholder="First Name" required>
		  </div>		
		  <div class="form-group">
		    <label for="LAST_NAME">Last Name</label>
		    <input type="text" class="form-control" name="LAST_NAME" id="LAST_NAME" placeholder="Last Name" required>
		  </div>
		  <div class="form-group">
		    <label for="EMAIL_ADDRESS_">Email Address</label>
		    <input type="email" class="form-control" name="EMAIL_ADDRESS_" id="EMAIL_ADDRESS_" placeholder="Enter a valid email address" required>
		  </div>
		  <div class="form-group">
		    <label for="streetAddress">Street Address 1</label>
		    <input type="text" class="form-control" id="streetAddress" name="POSTAL_STREET_1_" placeholder="Street Address">
		  </div>
		  <div class="form-group">
		    <label for="streetAddress">Street Address 2</label>
		    <input type="text" class="form-control" id="streetAddress" name="POSTAL_STREET_2_" placeholder="Street Address">
		  </div>		  	
		  <div class="form-group">
		    <label for="city">City</label>
		    <input type="text" class="form-control" id="city" name="CITY_" placeholder="City">
		  </div>
		  <div class="form-group">
		    <label for="state">State</label>
		    <input type="text" class="form-control" id="state" placeholder="State" name="STATE_" pattern="[A-Za-z]{2}">
		  </div>	
		  <div class="form-group">
		    <label for="zip">Zip</label>
		    <input type="text" class="form-control" id="zip" name="POSTAL_CODE_" placeholder="Zip" pattern="[0-9]{5}">
		  </div>			  			  		  	  
		  <div class="legalLanguage">
		  	<p>* Enter for a chance to win a $50 gift card. Must be in the store at the time of the drawing to win. Customer can only win once. Winners will be pulled every hour.</p>
		  </div>
		  <!--<input type="hidden" name="_RequiredFields_" value="EMAIL_ADDRESS_" />
		  <input type="hidden" name="_EMailFields_" value="EMAIL_ADDRESS_" />
		  <input type="hidden" name="_ri_" value="X0Gzc2X%3DYQpglLjHJlYQGppk8s2YNzelkFe84qRJh3PMqqC3ujC6T7OVwjpnpgHlpgneHmgJoXX0Gzc2X%3DYQpglLjHJlYQGpArldm3bvf5rIzgJSsOzcIsDzbKLeWTbLNXn" />		  
		  
		  
		  <input type="hidden" name="EMAIL_PERMISSION_STATUS_" value="I" />		-->  
		  <input type="hidden" name="EMAIL_SOURCE" value="Polaris-Store-Event" />
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</body>
</html>