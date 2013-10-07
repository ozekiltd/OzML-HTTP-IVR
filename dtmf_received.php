<?php
	$dtmfdigits = $_REQUEST['DtmfDigits'];
	$sql = mysql_query('SELECT id FROM account WHERE pincode LIKE "' . $dtmfdigits . '";');
	$row = mysql_fetch_assoc($sql);
	
	if(mysql_num_rows($sql) == 1) {
		$response = "<GoTo>http://yourapp.com/dtmf_received.php?accountid=" . $row['id'] . "</GoTo>";
	}
	else {
		$response = "<UserInput enteredUrl='http://yourapp.com/dtmf_received.php' digits='4' timeout='10' repeat='true'>";
		$response .= "<InitialCommands>";
		$response .= "<Speak>";
		$response .= "The PIN code you entered is invalid. Please give it again.";
		$response .= "Please enter your 4 digits PIN code again.";
		$response .= "</Speak>";
		$response .= "</InitialCommands>";
		$response .= "</UserInput>";
	}
?>

<?xml version="1.0" encoding="UTF-8"?>
<Response>
	<?php
	echo $response;
	?>
</Response>