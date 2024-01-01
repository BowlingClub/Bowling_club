<html>
<head>
<title>Data From Database</title>
</head>
<body>
	<br>
<h1 align="center">Data From Database</h1>

	
<?php
// Setting up connection with database = host,user,password & dB name
$connection = mysqli_connect("localhost", "root", "", "BOWLING_CLUB");

// Check connection
if (mysqli_connect_errno())
{
echo "Database connection failed.";
}

// query to fetch data from the table (membuat query select)=tuko nama table
$query = "SELECT * FROM REGISTRATION";

// Execute the query and store the result set (membaca data)
$result = mysqli_query($connection, $query);


//setup table showing data from dB
if ($result->num_rows > 0)  {
 echo "<table table border='1' align='center'><tr>
<th>cust_name</th>
<th>cust_ic</th>
<th>cust_email</th>
<th>cust_phone</th>
<th>cust_gender</th>
<th>cust_address</th>
</tr>";

 // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
             echo "<td>" . $row['cust_name'] . "</td>";
             echo "<td>" . $row['cust_ic'] . "</td>";
             echo "<td>" . $row['cust_email'] . "</td>";
             echo "<td>" . $row['cust_phone'] . "</td>";
             echo "<td>" . $row['cust_gender'] . "</td>";
             echo "<td>" . $row['cust_address'] . "</td>";
             echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

     // Connection close
     mysqli_close($connection);
 ?>
	
	</body>
</html>