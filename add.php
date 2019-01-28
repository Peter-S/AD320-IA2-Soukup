<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "shopping";
	
	$conn = new mysqli($servername, $username, $password, $dbname);


	$sql = "INSERT INTO shopping_list
			(Item, Quanity)
		VALUE
			('$_POST[item]', '$_POST[qty]')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully". "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


	$query = "select * from shopping_list";
	$result = $conn->query($query);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "Item_Id: " . $row["ID"] .
				"  -  Item: " . $row["Item"] .
				"  -  Quanity: " . $row["Quanity"] . "<br>" ;
		}
	}

	
?>
