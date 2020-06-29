<html>
<body>
<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="index.css"> 
	<title>Welcome Page</title> 
</head> 
<?php
session_start();
echo "<h2>Welcome </h2>";
$info = unserialize($_SESSION['userInfo']);
echo $info->getFatherName();
?>
<body> 
		<div class="login-box"> 
			<h1>Welcome</h1> 

			<div class="textbox"> 
				EMPLOYEE ID
				<input type="text" 
						name="username" value=""/> 
			</div> 
 

		</div> 

</body> 

</body>
</html>

