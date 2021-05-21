<!-- <!-- <!DOCTYPE html>
<html>
<head>
	<title>Laungry Room Sign Up</title>
</head>
<body>
	<form action="" method="post">
		<?php
		//if(isset($_GET['meeting-time']))
		{
			//header('location:'.$submitInfo.html);
			//echo "<p> LOGIN SUCCESSFUL </p>";
			// $meetingtime = $_REQUEST['meeting-time'];
			 //$conn = mysqli_connect ("localhost","root");

			// if (!$conn)
			// 	die ( "Error connecting to DBMS" .mysqli_connect_error() );
			 //$sql = "SELECT * FROM LOGIN.APPOINTMENTS WHERE aptDate = '".$meetingtime."'";

			// $result = mysqli_query($conn, $sql);
			// if (mysqli_num_rows($result) > 0)
			// {
				
			// 	$result = mysqli_query($conn, $sql);
			// 	if (mysqli_num_rows($result) > 0)
			// 	{
			// 		header('location:submitInfo.html');
			// 		echo "<p> LOGIN SUCCESSFUL </p>";
			// 	}
			// 	else
			// 	{
			// 		echo "<p> NOT SCHEDULED </p>";
			// 	}
			// }
			// else
			// {
			 	//$sql = "INSERT INTO LOGIN.APPOINTMENTS (aptDate) VALUES ('".$meetingtime."')";
			// 	$result = mysqli_query($conn, $sql);
			// 	if ($result)
			// 		echo "<p> APPOINTMENT SCHEDULED </p>";
			// }
		}
		//else
		//	include "slotSelection.html";


		?>
	</form>

</body>
</html> --> -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect( $servername, $username, $password, $dbname );

// Check connection
if ( !$conn ) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to insert data into table
$sql = "INSERT INTO appointments( date ) 
        VALUES( '2018-12-05 12:39:16' );";

if (mysqli_query($conn, $sql)) {
	header('location:finalConfirmation.html');
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close coneection
mysqli_close($conn);
?>
