<!DOCTYPE html>
<html>
<head>
	<title>Laungry Room Sign Up</title>
</head>
<body>
	<form action="" method="post">
		<?php
		if(isset($_REQUEST['usid']) && isset($_REQUEST['psw']))
		{
			$uid = $_REQUEST['usid'];
			$pwd = $_REQUEST['psw'];
			$conn = mysqli_connect ("localhost","root");

			if (!$conn)
				die ( "Error connecting to DBMS" .mysqli_connect_error() );
			$sql = "SELECT * FROM LOGIN.USERS WHERE UserId = '".$uid."'";

			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0)
			{
				$sql = $sql."and Password = '".$pwd."'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0)
				{
					header('location:slotSelection.html');
					echo "<p> LOGIN SUCCESSFUL </p>";
				}
				else
				{
					include "login.html";
					echo "<p> LOGIN FAILED </p>";
				}
			}
			else
			{
				$sql = "INSERT INTO LOGIN.USERS (UserId, Password) VALUES ('".$uid."','".$pwd	."')";
				$result = mysqli_query($conn, $sql);
				if ($result)
					echo "<p> USER CREATED </p>";
			}
		}
		else
			include "login.html";
			

		?>
	</form>

</body>
</html>