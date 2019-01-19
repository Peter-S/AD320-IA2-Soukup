<html>
<body>

Name:   <?php echo $_GET["name"]; ?>
	<br><br>
Email: <?php echo $_GET["email"]; ?>
	<br><br>
<?php
	if(!empty($_GET["phone"])) {
		echo "Phone: " . $_GET["phone"];
		echo nl2br ("\n\n");
	}
?>
<?php
	if(!empty($_GET["state"])) {
		echo "State: " . $_GET["state"];
	}
?>
</body>
</html>