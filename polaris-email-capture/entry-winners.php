<?php

function currentTime() {
	// set the default timezone
	date_default_timezone_set('US/Eastern');
	// get current time in EST in Responsys timestamp format
	return date('Y-m-d H:m:s');
}

function previousHourStart() {
	// return the start of the previous hour
	$previousHourStart = date('Y-m-d H:00:00', strtotime('-1 hour'));
	return $previousHourStart;
}
 
function previousHourEnd() {
	// return the end of the previous hour
	$previousHourEnd = date('Y-m-d H:59:59', strtotime('-1 hour'));
	return $previousHourEnd;	
}

function duringEvent() {
	// set timebounds for the event
	$eventStart = "2017-06-07 11:00:00";
	$eventEnd = "2017-06-11 18:00:00";	

	// test whether we are within the event period
	if ((currentTime() > $eventStart) && (currentTime() < $eventEnd)) {
		return true;
	}
	else {
		return false;
	}	
}

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

// select all entries from the previous hour and group by the FIRST_NAME, LAST_NAME to prevent duplicates
$sql = "SELECT * FROM `polaris-store-event` WHERE `datetime` >= '".previousHourStart()."' AND `datetime` < '".previousHourEnd()."' GROUP BY `LAST_NAME`, `FIRST_NAME` ORDER BY RAND() LIMIT 10";

//print_r($sql);

if (duringEvent() == true) {
	$result = $conn->query($sql);

	$count = 1;
	$a;

	echo "<h3>Winners</h3>";

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	// build the body of the email here and then pass to message below
	    	$a .=  "<tr>
	    				<td style='text-align:left;'>".$count."). ".$row["FIRST_NAME"]."</td>
	    				<td style='text-align:left;'>".$row["LAST_NAME"]."</td>
	    				<td style='text-align:left;'>".$row["EMAIL_ADDRESS_"]."</td>
	    			</tr>";
	        echo $count . ".) " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. " - " . $row["EMAIL_ADDRESS_"]. "<br/>";
	        $count++;
	    }

		// Send Mail 
		// Multiple recipients
		$to = 'joshua.wells@americansignature.com, megan.emerick@americansignature.com, alexandra.windsor@americansignature.com'; // note the comma

		// Subject
		$subject = '$50 Dollar Winners - '.previousHourStart().' hour';

		// Message
		$message = '
		<html>
		<head>
		  <title>TEST - $50 Dollar Winners - '.previousHourStart().' hour</title>
		</head>
		<body>
		  <p>Here are the Giftcard Winners for: '.previousHourStart().'</p>
		  <table>
		    <tr>
		      <th style="text-align:center;">First</th><th style="text-align:left;">Last</th><th style="text-align:left;">Email</th>
		    </tr>
		    '.$a.'
		  </table>
		</body>
		</html>
		';

		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		// Additional headers
		//$headers[] = 'To: Joshua Wells <joshua.wells@americansignature.com>';
		$headers[] = 'From: Giftcard Winners <giftcard-event@americansignature.com>';


		// Mail it
		mail($to, $subject, $message, implode("\r\n", $headers));

	} else {
	    echo "0 results";
	}
	$conn->close();
}

?>