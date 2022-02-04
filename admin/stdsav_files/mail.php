<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

session_start();
// echo "<pre>";print_r($_POST);
if(isset($_POST)) {

	$to = $_POST['email'];
	$subject = 'Subject';


	$from = "venky07.chidurala@gmail.com";

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=charset=utf-8\r\n";
	$headers .= "From: " . $from . "\r\n";
	//$headers .= "Reply-To: ". $_POST['email'] . "\r\n";
	// $headers .= "CC: xxx@xxxxx.xxx\r\n";



	$message = "<html><body>";
	$message .= "Dear ".$_POST['user_name'].", <br><br><br>";

	$message .= '<table class="table-border" style="border-color: #666; background: #eee; cellpadding="10">';
	$message .= "<tr><td><strong>Total Load:</strong> </td><td>" . $_POST['total_load'] . "</td></tr>";
	$message .= "<tr>
					<td><strong>Daily Energy Demand:</strong> </td>
					<td>" . $_POST['daily_energy_demand'] . "</td>
					<td><strong>Recommended PCS Model:</strong> </td>
					<td>" . $_POST['pcs_model'] . "</td>
				</tr>
				<tr>
					<td><strong>Recommended PV Configuration:</strong> </td>
					<td>" . $_POST['pv_config'] . "</td>
					<td><strong>Recommended Battery Configuration:</strong> </td>
					<td>" . $_POST['bat_config'] . "</td>
				</tr>
				<tr>
					<td><strong>Estimated Area required for PV array:</strong> </td>
					<td>" . $_POST['area_req'] . "</td>
				</tr>"; 

	$message .= "</table><br>";

	$message .= '<table class="table-border" style="border-color: #666; background: #eee; cellpadding="10">';
	$message .= "<tr>
					<td><strong>Estimated Savings Per Month:</strong> </td>
					<td>" . $_POST['Savings_per_month'] . "</td>
					<td><strong>Lifetime Savings:</strong> </td>
					<td>" . $_POST['lifeTimeSavingsTotal'] . "</td>
					
				</tr>
				<tr>
					<td><strong>CO2 emission avoided:</strong> </td>
					<td>" . $_POST['co2'] . "</td>
					<td><strong>Equivalent To Emissions From Car Travelling:</strong> </td>
					<td>" . $_POST['carTraveling'] . "</td>
				</tr>"; 

	$message .= "</table><br><br>";

	$message .= "<h6>Thanks and Regards</h6>
					<p>Exide team</p>
				";

	$message .= "</body></html>";


	echo $message;
	//echo $headers;



	$response=mail($to, $subject, $message, $headers);

	if($response==1)
	{
	echo "<script language='javascript' type='text/javascript'>
	        
	       window.location = 'index.html';
	    </script>";

	}
	else{
	echo 
	"<script language='javascript' type='text/javascript'>
	        alert('mail send failed');
	    </script>";
	}
} else {
	echo "There is a problem with the document!";
}

?>