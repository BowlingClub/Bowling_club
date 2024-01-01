<html>
	<body>
	<?php
//aisha_restaurant=tuko nama database
$con = mysqli_connect("localhost","root","","BOWLING_CLUB");
if (!$con)
{
die('Could not connect: ' . mysqli_error ());
}

//reservation_2023=tuko nama table
		$sql="INSERT INTO REGISTRATION (cust_name, cust_phone, cust_email, cust_address, cust_ic, cust_gender)
VALUES
('$_POST[cust_name]','$_POST[cust_phone]','$_POST[cust_email]',' $_POST[cust_address]','$_POST[cust_ic]','$_POST[cust_gender]')";
		


if ($con->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
		
		
<p><button type="submit" value="submit" ><a href="show.data.php" target="blank">View Record</a></button></p>
		
</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>