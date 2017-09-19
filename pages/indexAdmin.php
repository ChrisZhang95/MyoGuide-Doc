<?php
	session_start();
	//Can only access when logged in
	if(empty($_SESSION['username'])){
		header("HTTP/1.0 400 Bad Request", true, 400);
	   	exit('400: Bad Request');
	}
	else{
		$conn = mysql_connect("localhost", "root", "");
		mysql_select_db("MyoGuideDB");
		$result = mysql_query("SELECT username FROM `Admin`", $conn);
		while ($row = mysql_fetch_array($result)) {
			if($row['username'] == $_SESSION['username']){
				$admin = true;
				$username = $row['username'];
				break;
			}
		}

	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MyoGuide Doc Management</title>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<link href="../css/style.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="rightclick.js"></script>
		<script src="../js/click.js"></script>

	</head>


	<body>
			<div class="header2">
				<span><a href="../index.php"><h1><strong>MyoGuide Doc Management</strong></h1></a></span>
				<span class="greeting"><?php echo "<h2>Welcome, $username!</h2>"; ?></span>
			</div><br>
		</div>
		
		<div>
			<button id="tableType">License Table</button>
		</div>

		<div class="info">

			<div id="customerTable">
				<h2>Customer Table</h2>
				<table id="customerlist">
					<tr class="attribute">
					    <th>Customer ID</th>
					    <th>First Name</th> 
					    <th>Last Name</th>
					    <th>Phone No.</th>
					    <th>Email</th>
					    <th>City</th>
					    <th>Street</th>
					    <th>Street No.</th>
					    <th>Unit No.</th>
					</tr>

					<?php
						
						$result = mysql_query("SELECT * FROM `Customer` order by cID", $conn);
						
						while ($row = mysql_fetch_array($result)) {
							$cID = $row['cID'];
							$firstName = $row['firstName'];
							$lastName = $row['lastName'];
							$phone = $row['phone'];
							$email = $row['email'];
							$city = $row['city'];
							$street = $row['street'];
							$streetNum = $row['streetNum'];
							$unitNum = $row['unitNum'];
							echo "<tr class='trow' id=$cID><th>$cID</th><th>$firstName</th><th>$lastName</th><th>$phone</th><th>$email</th><th>$city</th><th>$street</th><th>$streetNum</th><th>$unitNum</th>";		
						}
					?>
				</table>
			</div>

			<div id="licenseTable">
			<h2>License Table</h2>
				<table id="licenselist">
					<tr class="attribute">
					    <th>Serial No.</th>
					    <th>Type</th> 
					    <th>Customer ID</th>
					</tr>

					<?php
						
						$result = mysql_query("SELECT * FROM `License` order by serialNum", $conn);
						
						while ($row = mysql_fetch_array($result)) {
							$serialNum = $row['serialNum'];
							$licenseType = $row['licenseType'];
							$cID = $row['cID'];
							echo "<tr class='trow' id=$cID><th>$serialNum</th><th>$licenseType</th><th>$cID</th>";		
						}
					?>
				</table>
			</div>
		</div>
	</body>
</html>