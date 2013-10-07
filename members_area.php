<?php
	$accountid = $_REQUEST['accountid'];
	$sql = mysql_query('SELECT balance FROM account WHERE id = "' . $accountid . '";');
	$row = mysql_fetch_assoc($sql);
?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
	<UserInput Timeout="5" Repeat="true"> 
		<InitialCommands> 
			<Speak>
				The pin code you entered is verified.
				Account balance, press 1.
				To call with our customer representative, press 2.
			</Speak>
		</InitialCommands> 
		<Inputs> 
			<Input Key="1"> 
				<Speak>
					<?php
					echo $row['balance'];
					?>
				</Speak>
			</Input> 
			<Input Key="2"> 
				<BlindTransfer>2000</BlindTransfer> 
			</Input> 
		</Inputs> 
	</UserInput> 
</Response>