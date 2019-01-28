<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "shopping";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}
	echo "connected to " . "$dbname" . "<br>";	
	
?>

<html>
<body>
	<form action="add.php" method="post">
	Item: <input type="text" name="item">
	<br><br>
	Qty: <input type="text" name="qty">
	<br>
  <input type="submit" value="show">
</form>
	
	</body>
</html>
