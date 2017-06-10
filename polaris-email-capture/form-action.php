<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='refresh' content='2;url=http://shopvcf.com/email-capture/index.php'/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	</style>
</head>
<body>

<?php
// normalize data before insertion into DB
$emailAddress = strtolower($_POST['EMAIL_ADDRESS_']);
$firstName = ucwords(strtolower($_POST['FIRST_NAME']));
$lastName = ucwords(strtolower($_POST['LAST_NAME']));
$address1 = ucwords(strtolower($_POST['POSTAL_STREET_1_']));
$address2 = ucwords(strtolower($_POST['POSTAL_STREET_2_']));
$city = ucwords(strtolower($_POST['CITY_']));
$state = strtoupper($_POST['STATE_']);

// connect to the database with mysqli
$servername = "db685361735.db.1and1.com";
$username = "dbo685361735";
$password = "Dv7qWCpQtJx)Guc";
$dbname = "db685361735";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// insert the record into the databasez
$sql = "INSERT INTO `polaris-store-event` (`datetime`, EMAIL_ADDRESS_, FIRST_NAME, LAST_NAME, POSTAL_STREET_1_, POSTAL_STREET_2_, CITY_, STATE_, POSTAL_CODE_, EMAIL_SOURCE) 
		VALUES (NOW(), '".$emailAddress."', '".$firstName."', '".$lastName."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$_POST['POSTAL_CODE_']."', '".$_POST['EMAIL_SOURCE']."')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="container">
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
			<h3 style="text-align: center;padding-top: 20px;">Thank You For Entering!</h3>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>