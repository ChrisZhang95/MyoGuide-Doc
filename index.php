<!DOCTYPE html>
<html>
	<head>
		<title>MyoGuide Doc</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<link href="css/style.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
		<script src="js/login.js"></script>

	</head>


	<body>
		<div class="header">
			<!-- <h1 class="header2"><strong>MyoGuide Doc</strong></h1>
 -->			<img class="header2" src="pics/logo.jpg">
		</div>
		
		
		<div class="login-form">
			<div>
				<p>
					Username: 
					<input type="text" name="username" id="username" onkeydown="if (event.keyCode == 13)
                        document.getElementById('login').click()">
                </p>
				<p>
				Password: 
				<input type="password" name="password" id="password" onkeydown="if (event.keyCode == 13)
                        document.getElementById('login').click()">
                </p>
				<p><label style="padding-left: 55%;"><button id="login" class="login" onclick="login()">Login</button></label></p>
			</div>	
		</div> 
	</body>
</html>